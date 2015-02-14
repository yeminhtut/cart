<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class User extends CI_Controller {
	function __construct()
	 {
	   parent::__construct();
	   $this->load->model('user_model','',TRUE);
	 }
	public function index()
	{
		echo 'login';
		$this->load->view('user/login');
	}
	public function login(){
		$this->load->helper(array('form'));
   		$this->load->view('user/login');
	}
	public function verify_login(){
		   //This method will have the credentials validation
		   $this->load->library('form_validation'); 
		   $this->form_validation->set_rules('email', 'Email', 'required');
		   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		 
		   if($this->form_validation->run() == FALSE)
		   {
		    $this->load->view('user/login');
		   }
		   else
		   {
		     //redirect('home', 'refresh');
		   	echo 'go to private area';
		   	var_dump($this->session->userdata('logged_in'));
		   }
	}
	function check_database($password)
	 {
	   
	   $username = $this->input->post('username'); 
	   
	   $result = $this->user_model->login($username, $password);
	 
	   if($result)
	   {
	     $sess_array = array();
	     foreach($result as $row)
	     {
	       $sess_array = array(
	         'id' => $row->id,
	         'email' => $row->email
	       );
	       $this->session->set_userdata('logged_in', $sess_array);
	     }
	     return TRUE;
	   }
	   else
	   {
	     $this->form_validation->set_message('check_database', 'Invalid username or password');
	     return false;
	   }
	 }
	function logout()
	{
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   redirect('index.php/home', 'refresh');
	   var_dump($this->session->userdata('logged_in'));
	 }
}
