<?php
class Cciudad extends CI_controler{


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

}