<?php

Class Model_guru extends CI_Model {

    function chek_login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $guru = $this->db->get('guru')->row_Array();
        return $guru;
    }

    function add($uploads) {
        $data = array(
            'nama'     => $this->input->post('nama'),
            'nik'      => $this->input->post('nik'),
            'alamat'   => $this->input->post('alamat'),
            'foto'     => $uploads,
            'username' => $this->input->post('nik'),
            'password' => $this->input->post('nik'),
            'level'=>2,
        );
        $this->db->insert('guru',$data);
    }
    
    
    function edit(){
        $data=array(
            'nama'=> $this->input->post('nama'),
            'alamat'=>$this->input->post('alamat'),
        );
       $nik=$this->input->post('nik');
       $this->db->where('nik',$nik);
       $this->db->update('guru',$data);
    }

}
?>

