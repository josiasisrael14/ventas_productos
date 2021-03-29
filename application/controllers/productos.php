<?php

/**
 * 
 */
class Productos extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model("productos_model");
		$this->load->model("categoria_model");
        

	}


	public function productos(){

  $this->load->view("templates/header_administrador");
 $this->load->view("layouts1/header");
 // $data['categoria']=$this->categoria_model->select();
  $data['productos']=$this->productos_model->select();
 //var_dump($data);
 $this->load->view("productos/index",$data);
 $this->load->view("layouts1/footer");


	}




	public  function nuevo(){

//$data['productos']=$this->productos_model->select();
$data['categoria']=$this->categoria_model->select();
$this->load->view("productos/modal_crear",$data);
	}


	public  function guardar(){

//var_dump ($_POST);
//var_dump ($_FILES);

     


 $result=$this->productos_model->guardar();
if ($result) {
	echo  json_encode(['status'=>STATUS_OK]);
	exit();


}else{
   
   echo json_encode(['status'=>STATUS_FAIL]);
   exit();

}



		
	}



	public  function modificar(){


$productos=$this->uri->segment(3);
//var_dump($productos);exit();
$data['productos']=$this->productos_model->select($productos);
$data['categoria']=$this->categoria_model->select();

//var_dump($data);exit();
$this->load->view("productos/modal_crear",$data);

		
	}



	public function eliminar($id){

     $result=$this->productos_model->eliminar($id);

     if ($result) {
  echo json_encode(['status' => STATUS_OK]);
  exit();
}else{

  echo json_encode(['status' => STATUS_FAIL]);
  exit();
}





	}


}