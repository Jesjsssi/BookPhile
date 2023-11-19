<?php

class Kategori extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('cart');
        $this->load->library('session');
        $this->load->model('Model_kategori');

       
    }

    public function index()
    {
        $data['buku'] = $this->load->model('Model_kategori')->data_fantasi()->result();
        $data['title'] = 'Fantasi';

        $this->load->view('templates/header');
        $this->load->view('pages/kategori', $data) ;
        $this->load->view('templates/footer');
    }

    public function fantasi()
    {
        $data['buku'] = $this->Model_kategori->data_fantasi()->result();
        $data['title'] = 'Fantasi';

        $this->load->view('templates/header');
        $this->load->view('pages/kategori',$data) ;
        $this->load->view('templates/footer');
    }

    public function nonfiksi()
    {
        $data['buku'] = $this->Model_kategori->data_nonfiksi()->result();
        $data['title'] = 'Non-Fiksi';

        $this->load->view('templates/header');
        $this->load->view('pages/kategori', $data) ;
        $this->load->view('templates/footer');
    }

    public function fiksilmiah()
    {
        $data['buku'] = $this->Model_kategori->data_fiksilmiah()->result();
        $data['title'] = 'Fiksi Ilmiah';

        $this->load->view('templates/header');
        $this->load->view('pages/kategori', $data) ;
        $this->load->view('templates/footer');
    }

    public function firemaja()
    {
        $data['buku'] = $this->Model_kategori->data_firemaja()->result();
        $data['title'] = 'Fiksi Remaja';

        $this->load->view('templates/header');
        $this->load->view('pages/kategori', $data) ;
        $this->load->view('templates/footer');
    }

    public function roman()
    {
        $data['buku'] = $this->Model_kategori->data_roman()->result();
        $data['title'] = 'Roman';

        $this->load->view('templates/header');
        $this->load->view('pages/kategori', $data) ;
        $this->load->view('templates/footer');
    }

    public function humor()
    {
        $data['buku'] = $this->Model_kategori->data_humor()->result();
        $data['title'] = 'Humor';

        $this->load->view('templates/header');
        $this->load->view('pages/kategori', $data) ;
        $this->load->view('templates/footer');
    }
}