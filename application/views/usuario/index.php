
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-md-12">
      <div class="box">
<div class="container">

<button class="btn btn-warning"  id="btnagregar" data-toggle="modal" data-target="#modalCajaMov">Agregar</button>
  
</div>
<!--box-header-->
<!--centro-->
<div class="panel-body table-responsive" id="listadoregistros">
 <table id="jairo" class="table table-striped table-bordered table-condensed table-hover tablas">
    <thead>
      <tr>
      <th><span class="glyphicon glyphicon-pencil"></span></th>
      <!--<th><span class="glyphicon glyphicon-trash"></span></th>-->
      <th>Nombre</th>
      <th>usuario</th>
      <th>foto</th>
      <th>perfil</th>
       <th>&nbsp;</th>
      <th>estado</th>
      <th>ultimo_login</th>

  
    </tr>
    </thead>


    <tbody>
      <?php foreach ($usuario as $value) {?>
        <tr>
  <td><a class="btn btn btn-primary btn-xs btn_modificar_usuarios" data-toggle="modal" data-target="#modalCajaMov" title="modificar" data-id='<?php echo $value->id ?>' href=""><span class="fa fa-pencil"></span></a></td>

  <!--<td><a class="btn btn btn-primary btn-xs btn_eliminar" data-id='<?php echo $value->id ?>' href=""><span class="fa fa-times"></span></a></td>--> 
            
           
           <td><?php echo $value->nombre ?></td>
            <td><?php echo $value->usuario ?></td>
      <td><img src="<?php echo base_url()?>imagenes1/<?php echo $value->foto ?>" height='50px' width='50px'></td>
            <td><?php echo $value->perfil?></td>
             


             <td><?php if ($value->estado !=0) {
               
  echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value->id.'" estadoUsuario="0">Activado</button></td>';

                }else{
         echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value->id.'" estadoUsuario="1">Desactivado</button></td>';
                } 
               ?>
             </td>

             
            <td><?php echo $value->ultimo_login ?></td>
              
  
      <!--<td><a class="btn btn btn-primary btn-xs" data-toggle="modal" data-target="#modalCajaMov" title="modificar" href="<?php echo base_url()?>index.php/acceso/modificar_usuario/<?php echo $value->idusuario; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>-->
        
        <!--<td><a class="btn btn btn-primary btn-xs" title="modificar" href=""><span class="glyphicon glyphicon-pencil"></span></a></td>-->
      </tr>
    <?php  }?>
    </tbody>
    
  </table>
</div>

<script type="text/javascript">

   $(document).ready(function(){

    $('#jairo').DataTable();

  });


$(".tablas").on("click", ".btnActivar", function(){
   
   var idusuario=$(this).attr("idUsuario");
   var estadoUsuario=$(this).attr("estadoUsuario");

   var datos=new FormData();
   datos.append("activarId",idusuario);
   datos.append("activarUsuario",estadoUsuario);

   $.ajax({

    url:'<?= base_url()?>index.php/usuarios/activar',
    dataType:'json',
    method:"POST",
    data:datos,
    cache:false,
    contentType:false,
    processData:false,
    success:function(respuesta){

      
   /*if(window.matchMedia("(max-width:767px)").matches){

             swal({
            title: "El usuario ha sido actualizado",
            type: "success",
            confirmButtonText: "¡Cerrar!"
          })

          }*/



    }

   })

if(estadoUsuario == 0){

      $(this).removeClass('btn-success');
      $(this).addClass('btn-danger');
      $(this).html('Desactivado');
      $(this).attr('estadoUsuario',1);

    }else{

      $(this).addClass('btn-success');
      $(this).removeClass('btn-danger');
      $(this).html('Activado');
      $(this).attr('estadoUsuario',0);

    }


})

$("#btnagregar").click(function(e){

  e.preventDefault();

  $("#modalCajaMov").load('<?=base_url()?>index.php/usuarios/nuevo',{});
});


$(".btn_modificar_usuarios").click(function(e){

  e.preventDefault();

  var idusuario=$(this).data('id');

$("#modalCajaMov").load('<?=base_url()?>index.php/usuarios/modificar/'+idusuario,{});
});


/*$(".btn_eliminar").click(function(e){
  e.preventDefault();

  var idusuario=$(this).data('id');

  var msg=$(this).data(msg);

  var url='<?= base_url()?>index.php/usuarios/eliminar/'+idusuario
  $.confirm({
   title:'confirmar',
   content:msg,
   buttons:{
   confirm:{
   text:'aceptar',
   btnClass:'btn-blue',
   action:function(){
    $.ajax({
     url:url,
     dataType:'json',
     method:'get',

     success:function(response){
      if (response.status==STATUS_OK) {
        toast('success',1500,'eliminado');
        location='<?php echo base_url()?>index.php/usuarios/usuario/';


      }

      if (response.status==STATUS_FAIL) {

        toast('error',2000,'error');
      }

     }


    });
   } 

  },
  cancel:function(){

  }





}

});
});
*/




</script>


