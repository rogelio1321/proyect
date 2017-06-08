<?php

class Cpersona extends CI_Controller
{
	
 function __construct()
 {
   parent::__construct();
   $this->load->model('mpersona');
   $this->load->model('musuario');
   $this->load->library('encryption');
 }

public function index(){
  $this->load->view('layout/header');
  $this->load->view('layout/menu'); 
	$this->load->view('persona/vpersona');
  $this->load->view('layout/footer');

  }
public function guardar(){
	//personas
	$parameter['dni']=$this->input->post('txtDNI');
	$parameter['nombre']=$this->input->post('txtNombre');
	$parameter['appaterno']=$this->input->post('txtApPaterno');
	$parameter['apmaterno']=$this->input->post('txtApMaterno');
	$parameter['email']=$this->input->post('txtEmail');
	$parameter['fecnac']=$this->input->post('datFecNac');
	//usuario
	$parameterUser['nomUsuario']=$this->input->post('txtUsuario');
	$parameterUser['clave']= sha1($this->input->post('txtClave'));

    $lastId=$this->mpersona->guardar($parameter);

    if ($lastId>0){
    	$parameterUser['idPersona']=$lastId;
    	$this->musuario->guardarUsuario($parameterUser);
    }


   }
   public function actualizarDatos(){
  $parameter['nombre']=$this->input->post('txtNombre');
	$parameter['appaterno']=$this->input->post('txtApPaterno');
	$parameter['apmaterno']=$this->input->post('txtApMaterno');
	$parameter['email']=$this->input->post('txtEmail');

	$this->mpersona->actualizarDatos($parameter);

	//$this->load->view('persona/vpersona');
	redirect('cpersona/index');

   }
   public function eliminarPersona(){
   	$idPerson=$this->input->post('txtIdPersona');
    $this->musuario->eliminarUsuario($idPerson);
    $this->mpersona->eliminarPersona($idPerson);
   }
}
