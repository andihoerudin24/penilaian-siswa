<?php

Class Pelanggaran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_pelanggaran');
    }

    function index() {
        $data['pelanggaran'] = $this->db->get("pelanggaran")->result();
        $this->template->load('template', 'pelanggaran/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_pelanggaran->add();
            echo $this->session->set_flashdata('Berhasil', 'suskes menambahkan bobot....');
            redirect('Admin/Pelanggaran');
        } else {
            $this->template->load('template', 'pelanggaran/list');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_pelanggaran->edit();
            redirect('Admin/Pelanggaran');
            
        } else {
            $id = $this->uri->segment(4);
            $data['pelanggaran'] = $this->db->get_where('pelanggaran', array('id' => $id))->row_Array();
            $this->template->load('template', 'pelanggaran/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('id', $id);
        $this->db->delete('pelanggaran');
        echo $this->session->set_flashdata('Hapus', 'Berhasil Dihapus....');
        redirect('Admin/Pelanggaran');
    }

}

?>