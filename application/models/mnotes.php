<?php
class Mnotes extends CI_Model{


  function __construct()
 {
 	parent:: __construct();
 

 	}
   public function getNotes(){
      // "SELECT p.idPersona, CONCAT(p.nombre, ', ', p.appaterno, ' ', p.apmaterno) alumno, n.Primerbimestre, n.Segundobimestre, n.Tercerbimestre, n.Cuartobimestre, n.Notafinal FROM notas n
       //RIGHT JOIN persona p ON p.idPersona=n.idPersona"

   	$this->db->select("p.idPersona, CONCAT(p.nombre, ', ', p.appaterno, ' ', p.apmaterno) alumno, IFNULL(n.Primerbimestre,'')Primerbimestre, IFNULL(n.Segundobimestre,'')Segundobimestre, IFNULL(n.Tercerbimestre,'')Tercerbimestre, IFNULL(n.Cuartobimestre,'')Cuartobimestre, IFNULL(n.Notafinal,'')Notafinal", false);
   	$this->db->from('notas n');
   	$this->db->join('persona p', 'p.idPersona = n.idPersona','right');
   	$queryNotes=$this->db->get();
   	return $queryNotes->result();
   }
   public function saveNotes($parameter){
    $rows = array(
      'idPersona'=> $parameter['idperson'],
      'Primerbimestre'=> $parameter['noteone'],
      'Segundobimestre'=> $parameter['notetwo'],
      'Tercerbimestre'=> $parameter['notethree'],
      'Cuartobimestre'=> $parameter['notefour'],
      'Notafinal'=> $parameter['notefinal']
      );
    $this->db->insert('notas',$rows);
   }
   
   }