<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	private $kode="asdfgh23";
	public function index()
	{
		
		// $content= file_get_contents("http://localhost/PWL/web-data/index.php/api");
		// //jadi standar encoding
		// $content=utf8_encode($content);

		// $hasil=json_decode($content, true);

		// $data=array(
		// 	'dataBuku' => $hasil['dataBuku'],
		// );

		// $this->load->view('welcome_message',$data);
		$this->load->view('welcome_message');
	}
}
