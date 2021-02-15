<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Course extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->database();
    }

    public function vokasional_post(){
    	$kategori = "all";
    	$price = "all";
    	$rating = "all";

    	if($this->post('kategori')){
    		$kategori = $this->post('kategori');
    	}

    	if($this->post('price')){
    		$price = $this->post('price');
    	}

    	if($this->post('rating')){
    		$rating = $this->post('rating');
    	}

    	if($kategori == "all" && $price == "all" && $rating == 'all'){
    		$vokasional = $this->db->get_where('course',array('status' => 'active', 'parent_category' => 1))->result_array();
    	}else{
    		$vokasional = $this->crud_model->filter_vokasional($kategori, $price, $rating);
    	}
    	$this->response( [
            'status' => true,
            'course' => $vokasional
        ], 200 );
    }



    public function akademik_post(){
    	$kategori = "all";
    	$price = "all";
    	$rating = "all";

    	if($this->post('kategori')){
    		$kategori = $this->post('kategori');
    	}

    	if($this->post('price')){
    		$price = $this->post('price');
    	}

    	if($this->post('rating')){
    		$rating = $this->post('rating');
    	}

    	if($kategori == "all" && $price == "all" && $rating == 'all'){
    		$akademik = $this->db->get_where('course',array('status' => 'active', 'parent_category' => 2))->result_array();
    	}else{
    		$akademik = $this->crud_model->filter_akademik($kategori, $price, $rating);

    	}
    	$this->response( [
            'status' => true,
            'course' => $akademik
        ], 200 );
    }

    public function course_post(){
    	if($this->post('course')){
    		$course = $this->crud_model->get_course_by_id($this->post('id'))->row_array();
			$this->response( [
	            'status' => true,
	            'course' => $course
	        ], 200 );
    	}else{
    		$course = $this->crud_model->get_courses_admin()->row_array();
			$this->response( [
	            'status' => true,
	            'course' => $course
	        ], 200 );
    	}
    	
    }	

    
}	