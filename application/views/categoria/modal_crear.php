<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="modal-title">Categorias</div>
			</div>
         <div class="modal-body">
         	<form  id="gridform">	
          <input type="hidden" id="id" name="id" value="<?php echo $categoria->id ?>">
       	<div class="row">
       		<div class="col-md-12">
       		

            <div class="form-group">
              <label for="Categorias">categoria</label>
   <input type="text" id="categoria" name="categoria" class="form-control input-sm" value="<?php echo $categoria->categoria ?>" placeholder="Ingrese Categorias">
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

       $('#gridform').submit();
     

    });

    $('#gridform').on('submit',function(e){
      e.preventDefault();
      
      $.ajax({
    url:'<?= base_url()?>index.php/categorias/guardar',
    dataType:'json',
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(response){

        if (response.status==2) {
          toast('success',1500,'se registro la categoria');  
             //dataSource.read();
            $("#modalCajaMov").modal('hide');
        location='<?php echo base_url()?>index.php/categorias/categoria/';      

        }else{



        }if (response.status==1) {
          
           toast('error', 1500, 'error'); 

        }
    
    }

    });


    });

    

  </script>