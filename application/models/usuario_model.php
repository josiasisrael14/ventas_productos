<?php


/**
 * 
 */
class Usuario_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function select($usuario=''){
  
   if ($usuario=='') {
   	
   	$res=$this->db->from("usuarios")
   	              ->get()
   	              ->result();
   	              return $res;

   }else{

      $res=$this->db->from("usuarios")
                     ->where("id",$usuario)
                     ->get()
                     ->row();
            return $res;
                     


   }

	}

	public function guardarestado($idusuario,$activarUsuario){


   
         
     $actualizar=[
                  "estado"=>$activarUsuario

     	          ];

     	          $this->db->where("id",$idusuario);
     	          $this->db->update("usuarios",$actualizar);

     	          return true;



	}



  public  function guardar(){
  $carpeta='imagenes1/';
  opendir($carpeta);
  $destino=$carpeta.$_FILES['archivoImagen']['name'];
  copy($_FILES['archivoImagen']['tmp_name'],$destino);
  $contra=$_POST['password'];

  $encri=password_hash($contra, PASSWORD_DEFAULT);

  if ($_POST['id']=='') {
    # code...

   $array_guardar = array(
                          'nombre'=>$_POST['nombre'],
                          'usuario'=>$_POST['usuario'],
                          'password'=>$encri,
                          'perfil' =>$_POST['perfil'],
                          'foto'=>$_FILES['archivoImagen']['name'],
                          'estado'=>ST_ACTIVOS

                                           );

   
   $this->db->insert("usuarios",$array_guardar);
   return true;

  }else{

    if ($_FILES['archivoImagen']['tmp_name']=='') {


      $array_modificar = array('id'=>$_POST['id'],
                            
                               'nombre' =>$_POST['nombre'], 
                                'usuario'=>$_POST['usuario'],
                                'password'=>$encri,
                                'perfil' =>$_POST['perfil'] ,
                          
                                  'estado'=>ST_ACTIVOS

                                   );
      $this->db->where("id",$_POST['id']);
      $this->db->update("usuarios",$array_modificar);
      return true;


      # code...
    }else{

       $array_modificar = array('id'=>$_POST['id'],
                               
                               'nombre' =>$_POST['nombre'], 
                                'usuario'=>$_POST['usuario'],
                                'password'=>$encri,
                                'perfil' =>$_POST['perfil'] ,
                               'foto'=>$_FILES['archivoImagen']['name'],
                          'estado'=>ST_ACTIVOS

                                   );
      $this->db->where("id",$_POST['id']);
      $this->db->update("usuarios",$array_modificar);
      return true;





    }


  }



  }

 



	
}