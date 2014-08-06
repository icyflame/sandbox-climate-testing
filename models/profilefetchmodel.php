<?php

class profilefetchmodel extends CI_Model{
	
	public function __construct(){

		parent::__construct();

		$this->load->database();

		$this->load->library('session');

	}

	public function getStatusData($alumid){

		$query = "SELECT * FROM alumni WHERE alumid='$alumid'";

		// echo $query;

		$res = $this->db->query($query);

		$data = $res->result_array();

		return $data[0];

	}

	public function getProfileData($alumid){

		$query = "SELECT a.*, afd.* FROM alumni a, alumnifulldata afd WHERE a.alumid = afd.alumid AND a.alumid='$alumid'";

		// echo $query;

		$res = $this->db->query($query);

		// $data = $res->result_array();

		// return $data[0];

		return $res;

	}
	
	public function updateSearch($alumid, $value){

		$query = "UPDATE status SET search='$value' WHERE alumid='$alumid'";

		// echo $query;

		$res = $this->db->query($query);

	}

	public function updateCalling($alumid, $value){

		$query = "UPDATE status SET called='$value' WHERE alumid='$alumid'";

		// echo $query;

		$res = $this->db->query($query);
		
	}

	public function getSearch($alumid){

		$query = "SELECT search FROM status WHERE alumid='$alumid'";

		// echo $query;

		$res = $this->db->query($query);

		$res = $res->result_array();

		$res = $res[0]['search'];

		return $res;
		
	}

	public function getCalling($alumid){

		$query = "SELECT called FROM status WHERE alumid='$alumid'";

		// echo $query;

		$res = $this->db->query($query);

		$res = $res->result_array();

		$res = $res[0]['called'];

		return $res;
		
	}

	public function checkallotment($alumid){

		// returns false if the allotment is legal
		// returns true if the allotment is illegal

		$query = "SELECT touserid from status where alumid='$alumid'";

		$res = $this->db->query($query);

		$res = $res->result_array(); 

		return !($res[0]['touserid'] == $this->session->userdata('userid'));
	}

}

?>