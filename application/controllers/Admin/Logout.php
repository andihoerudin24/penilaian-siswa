<?php
Class Logout extends CI_Controller{
    
    function index(){
        
        $this->session->sess_destroy();
        redirect('Auth');
    }
}


?>