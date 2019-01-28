<?php 

class M_data_pelanggan extends CI_Model {
        
        function get_rt(){		
                $query = $this->db->get('rt');
		return $query->result();
        }
        function get_rw()
        {
                $query = $this->db->get('rw');
                return $query->result();
        }
        function get_dusun()
        {
                $query = $this->db->get('dusun');
                return $query->result();
        }

        function get_pelanggan()
        {
                $query = $this->db->get('pelanggan');
                return $query->result();
        }

        function get_pelanggan_id($id)
        {
                $query = $this->db->get_where('pelanggan', array('idPelanggan' =>$id));
                $pelanggan = $query->row();

                $data = array(
                        'idPelanggan' => $pelanggan->idPelanggan,
                        'namaPelanggan' => $pelanggan->namaPelanggan,
                        'idRt' => $pelanggan->idRt,
                        'idRw' => $pelanggan->idRw,
                        'idDusun' => $pelanggan->idDusun,
                        'status' =>$pelanggan->status
                );
                return $data;
        }

	function data_pelanggan(){		
                $this->db->select('pelanggan.idPelanggan, pelanggan.namaPelanggan, rt.rt, rw.rw, dusun.namaDusun, pelanggan.status');
                $this->db->from('pelanggan');
                $this->db->join('rt', 'pelanggan.idRt=rt.idRt');
                $this->db->join('rw', 'pelanggan.idRw=rw.idRw');
                $this->db->join('dusun', 'pelanggan.idDusun=dusun.idDusun');
                $query = $this->db->get();

                return $query->result();
        }

        function tambah_data_pelanggan()
        {
                $data = array(
                        'idPelanggan' => $this->input->post('idPelanggan'),
                        'namaPelanggan' => $this->input->post('namaPelanggan'),
                        'idRt' => $this->input->post('rt'),
                        'idRw' => $this->input->post('rw'),
                        'idDusun' => $this->input->post('dusun')
                );
                $this->db->insert('pelanggan',$data);
        }

        function update_data_pelanggan($id)
        {
                $data = array(
                        'namaPelanggan' => $this->input->post('namaPelanggan'),
                        'idRt' => $this->input->post('rt'),
                        'idRw' => $this->input->post('rw'),
                        'idDusun' => $this->input->post('dusun'),
                        'status' => $this->input->post('status') 
                );

                $this->db->where('idPelanggan', $id);
                $this->db->update('pelanggan', $data);
        }
        
        function hapus_data_pelanggan($id)
        {
                $this->db->delete('pelanggan', array('idPelanggan' => $id));
        }
}