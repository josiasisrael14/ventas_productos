<?php



/**
 * 
 */
class Ventas extends CI_Controller
{
	
	function __construct()
	{
		# code...

		parent::__construct();
		$this->load->model("productos_model");
		$this->load->model("categoria_model");
        

	}


  public function ventas(){


$this->load->view("templates/header_administrador");
 $this->load->view("layouts1/header");
 //var_dump($data);
 $data['ventas']=$this->productos_model->select();
 $this->load->view("ventas/index",$data);
 $this->load->view("layouts1/footer");

  }



  public function nuevoproductos(){


  	$id=$this->uri->segment(3);

  	//var_dump($id);exit();

$data['producto']=$this->productos_model->select($id);


   if ($data) {
   	# code...

$resultado=array('descripcion'=>$data->descripcion ,
	'precio_venta'=>$data->precio_venta 
);

  var_dump($resultado);exit();

   }

  

 //echo $data;
//var_dump($data);exit();

//$this->load->view("ventas/index",$data);
//echo $data;

  }

}