<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelku');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('login/login_admin');
    }
    public function dashboard()
    {
        $data['barang'] = $this->modelku->tampil_data();
        $this->load->view('Admin/index', $data);
    }

    public function login_admin()
    {

        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $dataPenunjuk = array(
            'username' => $username,
            'password' => $password,
        );

        $data = $this->modelku->getData_khusus("tb_user", $dataPenunjuk);
        $cek = count($data);

        if ($cek > 0) {

            $data_session = array(
                'id' => $data[0]['id'],
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);

            // print_r($data[0]['id']);
            // print_r($data_session);
            // $this->load->view('session_view');

            redirect('Admin/dashboard');
        } else {
            $data['status_login'] = 'gagal';
            $this->load->view('login/login_admin',$data);
        }
    }
    public function add_buku(){
        $config['upload_path']          = './img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('sampul'))
        {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('Admin/index', $error);
        }
        else
        {
            $gambar = $this->upload->data();

            $dataInputan = array(
                'nama_buku'       => $this->input->post('nama'),
                'penulis' => $this->input->post('penulis'),
                'kategori'     => $this->input->post('kategori'),
                'gambar' => $gambar['file_name'],
                'sinopsis' => $this->input->post('sinopsis')
    
            );
            $this->modelku->masukkan('tb_barang', $dataInputan);
        
            redirect('Admin/dashboard');
        }
        
    }
    public function edit($id){
        $cek = array(
            'id_barang' => $id
        );
        $data['barang'] = $this->modelku->getData_khusus("tb_barang",$cek);
        
        // print_r($data['barang']);
        $this->load->view('Admin/edit',$data);
    }
    public function editBuku($id){
        $config['upload_path']          = './img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        $update = array(
            'id_barang' => $id
        );

        if ( ! $this->upload->do_upload('sampul'))
        {
            $dataInputan = array(
                'nama_buku'       => $this->input->post('nama'),
                'penulis' => $this->input->post('penulis'),
                'kategori'     => $this->input->post('kategori'),
                'sinopsis' => $this->input->post('sinopsis')
    
            );
            $this->modelku->perbarui('tb_barang', $dataInputan,$update);

            redirect('Admin/dashboard');
        }
        else if($this->upload->do_upload('sampul'))
        {
            $gambar = $this->upload->data();

            $dataInputan = array(
                'nama_buku'       => $this->input->post('nama'),
                'penulis' => $this->input->post('penulis'),
                'kategori'     => $this->input->post('kategori'),
                'gambar' => $gambar['file_name'],
                'sinopsis' => $this->input->post('sinopsis')
    
            );
            $this->modelku->perbarui('tb_barang', $dataInputan,$update);
        
            redirect('Admin/dashboard');
        }
        
    } 
    public function hapusBuku($id){
        $hapus = array(
            'id_barang' => $id
        );

        $this->modelku->hapus('tb_barang',$hapus);
        redirect('Admin/dashboard');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Admin/index');
    }
}