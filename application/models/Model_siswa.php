<?php

Class Model_siswa extends CI_Model {

    function chek_login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $siswa= $this->db->get('siswa')->row_Array();
        return $siswa;
    }
    
    function add($uploads){
        $data=array(
            'nama'         => $this->input->post('nama'),
            'alamat'       => $this->input->post('alamat'),
            'nis'          => $this->input->post('nis'),
            'nik'          => $this->input->post('nik'),
            'foto'         => $uploads,
            'username'     => $this->input->post('nis'),
            'password'     => $this->input->post('nis'),
            'level'=>3,
            'no_hp_ortu'   => $this->input->post('no_hp_ortu'),
            'kelas'        => $this->input->post('kelas'),
            );
            $this->db->insert('siswa',$data);
            
    }
    function edit(){
        $data=array(
            'nama'         => $this->input->post('nama'),
            'alamat'       => $this->input->post('alamat'),
            'no_hp_ortu'   => $this->input->post('no_hp_ortu'),
            'nik'          => $this->input->post('nik'),
        );
        
        $nis= $this->input->post('nis');
        $this->db->where('nis',$nis);
        $this->db->update('siswa',$data);
        
    }

}
?>

