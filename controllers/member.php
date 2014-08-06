<?php

class member extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->model('summaryMember');

		$this->load->library('session');

		$this->load->helper('url');
	}

	public function index(){

		// probably have a check here for the privilege of the user
		// and then load the appropriate view.

		header('Refresh:2, url="member/specificYear/"');
	}

	public function specificYear($year=''){

		$this->load->view('templates/header.html');
		$this->load->view('summary/summary-member.php', $this->summaryMember->getdata_allyears($year));
		$this->load->view('templates/footer.html');

	}

}

?>