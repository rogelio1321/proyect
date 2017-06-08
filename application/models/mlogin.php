<?php

class Mlogin extends CI_Model
{
	
 
   public function ingresar($user,$password){
   	$this->db->select('p.idPersona, u.idUsuario, p.nombre, p.appaterno, p.apmaterno');
    $this->db->from('usuario u');
    $this->db->join('persona p', 'p.idPersona = u.idPersona');
    $this->db->where('u.nomUsuario',$user);
    $this->db->where('u.clave',$password);
    
    $resultado=$this->db->get();
    if ($resultado->num_rows() == 1){
        $result=$resultado->row();

        $s_user = array(
            's_idPersona'=> $result->idPersona,
        	's_idusuario' => $result->idUsuario,
        	's_usuario'=>$result->nombre.", ".$result->appaterno." ".$result->apmaterno
        	);

        $this->session->set_userdata($s_user);
        //$this->session->userdata('$_idUsuario', $r->idUsuario);
        //$this->session->userdata('$_usuario', $r->nombre, ", ".$r->appaterno);
        return 1;
    }else{
    	return 0;
    }
    
   }
 
}