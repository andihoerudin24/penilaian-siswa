<?php

class Siswa extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_siswa');
    }

    function index() {
        $data['siswa'] = $this->db->query('SELECT s.nis,s.nama,s.kelas,s.alamat,s.no_hp_ortu,g.nama as walikelas FROM siswa as s, guru as g WHERE s.nik=g.nik')->result();
        $this->template->load('template', 'siswa/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $uploads = $this->upload();
            $this->Model_siswa->add($uploads);
            echo $this->session->set_flashdata('Berhasil', 'Berhasil Menambahkan Siswa....');
            redirect('Admin/Siswa');
        } else {
            $this->template->load('template', 'siswa/list');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_siswa->edit();
            echo $this->session->set_flashdata('edit','success edit siswa.....');  
            redirect('Admin/Siswa');
        }else{
            $id = $this->uri->segment(4);
            $data['siswa'] = $this->db->get_where('siswa', array('nis' => $id))->row_array();
            $this->template->load('template', 'siswa/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('nis', $id);
        $this->db->delete('siswa');
        echo $this->session->set_flashdata('Hapus', 'Berhasil Menghapus Siswa....');
        redirect('Admin/siswa');
    }

    function upload() {
        $config['upload_path'] = './Uploads/siswa/';
        $config['allowed_types'] = 'png|jpg';
        $config['max_size'] = 8000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>