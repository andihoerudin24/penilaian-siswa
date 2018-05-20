<?php

Class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_pengguna');
        $this->load->Model('Model_guru');
        $this->load->Model('Model_siswa');
    }

    function index(){
        $this->load->view('auth/login');
    }

    function chek_login() {
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $login_pengguna = $this->Model_pengguna->chek_login($username, $password);
            $login_guru = $this->Model_guru->chek_login($username, $password);
            $login_siswa = $this->Model_siswa->chek_login($username, $password);

            if (!empty($login_pengguna)) {
                //success login for user
                $this->session->set_userdata($login_pengguna);
                redirect('Admin/Dashboard');
            } elseif (!empty($login_guru)) {
                $this->session->set_userdata($login_guru);
                redirect('Admin/Dashboard');
            } elseif (!empty($login_siswa)) {
                $this->session->set_userdata($login_siswa);
                redirect('Admin/Dashboard');
            } else {
                redirect('Auth');
            }
        }
    }

    function Logout() {
        $this->session->sess_destroy();
        redirect('Auth');
    }

}

?>