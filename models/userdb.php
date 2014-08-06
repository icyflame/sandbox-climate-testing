<?php

class userdb extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function checklogin(){

		$username = $this->input->post('username');
		$pwentered = $this->input->post('password');

		$res = $this->db->query("SELECT password FROM users WHERE username='$username'");

		$pw = '';

		foreach($res->result() as $row){

			$pw = $row->password;

		}

		if ($pw == ''){
			echo 'Username or password incorrect. Try again.';
		}

		return ($pw === md5($pwentered));

	}

	public function getdata(){

		$username = $this->input->post('username');
		$pwentered = $this->input->post('password');

		$res = $this->db->query("SELECT * FROM users WHERE username='$username'");

		$pw = '';

		foreach($res->result() as $row){

			$privi = $row->privilege;
			$un = $row->username;
			$uid = $row->userid;

		}

		return array('loggedin'=>1,
			'username' => $un,
			'userid'=>$uid,
			'privilege' => $privi,
			'year1'=>'1965',
			'year2'=>'1975',
			'year3'=>'1990'
			);

	}

	public function getusername($userid=0){

		if($userid == 0)

			return 'unknown';

		else{
			$res = $this->db->query("SELECT username FROM users WHERE userid='$userid'");

			$d = $res->result_array();

			return $d[0]['username'];
		}
	}

}

?>