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
        // $this->load->view('admin/index');
        $this->load->view('presensi/presensireal');
        $this->load->view('templates/footer');
    }

    function kelola_presensi()
    {
        // $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();


        $this->load->view('templates/app');

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        // $this->load->view('admin/index');
        $this->load->view('presensi/kelolapresensi');
        $this->load->view('templates/footer');
    }

    public function cek_presensi()
    {
        // $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();


        $this->load->view('templates/app');

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        // $this->load->view('admin/index');
        $this->load->view('presensi/periksapresensi');
        $this->load->view('templates/footer');
    }

    public function data_pegawai()
    {
        // $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();


        $this->load->view('templates/app');

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        // $this->load->view('admin/index');
        $this->load->view('pegawai/data');
        $this->load->view('templates/footer');
    }

    public function status_pegawai()
    {
        // $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();


        $this->load->view('templates/app');

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        // $this->load->view('admin/index');
        $this->load->view('pegawai/status');
        $this->load->view('templates/footer');
    }


    public function surat_tugas()
    {
        // $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();


        $this->load->view('templates/app');

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        // $this->load->view('admin/index');
        $this->load->view('perizinan/tugas');
        $this->load->view('templates/footer');
    }

    public function surat_cuti()
    {
        // $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();


        $this->load->view('templates/app');

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        // $this->load->view('admin/index');
        $this->load->view('perizinan/cuti');
        $this->load->view('templates/footer');
    }


    public function uangmakan()
    {
        // $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();


        $this->load->view('templates/app');

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        // $this->load->view('admin/index');
        $this->load->view('keuangan/uangmakan');
        $this->load->view('templates/footer');
    }

    public function tukin()
    {
        // $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();


        $this->load->view('templates/app');

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        // $this->load->view('admin/index');
        $this->load->view('keuangan/tukin');
        $this->load->view('templates/footer');
    }

    public function libur()
    {
        // $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();


        $this->load->view('templates/app');

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        // $this->load->view('admin/index');
        $this->load->view('keuangan/libur');
        $this->load->view('templates/footer');
    }

    public function uploadabsen()
    {
        // $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();


        $this->load->view('templates/app');

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        // $this->load->view('admin/index');
        $this->load->view('keuangan/uploadabsen');
        $this->load->view('templates/footer');
    }

    public function pengaturan()
    {
        // $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();


        $this->load->view('templates/app');

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        // $this->load->view('admin/index');
        $this->load->view('pengaturan/index');
        $this->load->view('templates/footer');
    }

    public function backup()
    {
        // $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();


        $this->load->view('templates/app');

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        // $this->load->view('admin/index');
        $this->load->view('pengaturan/backup');
        $this->load->view('templates/footer');
    }
}
