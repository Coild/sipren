<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        error_reporting(0);
        date_default_timezone_set('Asia/Jakarta');

        if ($this->session->userdata('id_admin') == '') {
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        // $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();


        $this->load->view('templates/app');

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }
}
