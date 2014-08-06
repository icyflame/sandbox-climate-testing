<?php

class profilefetch extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->model('profilefetchmodel');

		$this->load->model('feedupdate');

		$this->load->library('session');

		$this->load->helper('url');
	}

	public function index(){

		// probably have a check here for the privilege of the user
		// and then load the appropriate view.

		echo 'The index function has been called';
	}

	public function showstatus($alumid){

		if($this->profilefetchmodel->checkallotment($alumid)){

			echo $this->load->view('templates/header.html', array(), TRUE);

			echo '<h2>This Alumni was not allotted to you.<br/><h2>';

			$url = site_url('member/specificYear');

			echo "<h4><a href='$url'>Go back to Summary Page</a><h4>";

			echo $this->load->view('templates/footer.html', array(), TRUE);

			die;
		}

		$data = $this->profilefetchmodel->getStatusData($alumid);

		// print_r($data);

		$s_stat = $this->profilefetchmodel->getSearch($alumid);
		$c_stat = $this->profilefetchmodel->getCalling($alumid);

		// echo 'Search: ', $s_stat;
		// echo 'Calling: ', $c_stat;


		$s_1 = '';
		$s_2 = '';
		$s_3 = '';
		$s_4 = '';

		$c_1 = '';
		$c_2 = '';
		$c_3 = '';
		$c_4 = '';

		switch($s_stat){

			case 1: 
			$s_1 = 'active';
			break;

			case 2: 
			$s_2 = 'active';
			break;

			case 3: 
			$s_3 = 'active';
			break;

			case 4: 
			$s_4 = 'active';
			break;
		}


		switch($c_stat){

			case 1: 
			$c_1 = 'active';
			break;

			case 2: 
			$c_2 = 'active';
			break;

			case 3: 
			$c_3 = 'active';
			break;

			case 4: 
			$c_4 = 'active';
			break;
		}

		$class_data = array(
			'c_1'=>$c_1,
			'c_2'=>$c_2,
			'c_3'=>$c_3,
			'c_4'=>$c_4,
			's_1'=>$s_1,
			's_2'=>$s_2,
			's_3'=>$s_3,
			's_4'=>$s_4
			);

		$final_data = array_merge($data, $class_data);

		// print_r($final_data);

		$this->load->view('templates/header.html');
		$this->load->view('profileview/profilefetchview', $final_data);
		$this->load->view('templates/footer.html');

	}

	public function showprofile($alumid){

		$data = $this->profilefetchmodel->getProfileData($alumid);

		$final_data['data'] = $data;

		$this->load->view('templates/header.html');
		$this->load->view('profileview/profilefullview', $final_data);
		$this->load->view('templates/footer.html');

	}

	public function updateSearch($alumid, $value){

		$s_stat = $this->profilefetchmodel->getSearch($alumid);

		$this->feedupdate->updateFeed($alumid, 'search', $s_stat, $value);

		$this->profilefetchmodel->updateSearch($alumid, $value);

		$url = site_url('profilefetch/showstatus/'.$alumid);

		Header("Refresh: 0, url='$url'");

	}

	public function updateCalling($alumid, $value){

		$c_stat = $this->profilefetchmodel->getCalling($alumid);

		$this->feedupdate->updateFeed($alumid, 'called', $c_stat, $value);

		$this->profilefetchmodel->updateCalling($alumid, $value);

		$url = site_url('profilefetch/showstatus/'.$alumid);

		Header("Refresh: 0, url='$url'");

	}

}

?>