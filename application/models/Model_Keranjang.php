<?php

class Model_kategori extends CI_Model{

    public function tampil_data(){
        return $this->db->get('tb_keranjang');
    }

    public function getData($tabel){
        $databuku=$this->db->get($tabel);
        return $databuku->result_array();
    }

    public function getData_khusus($tabel, $where){
        $databrg = $this->db->get_where($tabel, $where);
        return $databrg->result_array();
    }
    public function masukkan($tabel, $data){
        $databuku=$this->db->insert($tabel, $data);
        return $databuku;
    }

    public function perbarui($tabel, $data, $where){
        $databuku=$this->db->update($tabel, $data, $where);
        return $databuku;
    }

    public function hapus($tabel, $where){
        $databuku=$this->db->delete($tabel, $where);
        return $databuku;
    }


    public function find($id){
        $result=$this->db->where('id_barang',$id)
                         ->limit(1)
                         ->get('tb_keranjang');
        if($result->num_rows() >0){
            return $result->row();
        }else{
            return array();
        }
        

    }

}