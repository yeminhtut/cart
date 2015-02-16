<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->model('home_model');
		$data['products'] = $this->home_model->retrieve_products(); 
		$data['content'] = 'cart/products';		
		$this->load->view('home', $data); 
	}
	public function checkout()
	{
		// $this->load->library('email');
		// $this->email->from('ye.minhtut@travelogy.com', 'Ye Min Htut');
		// $this->email->to('yehtut.it@gmail.com'); 
		// $this->email->subject('Email Test');
		// $this->email->message('Testing the email class.');	

		// $this->email->send();

		// echo $this->email->print_debugger();
		echo 'y';
	}
}
