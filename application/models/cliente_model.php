<?php

/**
 * 
 */
class Cliente_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		 date_default_timezone_set('America/Lima');
	}

	public function select($cliente=''){

     if ($cliente=='') {
      
      $res=$this->db->from("clientes")
                    ->get()
                    ->result();
              return $res;      


     }else{

     $res=$this->db->from("clientes")
                   ->where("id",$cliente) 
                    ->get()
                    ->row();
              return $res;      


     }

	}


	public  function guardar(){

if ($_POST['id']=='') {
    # code...
 $fecha=date('Y-m-d H:i:s');
   $array_guardar = array(
                          'nombre'=>$_POST['nuevoCliente'],
                          'documento'=>$_POST['nuevoDocumentoId'],
                          'email'=>$_POST['nuevoEmail'],
                          'telefono'=>$_POST['nuevoTelefono'],
                          'direccion' =>$_POST['nuevaDireccion'],
                          'fecha_nacimiento' =>$_POST['nuevaFechaNacimiento'],
                          'fecha'=>$fecha
                          

                                           );

   
   $this->db->insert("clientes",$array_guardar);
   return true;

  }else{

$fecha=date('Y-m-d H:i:s');
   $array_modificar = array(
                          'nombre'=>$_POST['nuevoCliente'],
                          'documento'=>$_POST['nuevoDocumentoId'],
                          'email'=>$_POST['nuevoEmail'],
                          'telefono'=>$_POST['nuevoTelefono'],
                          'direccion'=>$_POST['nuevaDireccion'],
                          'fecha_nacimiento' =>$_POST['nuevaFechaNacimiento'],
                          'fecha'=>$fecha
                          

                                           );

   $this->db->where("id",$_POST['id']);
   $this->db->update("clientes",$array_modificar);
   return true;






  }		



	}

public function eliminar(){


}
        
	
}