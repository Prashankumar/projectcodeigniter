<?php
class User_model extends CI_Model {
	/* public function get_user(){
	$query = $this->db->get('users');
	return $query->result();
	} */
  function __construct() {
        parent::__construct();
    }

function login_user($username,$email,$password,$confirmpassword){
$this->db->where('username',$username);
$this->db->where('password',$password);
$this->db->where('confirm_password',$confirmpassword);
$this->db->where('email',$email);
$result=$this->db->get('users');
if($result->num_rows()==1){
	return $result->row(0)->id;
}
else {
	 
	return false;
}
	}
}
	
?>