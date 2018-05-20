<?php

Class Penilaian extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_penilaian');
    }

    function index() {
        $data['nilai'] = $this->db->query("SELECT p.id_nilai,s.alamat,s.nama,s.kelas,p.tanggal,pl.bobot,s.nis,p.keterangan,s.no_hp_ortu,pl.nama as tingakt_kenakalan FROM penilaian as p,siswa as s,pelanggaran as pl WHERE p.id_pelanggaran=pl.id and p.nis=s.nis")->result();
        $this->template->load('template', 'penilaian/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_penilaian->add();
            echo $this->session->set_flashdata('Berhasil', 'Berhasil Menambahkan Nilai SMS KE NMR ORANG TUA SUDAH BERHASIL....');
            redirect('Admin/Penilaian');
        } else {
            $this->template->load('template', 'penilaian/add');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_penilaian->edit();
           echo $this->session->set_flashdata('edit', 'Berhasil DI edit....');
            redirect('Admin/Penilaian');
            
        } else {

            $id = $this->uri->segment(4);
            $data['nilai'] = $this->db->get_where('v_nilai', array('id_nilai' => $id))->row_array();
            $this->template->load('template', 'penilaian/edit', $data);
        }
    }
    
    function Hapus(){
        $id= $this->uri->segment(4);
        $this->db->where('id_nilai',$id);
        $this->db->delete('penilaian');
        echo $this->session->set_flashdata('hapus', 'Berhasil Menambahkan Nilai SMS KE NMR ORANG TUA SUDAH BERHASIL....');
        redirect('Admin/Penilaian');
    }
                function form_autocomplit() {
        $nis = $_GET['nis'];
        $sql_siswa = "select * from siswa where nis='$nis'";
        $siswa = $this->db->query($sql_siswa)->row_Array();
        $data = array(
            'no_hp_ortu' => $siswa['no_hp_ortu']
        );
        echo json_encode($data);
    }

}
?>