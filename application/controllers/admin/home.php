<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    // 		carga de helper para url y modelo de usuario
	   $this->load->helper('url');
  }


  public function index()
  {

    echo "este es el valor de sesion";
//var_dump($this->session->userdata('logged_in'));


    if ($this->session->userdata('logged_in')!= NULL) {
      # code...
      echo " hay sesion";

    } else {
      echo " no hay sesion";
      redirect('/admin/login/','refresh');
    }


  }


  public function cerrar (){

    $this->session->unset_userdata('logged_in');
      redirect('/admin/login/','refresh');

  }
}
