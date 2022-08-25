<?php

class ModelBarang extends CI_Model {
    var $table = "barang";
    var $primaryKey = "id_barang";

    // function untuk get all data barang
    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    // function untuk get data by primary_key
    public function getAllPrimaryKey($id)
    {
        $this->db->where($this->primaryKey, $id);
        return $this->db->get($this->table)->row();
    }

    public function insert()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}