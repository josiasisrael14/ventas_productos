<?php



/**
 * 
 */
class Productos_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
    date_default_timezone_set('America/Lima');
	}


	public function select($productos=''){

    if ($productos=='') {
$res=$this->db->select("pro.imagen,pro.codigo,pro.descripcion,pro.stock,pro.precio_compra,pro.precio_venta,pro.fecha,pro.id,cate.categoria")
                      ->from("productos pro")
                      ->join("categorias cate","pro.id_categoria=cate.id")
    	              ->get()
    	              ->result();

    	          return $res;
    	          

    }else{

       $res=$this->db->from("productos")
                     ->where("id",$productos)
                     ->get()
                     ->row();

                     return $res;




    }




	}


  public function guardar(){
  $carpeta='imagenes1/';
  opendir($carpeta);
  $destino=$carpeta.$_FILES['archivoImagen']['name'];
  copy($_FILES['archivoImagen']['tmp_name'],$destino);

  if ($_POST['id']=='') {
$fecha=date('Y-m-d H:i:s');
$datainsert= array(
            'codigo' =>$_POST['codigo'],
            'descripcion' => $_POST['descripcion'],
            'id_categoria'=>$_POST['id_categoria'],
            'stock'=>$_POST['stock'],
            'imagen'=>$_FILES['archivoImagen']['name'],
            'precio_compra'=>$_POST['precio_compra'],
            'precio_venta'=>$_POST['precio_venta'],
            'fecha'=>$fecha
          );
     $this->db->insert("productos",$datainsert);
     // si pongo la session cada ves que agrego un usuario se va actualizar automaticamente y eso no quiero 
     //$this->session->set_userdata($datainsert);

     return true;
  }else{

    if ($_FILES['archivoImagen']['tmp_name']=='') {
      # code...
      $fecha=date('Y-m-d H:i:s');
      $datamodificar= array(
            'codigo' =>$_POST['codigo'],
            'descripcion' => $_POST['descripcion'],
            'id_categoria'=>$_POST['id_categoria'],
            'stock'=>$_POST['stock'],
            //'imagen'=>$_FILES['archivoImagen']['name'],
            'precio_compra'=>$_POST['precio_compra'],
            'precio_venta'=>$_POST['precio_venta'],
            'fecha'=>$fecha
          );

      $this->db->where("id",$_POST['id']);
    $this->db->update("productos",$datamodificar);

    return  true;
    }else{
       $fecha=date('Y-m-d H:i:s');
       $datamodificar= array(
            'codigo' =>$_POST['codigo'],
            'descripcion' => $_POST['descripcion'],
            'id_categoria'=>$_POST['id_categoria'],
            'stock'=>$_POST['stock'],
            'imagen'=>$_FILES['archivoImagen']['name'],
            'precio_compra'=>$_POST['precio_compra'],
            'precio_venta'=>$_POST['precio_venta'],
            'fecha'=>$fecha
          );

      $this->db->where("id",$_POST['id']);
    $this->db->update("productos",$datamodificar);

   return  true;
    }
   




  }

  }


  public function eliminar($id){


     return $this->db->delete("productos",array('id'=>$id));

     


  }




}