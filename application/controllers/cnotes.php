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
   }