<?php
/**
 * 
 */
class Cliente extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("cliente_model");
	}


	public function cliente(){

 $this->load->view("templates/header_administrador");
 $this->load->view("layouts1/header");
 // $data['categoria']=$this->categoria_model->select();
  $data['cliente']=$this->cliente_model->select();
 //var_dump($data);
 $this->load->view("cliente/index",$data);
 $this->load->view("layouts1/footer");
	}


	public function nuevo(){


$this->load->view("cliente/modal_crear");
	}


	public function guardar(){

$res=$this->cliente_model->guardar();

  if ($res) {
    echo json_encode(['status'=>STATUS_OK]);
    exit();
  }else{

    echo json_encode(['status'=>STATUS_FAIL]);
    exit();
  }


	}


	public  function modificar(){
$cliente=$this->uri->segment(3);
//var_dump($usuario);exit();
$data['cliente']=$this->cliente_model->select($cliente);
 $this->load->view("cliente/modal_crear",$data);

	}


}