<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class modelku extends CI_Model
{
    public function tampil_data()
    {
		$this->db->select("b.*,r.barang_id, ROUND(AVG(r.rating),0) AS avg_rating");
		$this->db->from("tb_barang b");
		$this->db->join("tb_rating r", "b.id_barang=r.barang_id", 'left');
        $this->db->group_by("b.id_barang");
		$query = $this->db->get();
    	return $query->result();
    }

    public function getData($tabel)
    {
        $databuku = $this->db->get($tabel);
        return $databuku->result_array();
    }

    public function getData_khusus($tabel, $where)
    {
        $databrg = $this->db->get_where($tabel, $where);
        return $databrg->result_array();
    }
    public function masukkan($tabel, $data)
    {
        $databuku = $this->db->insert($tabel, $data);
        return $databuku;
    }

    public function perbarui($tabel, $data, $where)
    {
        $databuku = $this->db->update($tabel, $data, $where);
        return $databuku;
    }

    public function hapus($tabel, $where)
    {
        $databuku = $this->db->delete($tabel, $where);
        return $databuku;
    }


    public function find($id)
    {
        $result = $this->db->where('id_barang', $id)
            ->limit(1)
            ->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    public function join($id)
    {
        $this->db->select('*');
        $this->db->from('tb_keranjang k');
        $this->db->join('tb_barang b', 'b.id_barang=k.barang_id', 'left');
        $this->db->where('k.id_user', $id);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    public function search($keyword)
    {
        if (!$keyword) {
            return null;
        }
        $this->db->from('tb_barang');
        $this->db->like('nama_buku', $keyword);
        $this->db->or_like('penulis', $keyword);
        $query = $this->db->get();
        return $query->result();
    }
}
