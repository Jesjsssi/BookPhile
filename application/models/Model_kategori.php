<?php

class Model_kategori extends CI_Model{

    public function data_fantasi(){
        return $this->db->get_where("tb_barang",array('kategori' => 'Fantasi'));
    }

    public function data_nonfiksi(){
        return $this->db->get_where("tb_barang",array('kategori' => 'Non-Fiksi'));
    }

    public function data_fiksilmiah(){
        return $this->db->get_where("tb_barang",array('kategori' => 'Fiksi ilmiah'));
    }

    public function data_firemaja(){
        return $this->db->get_where("tb_barang",array('kategori' => 'Fiksi Remaja'));
    }

    public function data_roman(){
        return $this->db->get_where("tb_barang",array('kategori' => 'roman'));
    }

    public function data_humor(){
        return $this->db->get_where("tb_barang",array('kategori' => 'humor'));
    }

}