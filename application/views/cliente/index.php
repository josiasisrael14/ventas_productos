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
      <th>nombre</th>
      <th>documento</th>
      <th>email</th>
      <th>telefono</th>
      <th>direccion</th>
      <th>fecha nacimiento</th>
      <th>total compras</th>
      <th>ultima compra</th>
      <th>fecha gravacion</th>
    </tr>
    </thead>


    <tbody>
      <?php foreach ($cliente as $value) {?>
        <tr>
      <td><a class="btn btn btn-primary btn-xs btn_modificar_cliente" data-toggle="modal" data-target="#modalCajaMov" title="modificar" data-id='<?php echo $value->id ?>' href=""><span class="glyphicon glyphicon-pencil"></span></a></td>

       <td><a class="btn btn btn-primary btn-xs btn_eliminar" data-id='<?php echo $value->id ?>' href=""><span class="glyphicon glyphicon-trash"></span></a></td>   
  
      <!--<td><a class="btn btn btn-primary btn-xs" data-toggle="modal" data-target="#modalCajaMov" title="modificar" href="<?php echo base_url()?>index.php/acceso/modificar_usuario/<?php echo $value->idusuario; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>-->
        <td><?php echo $value->nombre ?></td>
        <td><?php echo $value->documento ?></td>
        <td><?php echo $value->email ?></td>
        <td><?php echo $value->telefono ?></td>
        <td><?php echo $value->direccion ?></td>
        <td><?php echo $value->fecha_nacimiento ?></td>
        <td><?php echo $value->compras ?></td>
         <td><?php echo $value->ultima_compra ?></td>
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

  $("#modalCajaMov").load('<?= base_url()?>index.php/cliente/nuevo',{});


});



  $(".btn_modificar_cliente").click(function(e){

  e.preventDefault();
  var id=$(this).data('id');

  $("#modalCajaMov").load('<?=base_url()?>index.php/cliente/modificar/'+id,{});
});

</script>
