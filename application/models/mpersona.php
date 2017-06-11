<?php

class Mpersona extends CI_Model
{
	
 function __construct()
 {
   parent::__construct();
  }
 
 public function guardar($parameter){
  $fields=array(
  	'dni'=>$parameter['dni'],
    'nombre'=>$parameter['nombre'],
    'appaterno'=>$parameter['appaterno'],
    'apmaterno'=>$parameter['apmaterno'],
    'email'=>$parameter['email'],
    'fecnac'=> date('Y-m-d',strtotime(str_replace('/','-',$parameter['fecnac'])))
  );
  $this->db->insert('persona',$fields);
  return $this->db->insert_id();
 }
 public function actualizarDatos($parameter){
    $field = array(
    'nombre'=>$parameter['nombre'],
    'appaterno'=>$parameter['appaterno'],
    'apmaterno'=>$parameter['apmaterno'],
    'email'=>$parameter['email'],);
$this->db->update('persona',$fields);
$this->db->where('idPersona',$this->session->userdata('s_idPersona'));

return 1;
 }
 public function eliminarPersona($idPerson){
    $fields = array(
      'idPersona' => $idPerson
      );
    $this->db->delete('persona', $fields);
  //$this->db->where('idPersona',$idP);
  //$this->db->delete('usuario');
} 
public function getPerson(){
  $this->db->select('p.nombre,p.appaterno,p.apmaterno,p.dni,c.ciudad');
  $this->db->from('persona p');
  $this->db->join('ciudades c','c.idCiudad = p.idCiudad');

  $r=$this->db->get();

  return $r->result();
}

}

