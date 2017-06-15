<?php
class Cnotes extends CI_controller{


  function __construct()
 {
 	parent:: __construct();
 	$this->load->model('mnotes');
 }

 	
   
      public function index(){
      	 $this->load->view('layout/header');
         $this->load->view('layout/menu'); 
	     $this->load->view('vnotes');
         $this->load->view('layout/footer');
      }
      public function getNotes(){
      	echo json_encode($this->mnotes->getNotes());
      }
      public function saveNotes(){
         $parameter['idperson']=$this->input->post('idperson');
         $parameter['noteone']=$this->input->post('noteone');
         $parameter['notetwo']=$this->input->post('notetwo');
         $parameter['notethree']=$this->input->post('notethree');
         $parameter['notefour']=$this->input->post('notefour');
         $parameter['notefinal']=$this->input->post('notefinal');

         $this->mnotes->saveNotes($parameter);
      }
   }