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
  <table id="jairo" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
      <tr>
      <th><span class="glyphicon glyphicon-pencil"></span></th>
      <th><span class="glyphicon glyphicon-trash"></span></th>
      <th>imagen</th>
      <th>codigo</th>
      <th>descripcion</th>
      <th>categoria</th>
      <th>stock</th>
      <th>precio_compra</th>
      <th>precio_venta</th>
      <th>fecha</th>
      
    </tr>
    </thead>


    <tbody>
      <?php foreach ($productos as $value) {?>
        <tr>
      <td><a class="btn btn btn-primary btn-xs btn_modificar_productos" data-toggle="modal" data-target="#modalCajaMov" title="modificar" data-id='<?php echo $value->id ?>' href=""><span class="glyphicon glyphicon-pencil"></span></a></td>

       <td><a class="btn btn btn-primary btn-xs btn_eliminar" data-id='<?php echo $value->id ?>' href=""><span class="glyphicon glyphicon-trash"></span></a></td>   
  
      <!--<td><a class="btn btn btn-primary btn-xs" data-toggle="modal" data-target="#modalCajaMov" title="modificar" href="<?php echo base_url()?>index.php/acceso/modificar_usuario/<?php echo $value->idusuario; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>-->
        <td><img src="<?php echo base_url()?>imagenes1/<?php echo $value->imagen ?>" height='50px' width='50px'></td>
        <td><?php echo $value->codigo ?></td>
         <td><?php echo $value->descripcion ?></td>
          <td><?php echo $value->categoria ?></td>
           <td><?php echo $value->stock ?></td>
             <td><?php echo $value->precio_compra ?></td>
               <td><?php echo $value->precio_venta ?></td>
                 <td><?php echo $value->fecha ?></td>
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


  $("#btnagregar").click(function(e){
  e.preventDefault();

  $("#modalCajaMov").load('<?= base_url()?>index.php/productos/nuevo',{});


});


$(".btn_modificar_productos").click(function(e){

  e.preventDefault();
  var id=$(this).data('id');

  $("#modalCajaMov").load('<?=base_url()?>index.php/productos/modificar/'+id,{});
});


$(".btn_eliminar").click(function(e){
  e.preventDefault();
  var id=$(this).data('id');
  var msg=$(this).data(msg);
   var url='<?= base_url()?>index.php/productos/eliminar/'+id
   $.confirm({
    title:'Confirmar',
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
            location='<?php echo base_url()?>index.php/productos/productos/';   
            //dataSource.read();
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


</script>
