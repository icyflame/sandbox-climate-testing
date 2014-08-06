<?php

session_start();

class auth extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->model('userdb');

		$this->load->library('session');

		$this->load->helper('url');

	}

	public function index(){

		if(isset($_SESSION['loggedin'])){

			$url = site_url('member/specificYear');

			header("Refresh:0, url='$url'");
		}

		else{

			$this->loginval();

		}
	}

	public function loginval()
	{

		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Login Page';

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			// echo 'Form not yet validated successfully. Try Again.';

			$this->load->view('authentication/login');

		}
		else
		{

			$data['status'] = 'Not logged in.';

			$res = $this->userdb->checklogin();

			if($res){

				$url = site_url('member/specificYear');

				header("Refresh:0, url='$url'");

				$data['status'] = 'Logged in successfully';

				// $data['username'] = $this->userdb->getusername();

				// $sessdat = array(
				// 	'loggedin'=>1,
				// 	'username'=>$this->userdb->getusername()
				// 	);

				$sessdat = $this->userdb->getdata();

				$this->session->set_userdata($sessdat);

				$_SESSION['loggedin'] = '0';
				$_SESSION['time'] = time();

				// $this->load->view('authentication/viewstat', $data);

				$url = site_url('member/specificYear');

				header("Refresh:0, url='$url'");

			}

			else{

				$this->load->view('authentication/login');

				// $this->loginval();

			}

			// $this->load->view('viewstat', $data);

		}

	}

	// public function checkloggedin(){

	// 	$last_active = $this->session->userdata('last_activity');

	// 	echo $last_active.'<br/>';
	// 	echo time().'<br/>';

	// 	if (time() - $last_active > 3){

	// 		$this->session->sess_destroy();

	// 	}

	// }

	public function logout(){

		$this->session->sess_destroy();

		unset($_SESSION['loggedin']);

		$this->loginval();
	}

}

?>