<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class User extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->database();
    }

    public function user_post(){
    	if($this->post('id')){
    		$user = $this->user_model->get_all_user($this->post('id'))->row_array();	
    	}else{
    		$user = $this->user_model->get_all_user()->result_array();	
    	}
    	$this->response( [
            'status' => true,
            'user' => $user
        ], 200 );
    }
    
}