<?php
Class Model_pengguna extends CI_Model{
    
    
    function chek_login($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $pengguna=$this->db->get('pengguna')->row_Array();
        return $pengguna;
    }
}



?>