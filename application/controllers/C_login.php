<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
        $this->load->view('login');
	}

	public function login()
	{
		$namaPengguna = $this->input->post('namaPengguna');
		$kataKunci = $this->input->post('kataKunci');
		$where = array(
			'namaPengguna' => $namaPengguna,
			'kataKunci' => md5($kataKunci)
		);
		$cek = $this->m_login->cek_login("admin", $where)->num_rows();
		if ($cek > 0) {
			$data_session = array(
				'nama' => $namaPengguna, 
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('c_admin'));
		} else {
			echo "Username dan Password salah";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('c_login'));
	}
}
