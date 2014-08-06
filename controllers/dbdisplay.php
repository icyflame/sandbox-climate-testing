<?php

class dbdisplay extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->model('dbdispmodel');

		$this->load->library('session');

		$this->load->helper('url');

	}

	public function index(){

		header('Refresh:2, url="dbdisplay/buildTable/0"');

		// $this->buildTable();

	}

	public function buildTable($year='0', $call=''){

		$year1 = $this->session->userdata('year1');
		$year2 = $this->session->userdata('year2');
		$year3 = $this->session->userdata('year3');

		$dataDump = $this->dbdispmodel->getAllData($year, $call);

		$data = array(
			'all'=>$dataDump['res'],
			'count'=>count($dataDump['res']),
			'year1'=>$year1,
			'year2'=>$year2,
			'year3'=>$year3
			);

		// print_r(array_merge($data, $dataDump['class']));

		$all_data_1 = array_merge($data, $dataDump['class']);
		$all_data = array_merge($all_data_1, array('current_year'=>$year));

		// print_r($data);


		$this->load->view('templates/header.html');
		$this->load->view('dbdisp/dbdispview', $all_data);
		$this->load->view('templates/footer.html');

	}

}

?>