<?php 
	class Home_model extends CI_Model {

    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    

    function retrieve_products()
    {
    	$query = $this->db->get('products'); 
        return $query->result_array(); 
    }
}




 ?>