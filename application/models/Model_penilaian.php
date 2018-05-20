<?php
Class Model_penilaian extends CI_Model{
    
    
    
    function add(){
        $data=array(
            'id_pelanggaran'     => $this->input->post('id_pelanggaran'),
            'nis'       => $this->input->post('nis'),
            'keterangan'=> $this->input->post('keterangan'),
            'tanggal'   => $this->input->post('tanggal'),
        );
        $this->db->insert('penilaian',$data);
    }
    
    function edit(){
        $data=array(
            'id_pelanggaran' => $this->input->post('id_pelanggaran'),
            'nis'       => $this->input->post('nis'),
            'keterangan'=> $this->input->post('keterangan'),
            'tanggal'   => $this->input->post('tanggal'),
        );
        $id_nilai=$this->input->post('id_nilai');
        $this->db->where('id_nilai',$id_nilai);
        $this->db->update('penilaian',$data);
    }
}


?>