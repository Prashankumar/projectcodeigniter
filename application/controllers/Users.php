<?php
class Users extends CI_Controller {
public function login()
{
	//$_POST['username'];
// echo	$this->input->post('username');
// echo "<br>";
// echo	$this->input->post('password');
 $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
 $this->form_validation->set_rules('email', 'Email', 'required');
 $this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
 $this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[3]|matches[password]');

if($this->form_validation->run()==FALSE){

	$data=array(
		              'errors'=>validation_errors()
	             );
	$this->session->set_flashdata($data);
redirect('home');
}
else {
	
	    $username=$this->input->post('username');
	    $email=$this->input->post('email');
	    $password=$this->input->post('password');
	    $confirmpassword=$this->input->post('confirm_password');
	    $user_id=$this->user_model->login_user('$username,$email,$password,$confirmpassword');
           if($user_id){
	                            $user_data=array(
                                'user_id'=>$user_id,
                                'username'=>$username,
                                'logged_in'=>true);
	                            $this->session->set_userdata($user_data);
	                            $this->session->set_flashdata('login_sucess','you are now logged in');
	                             redirect('home/index');
                        }
  else{
	        $this->session->set_flashdata('login_failed','Sorry you are not logged in');
	          redirect('home/index');
       }
    }
}
}
?>
<!--	public function show() {
		//$this->load->model('user_model');
		$result = $this->user_model->get_user();
		// $data['welcome'] = "welcome to my page";
		// $this->load->view('user_view',$data);
		 foreach($result as $data){
			echo "$data->username <br>";
		} 
	}-->