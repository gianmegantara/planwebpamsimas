<?php 

class M_tagihan extends CI_Model {

    function data_tagihan()
    {
        $this->db->select('tagihan.noTagihan, tagihan.idPelanggan, pelanggan.namaPelanggan, rt.rt, rw.rw, dusun.namaDusun, tagihan.bulan, tagihan.tahun, tagihan.jumlahMeteran');
        $this->db->from('tagihan');
        $this->db->join('pelanggan', 'tagihan.idPelanggan=pelanggan.idPelanggan');
        $this->db->join('rt', 'pelanggan.idRt=rt.idRt');
        $this->db->join('rw', 'pelanggan.idRw=rw.idRw');
        $this->db->join('dusun', 'pelanggan.idDusun=dusun.idDusun');
        $query = $this->db->get();

        $this->db->select();

        return $query->result();
    }

    function tambah_data_pemakaian()
    {
        $data = array(
            'noTagihan' => $this->input->post('noTagihan'),
            'idPelanggan' => $this->input->post('namaPelanggan'),
            'bulan' => $this->input->post('bulan'),
            'tahun' => $this->input->post('tahun'),
            'jumlahMeteran' => $this->input->post('meteran')
        );
        $this->db->insert('tagihan',$data);
    }

    function cetak_kwitansi()
    {
        $this->db->select('tagihan.noTagihan, pelanggan.namaPelanggan, rt.rt, rw.rw, dusun.namaDusun, tagihan.bulan, tagihan.tahun, tagihan.jumlahMeteran');
        $this->db->from('tagihan');
        $this->db->join('pelanggan', 'tagihan.idPelanggan=pelanggan.idPelanggan');
        $this->db->join('rt', 'pelanggan.idRt=rt.idRt');
        $this->db->join('rw', 'pelanggan.idRw=rw.idRw');
        $this->db->join('dusun', 'pelanggan.idDusun=dusun.idDusun');
        $query = $this->db->get();

        $this->db->select();

        return $query->result();
    }

}