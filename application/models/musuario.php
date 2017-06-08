<?php

class Musuario extends CI_Model
{
	
 function __construct()
 {
   parent::__construct();
  }
  public function guardarUsuario($parameter){
  	$fields = array(
  		'nomUsuario'=>$parameter['nomUsuario'],
  		'clave'=>$parameter['clave'],
  		'idPersona'=>$parameter['idPersona']
  		);
  	$this->db->insert('usuario',$fields);
  }
  public function eliminarUsuario($idPerson){
       $this->db->where('idPersona',$idPerson);
       $this->db->delete('usuario');
       
  }
}