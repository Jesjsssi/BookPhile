<?php

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelku');
        // $this->load->model('cart');
        // $this->load->model('session');
        // $data_session = array(
        //     'status' => "blum login"
        // );
        // $this->session->set_userdata($data_session);
    }

    public function index()
    {
        $data['barang'] = $this->modelku->tampil_data();
        $data['judul'] = 'Halaman Beranda';
        // print_r($_SESSION);
        $this->load->view('templates/header', $data);
        $this->load->view('beranda/index', $data);
        $this->load->view('templates/footer');
    }

    public function menu()
    {
        $this->load->view("login/form_login");
    }

    public function aksi_login()
    {

        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $dataPenunjuk = array(
            'username' => $username,
            'password' => $password,
            'role' => 'user'
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

            redirect('Beranda/index');
        } else {
            $data['status_login'] = 'gagal';
            $this->load->view('login/form_login',$data);
            // redirect(base_url(), 'refresh');
        }
    }


    public function daftar()
    {
        $this->load->view("registrasi/registrasi");
    }

    public function aksi_daftar()
    {
        $dataInputan = array(
            'id'       => '',
            'username' => $this->input->post('username'),
            'nohp'     => $this->input->post('nohp'),
            'email'    => $this->input->post('email'),
            'password' => md5($this->input->post('password'))

        );
        $this->modelku->masukkan('tb_user', $dataInputan);
        // redirect(base_url(), 'refresh');
        redirect('Beranda/menu');
    }

    public function detail($id)
    {
        $cek = array(
            'id_barang' => $id
        );
        $data['barang'] = $this->modelku->getData_khusus("tb_barang",$cek);

        $this->load->view('templates/header');
        $this->load->view('beranda/detail',$data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang($id)
    {
        $databrg = $this->modelku->find($id);
        $data = array(
            'barang_id' => $databrg->id_barang,
            'qty'     => $this->input->post('qty'),
            'id_user' => $_SESSION['id'],
        );
        $this->modelku->masukkan('tb_keranjang', $data);
        // $this->cart->insert($databrg);

        // print_r($this->cart->contents());

        redirect('Beranda');
    }


    public function keranjang()
    {

        $cart['cart'] = $this->modelku->join($_SESSION['id']);
		$data['judul'] = 'Halaman Beranda';
        // print "<pre>";
        // print_r($cart);
        // print "</pre>";
        // $this->cart->insert($cart);
        $this->load->view('templates/header',$data);
        $this->load->view('keranjang', $cart);
        $this->load->view('templates/footer');
    }

    public function checkout()
    {

        $cart['cart'] = $this->modelku->join($_SESSION['id']);

        $datahapus = array(
            'id_user' => $_SESSION['id']
        );
        // $cek = count($this->modelku->getData_khusus('tb_transaksi',$datahapus));
        // if($cek > 0){


        $dataInputan = array(
            'barang'       => serialize($cart['cart']),
            'nama_pemesan' => $this->input->post('nama'),
            'alamat'     => $this->input->post('alamat'),
            'keterangan' => $this->input->post('keterangan'),
            'id_user' => $_SESSION['id']

        );
        $this->modelku->masukkan('tb_transaksi', $dataInputan);
        $data = array(
            'id_user' => $_SESSION['id']
        );
        $this->modelku->hapus('tb_keranjang', $data);

        // }

        redirect('Beranda/keranjang');
    }

    public function KeranjangDelete($id)
    {
        $data = array(
            'id_keranjang' => $id
        );
        $this->modelku->hapus('tb_keranjang', $data);

        $cart['cart'] = $this->modelku->join($_SESSION['id']);

        print_r($id);
		$data['judul'] = 'Hapus Keranjang';
        $this->load->view('templates/header',$data);
        $this->load->view('keranjang', $cart);
        $this->load->view('templates/footer');
        // redirect('keranjang');
    }

    public function search()
    {
        $data['keyword'] = $this->input->post('keyword');

        $data['buku'] = $this->modelku->search($data['keyword']);
        $data['title'] = 'Search Buku';
        $this->load->view('templates/header',$data);
        $this->load->view('pages/kategori', $data);
        $this->load->view('templates/footer');
    }
    public function riwayat()
    {
        $datacek = array(
            'id_user' => $_SESSION['id'],
			'status' => 'sudah'

        );
		$riwayatSelesai = $this->modelku->getData_khusus('tb_transaksi', $datacek);
		$datacek['status']= 'belum';
        // $cek = count($this->modelku->getData_khusus('tb_transaksi',$datacek));
        $riwayat = $this->modelku->getData_khusus('tb_transaksi', $datacek);
        $data['title'] = 'Riwayat';
		$data['buku'] = $riwayat;
		$data['bukuSelesai'] = $riwayatSelesai;

        // print "<pre>";
        // print_r($riwayat);
        // print "</pre>";

        $this->load->view('templates/header');
        $this->load->view('pages/riwayat', $data);
        $this->load->view('templates/footer');
    }

	public function simpanUlasan()
    {
        $datacek = array(
            'id_user' => $_SESSION['id']
        );
		$this->db->where('userid', $_SESSION['id'])->where('barang_id', $this->input->post('id'));
		$cek = $this->db->get('tb_rating')->row();
		if(empty($cek)){
		$dataInputan = array(
            'userid'       => $_SESSION['id'],
            'rating' => $this->input->post('rating'),
            'ulasan'     => $this->input->post('ulasan'),
            'barang_id' => $this->input->post('id')

        );

		$this->db->insert('tb_rating',$dataInputan);

		 $this->db->set('status', 'sudah');
		 $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
		 $this->db->update('tb_transaksi');
		}
        $data['title'] = 'Simpan';
		redirect('Beranda/riwayat');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Beranda/index');
    }
}
