<div class="modal-dialog " role="document">
		<div class="modal-content">			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="modal-title">Cliente</div>
			</div>
         <div class="modal-body">
         	<form  id="gridform">	
          <input type="hidden" id="id" name="id" value="<?php echo $cliente->id ?>">
       	<div class="row">
       		<div class="col-md-12">


            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCliente" id="nuevoCliente" placeholder="Ingresar nombre" value="<?php echo $cliente->nombre?>" required>

              </div>

            </div>
              <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="number" min="0" class="form-control input-lg" id="nuevoDocumentoId" name="nuevoDocumentoId" placeholder="Ingresar documento" value="<?php echo $cliente->documento?>" required>

              </div>

            </div> 

              <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" id="nuevoEmail" placeholder="Ingresar email" value="<?php echo $cliente->email?>" required>

              </div>

            </div>
 


              <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoTelefono" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask  value="<?php echo $cliente->telefono?>" required>

              </div>

            </div>


            
              <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

      <input type="text" class="form-control input-lg" id="nuevaDireccion"  name="nuevaDireccion" placeholder="Ingresar dirección" value="<?php echo $cliente->direccion ?>" required>

              </div>

            </div>
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevaFechaNacimiento" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask value="<?php echo $cliente->fecha_nacimiento?>" required>

              </div>

            </div>
  
  


       		</div>
       	</div>
			
           
 			</form>
		
			
  			</div>
  			<div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn_cliente">Guardar</button> 
       		</div>
		</div><!--cerrar  -->
	</div><!--cerrar  -->

  <script type="text/javascript">
    $("#btn_cliente").on("click",function(){
      
      $("#gridform").submit();

    });



$("#gridform").on('submit',function(e){

    e.preventDefault();

    /*var enviar=new FormData();
    enviar.append('idusuario',$('#idusuario').prop('value'));
    enviar.append('idtipousuario',$('#idtipousuario').prop('value'));
    enviar.append('iddepartamento',$('#iddepartamento').prop('value'));
    enviar.append('nombre',$('#nombre').prop('value'));
    enviar.append('apellidos',$('#apellidos').prop('value'));
    enviar.append('login',$('#login').prop('value'));
    enviar.append('email',$('#email').prop('value'));
    enviar.append('Imagen',$('#archivoImagen')[0].files[0]);
    enviar.append('password',$('#password').prop('value'));
    enviar.append('codigo_persona',$('#codigo_persona').prop('value'));
    */
    
    $.ajax({
    url:'<?= base_url()?>index.php/cliente/guardar',
    dataType:'json',
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(response){

        if (response.status==2) {
          toast('success',1500,'se registro el cliente');  
             //dataSource.read();
            $("#modalCajaMov").modal('hide');
        location='<?php echo base_url()?>index.php/cliente/cliente/';      

        }else{



        }if (response.status==1) {
          
           toast('error', 1500, 'error'); 

        }
    
    }

    });

  });

  </script>