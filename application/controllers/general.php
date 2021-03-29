<?php

/**
 * 
 */
class General extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
 $this->load->model("empleados_model");

	}

	public function index(){

  $this->load->view('templates/header_administrador');
  $this->load->view("login/login");
$this->load->view('templates/footer');

	}


	public  function validar(){

   $usuario=$_POST['usuario'];
   $contrazeña=$_POST['contrazeña'];

   //$contra1=password_hash($contrazeña, PASSWORD_DEFAULT);
         //var_dump($contra1);exit(); 
   if ($this->empleados_model->login($usuario,$contrazeña)) {


      redirect(base_url(). "index.php/general/escritorio");
   	
      //$this->load->view("escritorio/escritorio");

   }else{


   	 redirect(base_url());
   }


	}


  public  function escritorio(){


 $this->load->view("templates/header_administrador");
 $this->load->view("layouts1/header");
  $this->load->view("acceso/escritorio");
 $this->load->view("layouts1/footer");


  }


  public function cerrar(){

$this->session->sess_destroy();

    redirect("general");

  }


}