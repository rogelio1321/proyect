<?php
class Cciudad extends CI_controller{


  function __construct()
 {
 	parent:: __construct();
 	$this->load->model('mciudad');
 	}
 	public function getCiudades(){
 		$s=$this->input->post('sitReg');
        $resultado=$this->mciudad->getCiudades($s);

        echo json_encode($resultado);
 	}

 	public function index(){
 		$this->load->view('layout/header');
 		$this->load->view('layout/menu');
 		$this->load->view('vtest');
 		$this->load->view('layout/footer');
 	}

}