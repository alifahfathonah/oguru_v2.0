<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        /*cache control*/
    }

    public function login(){
    	$email = $this->input->post('email');
        $password = $this->input->post('password');
        // die(site_url('login/validate_login/').$email.'/'.$password.'/'.$perulangan);
        $credential = array('email' => $email, 'password' => sha1($password));

        // Checking login credential for admin
        $query = $this->db->get('users');
        
        return "dancok";
        
    }
}