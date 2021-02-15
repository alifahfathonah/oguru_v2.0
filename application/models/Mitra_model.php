<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra_model extends CI_Model {

  // constructor
    function __construct()
    {
        parent::__construct();
    }

    public function add_mitra() {
        $data['nama'] = html_escape($this->input->post('nama_mitra'));
        $data['link'] = html_escape($this->input->post('link'));
        $this->db->insert('mitra', $data);
        $mitra_id = $this->db->insert_id();
        $this->upload_mitra_image($mitra_id);
        $this->session->set_flashdata('flash_message', 'Berhasil menambahkan mitra');
    }

    public function get_all_mitra(){
        $this->db->where('status', 1);
        return $this->db->get('mitra');
    }

    public function edit_mitra($mitra_id = "") { 
        $data['nama'] = html_escape($this->input->post('nama_mitra'));
        $data['link'] = html_escape($this->input->post('link'));
        $this->db->where('id', $mitra_id);
        $this->db->update('mitra', $data);
        $this->upload_mitra_image($mitra_id);
        $this->session->set_flashdata('flash_message', 'Berhasil mengedit mitra');
        
    }

    public function aktif_mitra($id = "") {
        $data['status'] = 1;
        $this->db->where('id', $id);
        $this->db->update('mitra', $data);
        $this->session->set_flashdata('flash_message', 'Berhasil mengaktifkan mitra');
    }

    public function nonaktif_mitra($id = "") {
        $data['status'] = 0;
        $this->db->where('id', $id);
        $this->db->update('mitra', $data);
        $this->session->set_flashdata('flash_message', 'Berhasil menonaktifkan mitra');
    }

    

    public function delete_mitra($mitra_id = "") {

        $this->db->where('id', $mitra_id);
        $this->db->delete('mitra');
        $this->session->set_flashdata('flash_message', 'Berhasil menghapus mitra');
    }

    public function get_mitra() {
        return $this->db->get('mitra');
    }

    public function upload_mitra_image($id) {
        if (isset($_FILES['logo_mitra']) && $_FILES['logo_mitra']['name'] != "") {
            move_uploaded_file($_FILES['logo_mitra']['tmp_name'], 'uploads/logo_mitra/'.$id.'.jpg');
            // $this->session->set_flashdata('flash_message', get_phrase('user_update_successfully'));
        }
    }

    public function get_mitra_image_url($id) {

        if (file_exists('uploads/logo_mitra/'.$id.'.jpg'))
             return base_url().'uploads/logo_mitra/'.$id.'.jpg';
        else
            return base_url().'uploads/logo_mitra/placeholder.png';
    }

    
}
