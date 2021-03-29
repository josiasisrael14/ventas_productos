<?php


/**
 * 
 */
class Categoria_model extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function select($id=''){

     if ($id=='') {
     	# code...

     	$res=$this->db->from("categorias")
     	              ->get()
     	              ->result();

     	       return $res;   

     }else{

       $res=$this->db->from("categorias")
                     ->where("id",$id)
                     ->get()
                     ->row();

                     return $res;



     }


	}



	public function guardar(){

		if ($_POST['id']=='') {
			# code...
			$fecha=date('Y-m-d H:i:s');

          $insertar = array('categoria'=>$_POST['categoria'],'fecha'=>$fecha);

          $this->db->insert("categorias",$insertar);
          return true;

		}else{

           $fecha=date('Y-m-d H:i:s');
           $modificar = array('categoria' =>$_POST['categoria'],'fecha'=>$fecha);

          $this->db->where("id",$_POST['id']);
          $this->db->update("categorias",$modificar);
          return true;
		}



	}


  public  function eliminar($id=''){

 $this->db->where("id",$id);
 $this->db->delete("categorias");

 return true;
  

  }
}