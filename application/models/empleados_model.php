<?php

/**
 * 
 */
class Empleados_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
     date_default_timezone_set('America/Lima');
	}

	public  function login($usuario,$contrazeña){

   
       $res=$this->db->from('usuarios')
                 ->where('usuario',$usuario)
                 ->where('password',password_verify($contrazeña))
                 //->where('password',$contrazeña)
               // ->where(password_verify('password',$contrazeña))
                 //->where("id",$idusuario)
                 ->where("estado",ST_ACTIVOS)

                 //->where('u.estado',ST_ACTIVO)
                 ->get()
                 ->row();

            


                  if ($res) {
          $fecha=date('Y-m-d H:i:s'); 
           
           $actualizar=['ultimo_login'=>$fecha
                        
                        
                        
                        //'id'=>$res->id
                         ];
          $this->db->where("id",$res->id);
          $this->db->update("usuarios",$actualizar);            

       //return  true;
        

        }


      if($res){

  $data=[  'id'=>$res->id,
          'usuario'=>$res->usuario,
         'nombre'=>$res->nombre,
         'perfil'=>$res->perfil,
         'foto'=>$res->foto,
         'ultimo_login'=>$res->ultimo_login,
         'fecha'=>$res->fecha
      ];

      $this->session->set_userdata($data);
      $this->session->set_flashdata('mensaje','iniciando session');
      return $res->id;


    }else{


      $this->session->set_flashdata('mensaje','error');
      return false;
    }




    

 

              

      /*  if ($res) {
          $fecha=date('Y-m-d H:i:s'); 
           
           $actualizar=['ultimo_login'=>$res->$fecha
                        //'id'=>$res->id
                         ];
          $this->db->update("usuarios",$actualizar);            

       return  true;
        

        }*/
    
            
}

}