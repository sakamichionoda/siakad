<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistiknilai extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'mahasiswa'){
		$this->load->view('header_v');
		$this->load->view('mahasiswa/statistiknilai_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
