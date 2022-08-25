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
}
