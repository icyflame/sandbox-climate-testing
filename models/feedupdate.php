<?php

class feedupdate extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

		$this->load->helper('url');

		$this->load->library('session');

	}

	public function updateFeed($alumid, $field, $earlier, $present){

		$uid = $this->session->userdata('userid');

		$username = $this->session->userdata('username');

		$value = $username.' changed the value of '.$field.' from '.$earlier.' to '.$present.' for Alumni ID '.$alumid;

		$query = "INSERT INTO `latestactivity`(`alumid`, `userid`, `newsitem`) VALUES('$alumid', '$uid', '$value')";

		$res = $this->db->query($query);

		// if($res = $this->db->query($query))

		// 	echo 'Query executed successfully.';

		// else

		// 	echo 'Query unsuccessful.';



	}

	public function getData(){

		$query = "SELECT * FROM latestactivity ORDER BY activitytime DESC";

		$res = $this->db->query($query);

		// print_r($res->result_array());

		$final_data = $res->result_array();
		// $final_data = $final_data[0];

		// print_r($final_data);

		return array('data'=>$final_data);

		// return $final_data;

	}
}

?>