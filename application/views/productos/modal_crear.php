<div class="modal-dialog " role="document">
		<div class="modal-content">			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="modal-title">Productos</div>
			</div>
         <div class="modal-body">
         	<form  id="gridform">	
          <input type="hidden" id="id" name="id" value="<?php echo $productos->id ?>">
       	<div class="row">
       		<div class="col-md-12">
       			<div class="form-group">

       		<label for="tipousuario">categoria</label><select class="form-control" id="id_categoria" name="id_categoria" value="<?php echo $productos->id_categoria?>">
           <option value="">seleccione</option>
             <?php foreach($categoria as $value):?>
            <option value="<?php echo $value->id;?>" <?php if($value->id==$productos->id_categoria):?> selected <?php endif?>><?php echo $value->categoria;?>               
             </option> 

           <?php endforeach?>
          </select>


       			</div>


            <div class="form-group">
              <label for="descripcion">codigo</label>
   <input type="text" id="codigo" name="codigo"  placeholder="ingresar codigo" class="form-control input-sm" value="<?php echo $productos->codigo ?>">
            </div>
             <div class="form-group">
              <label for="descripcion">descripcion</label>
              <input type="text" id="descripcion" name="descripcion" class="form-control input-sm" value="<?php echo $productos->descripcion ?>">
            </div> 

             <div class="form-group">
              <label for="descripcion">stock</label>
              <input type="number" id="stock" name="stock" class="form-control input-sm" value="<?php echo $productos->stock ?>">
            </div>
               
                <div class="form-group row">

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                    <input type="number" class="form-control input-lg" id="precio_compra" name="precio_compra" step="any" min="0" placeholder="Precio de compra" value="<?php echo $productos->precio_compra ?>" required>

                  </div>

                </div>

                <!-- ENTRADA PARA PRECIO VENTA -->

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="precio_venta" name="precio_venta" step="any" min="0" placeholder="Precio de venta" value="<?php echo $productos->precio_venta ?>" required>

                  </div>
                
                  <br>

                  <!-- CHECKBOX PARA PORCENTAJE -->

                <!--  <div class="col-xs-6">
                    
                    <div class="form-group">
                      
                      <label>
                        
                        <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar procentaje
                      </label>

                    </div>

                  </div>
                -->

                  <!-- ENTRADA PARA PORCENTAJE -->

                <!--  <div class="col-xs-6" style="padding:0">
                    
                    <div class="input-group">
                      
                      <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

                      <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                    </div>

                  </div>-->




                </div>

            </div>
           


            
               <div class="form-group">
              <label for="descripcion">Imagen</label>
          <input type="file" id="archivoImagen" name="archivoImagen" class="form-control input-sm" value="<?php echo $usuarios->imagen ?>">
          <td><img src="<?php echo base_url()?>imagenes1/<?php echo $productos->imagen ?> " height='50px' width='50px' ></td>

            </div>

       		</div>
       	</div>
			
           
 			</form>
		
			
  			</div>
  			<div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn_guardar_pago">Guardar</button> 
       		</div>
		</div><!--cerrar  -->
	</div><!--cerrar  -->

  <script type="text/javascript">
     $("#btn_guardar_pago").on("click",function(){

    

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
    url:'<?= base_url()?>index.php/productos/guardar',
    dataType:'json',
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(response){

        if (response.status==2) {
          toast('success',1500,'se registro el producto');  
             //dataSource.read();
            $("#modalCajaMov").modal('hide');
        location='<?php echo base_url()?>index.php/productos/productos/';      

        }else{



        }if (response.status==1) {
          
           toast('error', 1500, 'error'); 

        }
    
    }

    });

  });

  </script>