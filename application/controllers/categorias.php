<?php

/**
 * 
 */
class Categorias extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("categoria_model");
	}

 public function categoria(){

  $this->load->view("templates/header_administrador");
 $this->load->view("layouts1/header");
  $data['categoria']=$this->categoria_model->select();
 //var_dump($data);
 $this->load->view("categoria/index",$data);
 $this->load->view("layouts1/footer");


	}



	public  function nuevo(){



     $this->load->view("categoria/modal_crear");


	}


	public function guardar(){


		$res=$this->categoria_model->guardar();
       if ($res) {
  	  echo json_encode(['status'=>STATUS_OK]);
  	  exit();

  	}else{

  		echo json_encode(['status'=>STATUS_FAIL]);
  		exit();
  	}




	}



	public function modificar(){
		$id=$this->uri->segment(3);

		$data['categoria']=$this->categoria_model->select($id);

		$this->load->view("categoria/modal_crear",$data);
	}



	public function eliminar($id){

$rs=$this->categoria_model->eliminar($id);


if ($rs) {
  echo json_encode(['status' => STATUS_OK]);
  exit();
}else{

  echo json_encode(['status' => STATUS_FAIL]);
  exit();
}


	} 

	
}