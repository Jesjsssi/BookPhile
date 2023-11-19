<?php

class Buku extends CI_Controller {
    public function index($nama)
    {
        
        $this->load->view('templates/header');
        $this->load->view('Buku/index');
        $this->load->view('templates/footer');
    }
     
}
?>