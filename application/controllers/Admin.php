<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function index()
    {
        $data['title_page'] = "Dashboard";
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/sidebar', $data);
        $this->load->view('templates/dashboard/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/dashboard/footer');
    }
}