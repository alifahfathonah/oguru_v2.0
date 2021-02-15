<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Ovidi extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->database();
        $this->load->model('api_model');
    }

    public function video_post(){
    	
    	$kategori = "all";
    	if($this->post('kategori')){
    		$kategori = $this->crud_model->get_category_id($this->post('kategori'));
    	}
    	if($this->post('id')){
    		$video = $this->db->get_where('video', array('id' => $this->post('id')))->row_array();
    		$this->response( [
	            'status' => true,
	            'video' => $video
	        ], 200 );
    	}else{
    		if($kategori == "all"){
    			$video = $this->db->get_where('video',array('status' => 1))->result_array();
    			$this->response( [
		            'status' => true,
		            'video' => $video
		        ], 200 );
    		}else{
    			$video = $this->crud_model->filter_video($kategori);
    			$this->response( [
		            'status' => true,
		            'video' => $video
		        ], 200 );
    		}
    	}
    	$this->response( [
            'status' => true,
            'video' => "asd"
        ], 200 );
    }
}