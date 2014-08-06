<?php

class dbdispmodel extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function getAllData($year='0', $call=''){

		$yearfilt = '';
		$tableadd = '';
		$statusfilt = '';

		$year1 = $this->session->userdata('year1');
		$year2 = $this->session->userdata('year2');
		$year3 = $this->session->userdata('year3');

		// if ($year == '0' && $call != '')

		// 	$yearfilt = '';

		if ($year != '0')

			$yearfilt = "AND alumSince='$year'";

		if ($call != ''){

			$statusfilt = "AND s.search=$call";

		}

		$userIdLoggedIn = $this->session->userdata('userid');

		$query = "SELECT a.*, c.followup, c.lastdate 
		FROM alumni a, calling c, status s
		WHERE a.alumid = c.alumid AND a.alumid = s.alumid
		AND s.touserid = '$userIdLoggedIn' $yearfilt $statusfilt";

		// echo $query;

		$res = $this->db->query($query);

		$c_all = '';
		$c_1 = '';
		$c_2 = '';
		$c_3 = '';

		switch($year){

			case '0':
			$c_all = 'active';
			break;

			case $year1:
			$c_1 = 'active';
			break;

			case $year2:
			$c_2 = 'active';
			break;

			case $year3:
			$c_3 = 'active';
			break;

		};

		$c_search = '';
		$c_dumped = '';
		$c_contact = '';
		$c_full = '';

		switch($call){

			case '1':
			$c_search = 'active';
			break;

			case '2':
			$c_dumped = 'active';
			break;

			case '3':
			$c_contact = 'active';
			break;

			case '':
			$c_full = 'active';
			break;
		}

		$class_data = array(
			'c_all'=>$c_all,
			'c_1'=>$c_1,
			'c_2'=>$c_2,
			'c_3'=>$c_3,
			'c_search'=>$c_search,
			'c_dumped'=>$c_dumped,
			'c_contact'=>$c_contact,
			'c_full'=>$c_full		

			);

		$final_data = array(
			'res'=>$res->result_array(),
			'class'=>$class_data
			);

		// print_r(array_push($res->result_array(), $final_data));

	// print_r($final_data);
	// echo '<br/>';

		return  $final_data;

		// return array_merge($res->result_array(), array('count'=>$count));
	}


}

?>