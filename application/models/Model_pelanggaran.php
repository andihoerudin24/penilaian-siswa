<?php
Class Model_pelanggaran extends CI_Model {

    function edit() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'bobot' => $this->input->post('bobot')
        );
        $id= $this->input->post('Id');
        $this->db->where('Id',$id);
        $this->db->update('pelanggaran',$data);
    }

    function add() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'bobot' => $this->input->post('bobot'),
        );
        $this->db->insert('pelanggaran', $data);
    }

}

?>