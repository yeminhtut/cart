<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->model('home_model');
		$data['products'] = $this->home_model->retrieve_products(); 
		$data['content'] = 'cart/products';
		//var_dump($data);
		$this->load->view('home', $data); 
	}
}
