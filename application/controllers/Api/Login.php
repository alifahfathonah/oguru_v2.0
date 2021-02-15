<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Login extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->database();
        $this->load->model('api_model');
    }

    public function register_post(){
        $data['first_name'] = html_escape($this->input->post('first_name'));
        $data['last_name']  = html_escape($this->input->post('last_name'));
        $data['email']  = html_escape($this->input->post('email'));
        $data['password']  = sha1($this->input->post('password'));

        $verification_code =  random_string('alpha', 32);
        $data['verification_code'] = $verification_code;

        if (get_settings('student_email_verification') == 'enable') {
            $data['status'] = 0;
        }else {
            $data['status'] = 1;
        }

        $data['title'] = json_encode(array());
        $data['watch_history'] = json_encode(array());
        $data['date_added'] = strtotime(date("Y-m-d H:i:s"));
        $social_links = array(
            'facebook' => "",
            'twitter'  => ""
        );
        $data['social_links'] = json_encode($social_links);
        $data['role_id']  = 2;


        $validity = $this->user_model->check_duplication('on_create', $data['email']);
        if ($validity) {
            $user_id = $this->user_model->register_user($data);
            

            if (get_settings('student_email_verification') == 'enable') {
                $this->email_model->send_email_verification_mail($data['email'], $verification_code);
                $this->response( [
                    'status' => true,
                    'message' => "Pendaftaran berhasil, cek email anda untuk verifikasi"
                ], 200  );
            }

        }else {
            $this->response( [
                'status' => false,
                'message' => "Email sudah terdaftar"
            ], 404 );
        }
    }

    public function login_post(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        // die(site_url('login/validate_login/').$email.'/'.$password.'/'.$perulangan);
        $credential = array('email' => $email, 'password' => sha1($password));

        // Checking login credential for admin
        $query = $this->db->get_where('users', $credential);
        
        $url = substr($this->input->post('urli'), 27);
        if ($query->num_rows() > 0) {
            
            $row = $query->row();
            if($row->status == 1){
                if ($row->role_id == 1) {
                    $this->response( [
                        'status' => false,
                        'message' => "Anda admin harus login web!"
                    ], 404 );
                    $this->session->set_userdata('admin_login', '1');
                     redirect(site_url('admin/dashboard'), 'refresh');   
                     
                }else if($row->role_id == 2){
                    $this->response( [
                        'status' => true,
                        'id_user' => $row->id,
                        'is_edukator' => $row->is_edukator
                    ], 200 );
                    
                }
            }
            else{
                $this->response( [
                    'status' => false,
                    'message' => "Verifikasi email anda!"
                ], 404 );
                $this->session->set_flashdata('error_message','Verifikasi email anda!');
                redirect(site_url($url), 'refresh');
            }
        }else {
            $this->response( [
                'status' => false,
                'message' => "Akun tidak terdaftar"
            ], 404 );

        }
        
        // if($row->status == 1){
        // $this->response( [
        //     'status' => true,
        //     'user' => $user
        // ], 200 );
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