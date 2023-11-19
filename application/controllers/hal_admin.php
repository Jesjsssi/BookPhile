<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('modelku');
        $this->load->library('cart');

        if($this->session->userdata('status')!="login"){
            redirect(base_url());
        }
    }
    

    public function index()
	{       
        $databarang=$this->modelku->getData('tb_barang');
        $data = array(
                    "dataku" => $databarang
                );
                $this->load->view('beranda/index', $data);
	}

    
    


    // public function hapus()
    // {
    //     $this->cart->destroy();
    //     redirect('hal_admin');
    // }

    
//     public function form_daftar_member(){
//            $this->load->view('form_daftar_member');
        
//     }
//     public function aksi_daftar_member()
//     {
//         $dataInputan=array(
//                     'username'=> $this->input->post('username'),
//                     'nama' => $this->input->post('nama'),
//                     'kode' => md5($this->input->post('kode'))
//                 );
//                 $this->modelku->masukkan('member', $dataInputan);
//                 $this->load->view('form_login_member');
                
//     }
//     public function form_login_member(){
//         $this->load->view('form_login_member');
     
//  }
    // public function aksi_login_member()
	// {       
    //     $username = $this->input->post('username');
    //     $kode = md5($this->input->post('kode'));

        
    //      $dataPenunjuk = array(
    //         'username' => $username,
    //         'kode' => $kode,
    //     );

    //     $cek=count($this->modelku->getData_khusus("member", $dataPenunjuk));
	
    //     if($cek > 0){
            
    //         $data_session = array(
    //             'nama' => $username,
    //             'status' => "login"
    //         );
    //         $this->session->set_userdata($data_session);
        
    //         redirect('hal_admin/aksi_simpan_keranjang');
    //     }
    //     else{
    //         redirect(base_url());
    //     }

    // }

//     public function checkout()
//     {
        
//         $this->load->view('bayar');
//     }

    
   

//     public function simpan_pesanan()
//     {
//         $nama = $this->input->post('nama');
//         $alamat = $this->input->post('alamat');
//         $tgl_pesan = $this->input->post('tgl_pesan');
//         $nohp = $this->input->post('nohp');

//         $data = [
//             'nama' => $nama,
//             'alamat' => $alamat,
//             'tgl_pesan' => $tgl_pesan,
//             'nohp' => $nohp,
           
//         ];
//         $this->db->insert('pesanan', $data);
//         $id = $this->db->insert_id();

//         foreach ($this->cart->contents() as $items) {
//             $pesan = [
//                 'id_keranjang' => $id,
//                 'no' => $items['id'],
//                 'nama_barang' => $items['name'],
//                 'qty' => $items['qty'],
//                 'harga' => $items['price'],
//             ];
//             $this->db->insert('keranjangs', $pesan);
//         }
//         $this->cart->destroy();
            
//             $this->load->view('proses_pesanan');
//         return TRUE;
        
//     }

}
