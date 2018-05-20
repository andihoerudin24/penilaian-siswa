<?php

Class History extends CI_Controller {

    function index() {
        $nis          = $this->session->userdata('nis');
        $data['data'] = $this->db->query("SELECT p.nis,s.nama,pl.nama as nama__pelanggaran, pl.bobot,p.tanggal,p.keterangan FROM `penilaian` as p, pelanggaran as pl,siswa as s WHERE p.id_pelanggaran=pl.Id and p.nis=s.nis and p.nis='$nis' ")->result();
        $this->template->load('template', 'history/list', $data);
    }

}

?>