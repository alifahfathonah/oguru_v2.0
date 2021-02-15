<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->database();
        $this->load->model('api_model');
    }

    public function login_post(){
        
        $user = $this->db->get('users')->result_array();
        // if($row->status == 1){
        $this->response( [
            'status' => true,
            'user' => $user
        ], 200 );
        // $query = $this->api_model->login();
        // if ($query->num_rows() > 0) {
            
        //     $row = $query->row();
        //     if($row->status == 1){
        //         $this->response( [
        //             'status' => true,
        //             'user' => $row
        //         ], 200 );
                
                
        //     }
        //     else{
        //         $this->response( [
        //             'status' => false,
        //             'message' => 'Verifikasi email anda!'
        //         ], 404 );
        //     }
        // }else {
        //     $this->response( [
        //             'status' => false,
        //             'message' => 'Akun tidak terdaftar!'
        //         ], 404 );
                

        // }
    }

    public function users_post()
    {
        // Users from a data store e.g. database
        $users = [
            ['id' => 0, 'name' => 'John', 'email' => 'john@example.com'],
            ['id' => 1, 'name' => 'Jim', 'email' => 'jim@example.com'],
        ];
        $id = "";
        if($this->post('id')){
            $id = $this->post('id');

        }

        if ( $id === "" )
        {
            // Check if the users data store contains users
            if ( $users )
            {
                // Set the response and exit
                $this->response( $users, 200 );
            }
            else
            {
                // Set the response and exit
                $this->response( [
                    'status' => false,
                    'message' => 'No users were found'
                ], 404 );
            }
        }
        else
        {
            if ( array_key_exists( $id, $users ) )
            {
                $this->response( $users[$id], 200 );
            }
            else
            {
                $this->response( [
                    'status' => false,
                    'message' => 'No such user found'
                ], 404 );
            }
        }
    }
}



// <?php
// defined('BASEPATH') OR exit('No direct script access allowed');

// use chriskacerguis\RestServer\RestController;

// class Api extends RestController {

//     function __construct()
//     {
//         // Construct the parent class
//         parent::__construct();
//         $this->load->database();
//         $this->load->model('api_model');
//     }

    
// }