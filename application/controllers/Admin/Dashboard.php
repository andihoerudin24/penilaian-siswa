<?php  
Class Dashboard extends CI_Controller{
    
    
    function index(){
          $x['data'] = $this->db->query("SELECT count(*) as jumlah_data FROM siswa")->result();
          $this->template->load('template','admin/dashboard',$x);
    }
}
?>