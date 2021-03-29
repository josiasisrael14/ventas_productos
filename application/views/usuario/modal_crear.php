


<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="modal-title">Usuarios</div>
			</div>
         <div class="modal-body">
         	<form  id="gridform">	
          <input type="hidden" id="id" name="id" value="<?php echo $usuario->id ?>">
       	<div class="row">
       		<div class="col-md-12">
       			<div class="form-group">

       		<label for="perfil">tipo Usuario</label>
       		<select class="form-control" id="perfil" name="perfil" value="<?php echo $usuario->perfil ?>">

           <option value="Administrador">Administrador</option>
           <option value="Especial">Especial</option>
           <option value="Vendedor">Vendedor</option>
             
          </select>


       			</div>


            <div class="form-group">
              <label for="nombre">nombre</label>
   <input type="text" id="nombre" name="nombre" class="form-control input-sm" value="<?php echo $usuario->nombre ?>">
            </div>
             <div class="form-group">
              <label for="usuario">usuario</label>
              <input type="text" id="usuario" name="usuario" class="form-control input-sm" value="<?php echo $usuario->usuario ?>">


            </div>

             <div class="form-group">
              <label for="password">Ingresa contrazeña</label>
        <input type="password" id="password" name="password" class="form-control input-sm" value="<?php echo $usuario->password ?>">
            </div> 

               <div class="form-group">
              <label for="archivoImagen">Imagen</label>
          <input type="file" id="archivoImagen" name="archivoImagen" class="form-control input-sm" value="<?php echo $usuario->foto ?>">
          <td><img src="<?php echo base_url()?>imagenes1/<?php echo $usuario->foto ?> " height='50px' width='50px' ></td>

            </div>
           

          

       		</div>
       	</div>
			
           
 			</form>
		
			
  			</div>
  			<div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn_guardar">Guardar</button> 
       		</div>
		</div><!--cerrar  -->
	</div><!--cerrar  -->


  <script type="text/javascript">
    

 $("#btn_guardar").on("click",function(){

    

    $("#gridform").submit();
       
    });

 $("#gridform").on('submit',function(e){

    e.preventDefault();

    $.ajax({
    url:'<?= base_url()?>index.php/usuarios/guardar',
    dataType:'json',
    method:'post',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(response){

        if (response.status==2) {
          toast('success',1500,'se registro el usuario');  
             //dataSource.read();
            $("#modalCajaMov").modal('hide');
        location='<?php echo base_url()?>index.php/usuarios/usuario/';      

        }else{



        }if (response.status==1) {
          
           toast('error', 1500, 'error'); 

        }
    
    }

    });



});
  </script>


  