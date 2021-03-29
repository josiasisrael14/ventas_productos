<?php

/**
 * 
 */
class Usuarios extends CI_Controller
{
	
	function __construct()
	{
	 parent::__construct();
	 $this->load->model("usuario_model");
	  $this->load->model("empleados_model");

	}

  public function usuario(){

 $this->load->view("templates/header_administrador");
 $this->load->view("layouts1/header");
 $data['usuario']=$this->usuario_model->select();
 //var_dump($data);
 $this->load->view("usuario/index",$data);
 $this->load->view("layouts1/footer");
  }


  public function activar(){

     //var_dump ($_POST);
   $idusuario=$this->input->post("activarId");
    $activarUsuario=$this->input->post("activarUsuario");

    $res=$this->usuario_model->guardarestado($idusuario,$activarUsuario);
  
  


    //var_dump($idusuario,$activarUsuario);
    //var_dump($activarUsuario);

  }



  public function nuevo(){
   
    $this->load->view("usuario/modal_crear");

  }


  public function guardar(){


  //var_dump ($_POST);
  //var_dump ($_FILES);


  $res=$this->usuario_model->guardar();






  if ($res) {
    echo json_encode(['status'=>STATUS_OK]);
    exit();
  }else{

    echo json_encode(['status'=>STATUS_FAIL]);
    exit();
  }







}



public function modificar(){

$usuario=$this->uri->segment(3);
//var_dump($usuario);exit();
$data['usuario']=$this->usuario_model->select($usuario);
 $this->load->view("usuario/modal_crear",$data);



}



public  function eliminar($idusuario){

$res=$this->usuario_model->eliminar($idusuario);

if ($res) {
  # code...

  echo json_encode(['status'=>STATUS_OK]);
  exit();
}else{

  echo json_encode(['status'=>STATUS_FAIL]);
  exit();
}


}

}