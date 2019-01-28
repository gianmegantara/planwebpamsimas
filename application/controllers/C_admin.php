<?php 

class C_admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data_pelanggan');
		$this->load->model('m_tagihan');
        $this->load->helper('url');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url('c_login'));
		}
	}

	function index() {
		$this->load->view('templates/header');
		$this->load->view('admin/index');
		$this->load->view('templates/footer');
	}

	function form_pelanggan()
	{
		$this->load->view('templates/header');	
		$data['rt'] = $this->m_data_pelanggan->get_rt();
		$data['rw'] = $this->m_data_pelanggan->get_rw();
		$data['dusun'] = $this->m_data_pelanggan->get_dusun();
		$this->load->view('admin/form_tambah_pelanggan', $data);
		$this->load->view('templates/footer');	
	}

	function form_edit_pelanggan($id)
	{
		$this->load->view('templates/header');
		$data['pelanggan'] = $this->m_data_pelanggan->get_pelanggan_id($id);
		$data['rt'] = $this->m_data_pelanggan->get_rt();
		$data['rw'] = $this->m_data_pelanggan->get_rw();
		$data['dusun'] = $this->m_data_pelanggan->get_dusun();
		$this->load->view('admin/form_edit_pelanggan', $data);
		$this->load->view('templates/footer');	
	}
	
	function data_pelanggan()
	{
		$this->load->view('templates/header');	
		$data['pelanggan'] = $this->m_data_pelanggan->data_pelanggan();
		$this->load->view('admin/data_pelanggan',$data);
		$this->load->view('templates/footer');
	}
	
	function tambah_data_pelanggan()
	{
		$tambah_data_pelanggan = $this->m_data_pelanggan->tambah_data_pelanggan();
		$this->session->set_flashdata('data_pelanggan', 'Berhasil menambahkan data');
		redirect('c_admin/data_pelanggan');
	}
	function edit_data_pelanggan($id)
	{
		$edit_data_pelanggan = $this->m_data_pelanggan->update_data_pelanggan($id);
		$this->session->set_flashdata('edit_data_pelanggan', 'data berhasil di update');
		redirect('c_admin/data_pelanggan');
	}
	function hapus_data_pelanggan($id)
	{
		$hapus_data_pelanggan = $this->m_data_pelanggan->hapus_data_pelanggan($id);
		$this->session->set_flashdata('hapus_data_pelanggan', 'data berhasil di hapus');
		redirect('c_admin/data_pelanggan');
	}

	function data_pemakaian()
	{
		$this->load->view('templates/header');
		$data['pemakaian'] = $this->m_tagihan->data_tagihan();
		$data['rt'] = $this->m_data_pelanggan->get_rt();
		$data['rw'] = $this->m_data_pelanggan->get_rw();
		$data['dusun'] = $this->m_data_pelanggan->get_dusun();
		$this->load->view('admin/data_pemakaian',$data);
		$this->load->view('templates/footer');
	}

	function form_data_pemakaian()
	{
		$this->load->view('templates/header');
		$data['pemakaian'] = $this->m_tagihan->data_tagihan();
		$data['pelanggan'] = $this->m_data_pelanggan->get_pelanggan();
		$data['rt'] = $this->m_data_pelanggan->get_rt();
		$data['rw'] = $this->m_data_pelanggan->get_rw();
		$data['dusun'] = $this->m_data_pelanggan->get_dusun();
		$this->load->view('admin/form_data_pemakaian', $data);
		$this->load->view('templates/footer');
	}

	function tambah_data_pemakaian()
	{
		$tambah_data_tagihan = $this->m_tagihan->tambah_data_pemakaian();
		$this->session->set_flashdata('data_pelanggan', 'Berhasil menambahkan data');
		redirect('c_admin/form_data_tagihan');
	}

	function cetak_kwitansi()
	{
		$data['tagihan'] = $this->m_tagihan->data_tagihan();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->load->filename = "kwitansi.pdf";
		$this->pdf->load_view('admin/kwitansi', $data);
		
	}
}