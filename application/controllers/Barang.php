<?php

class Barang extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelBarang");
	}

	public function index()
    {
        $dataBarang = $this->ModelBarang->getAll();
        $data = array(
            "barangs" => $dataBarang
        ); 
        $this->load->view('content/barang/v_list_barang', $data);
    }

    // untuk me-load tampilan form tambah barang
    public function tambah(){
        $this->load->view("content/barang/v_add_barang");
    }
    
    public function insert()
    {
        $data = array(
            "nama_barang" => $this->input->post("nama_barang"),
            "harga_barang" => $this->input->post("harga_barang"),
            "jumlah_barang" => $this->input->post("jumlah_barang")
        );
        $id = $this->ModelBarang->insertGetId($data);
        redirect('barang');
    }

    public function ubah($id)
    {
        $barang = $this->ModelBarang->getByPrimaryKey($id);
        $data = array(
            "barang" => $barang,
        );
        $this->load->view('content/barang/v_update_barang',$data);
    }

    public function update()
    {
        $id = $this->input->post('id_barang');
        $data = array(
            "nama_barang" => $this->input->post('nama_barang'),
            "harga_barang" => $this->input->post('harga_barang'),
            "jumlah_barang" => $this->input->post('jumlah_barang')
        );
        echo var_dump($data);
        echo var_dump($id);
        $this->ModelBarang->update($id, $data);
        redirect('barang');
    }

    public function delete()
    {
        $id = $this->input->post('id_barang');
        $this->ModelBarang->delete($id);
        redirect('barang');
    }
}
