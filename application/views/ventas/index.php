<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Crear venta
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Crear venta</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">

      <!--=====================================
      EL FORMULARIO
      ======================================-->
      
      <div class="col-lg-5 col-xs-12">
        
        <div class="box box-success">
          
          <div class="box-header with-border"></div>

          <form role="form" metohd="post">

            <div class="box-body">
  
              <div class="box">

                <!--=====================================
                ENTRADA DEL VENDEDOR
                ======================================-->
            
                <div class="form-group">
                
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control" id="nuevoVendedor" name="nuevoVendedor" value="<?php echo $_SESSION['usuario']; ?>" readonly>

                  </div>

                </div> 

                <!--=====================================
                ENTRADA DEL VENDEDOR
                ======================================--> 

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    
                    <input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="10002343" readonly>
                  
                  </div>
                
                </div>

                <!--=====================================
                ENTRADA DEL CLIENTE
                ======================================--> 

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    
                    <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required>

                    <option value="">Seleccionar cliente</option>

                    </select>
                    
                    <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar cliente</button></span>
                  
                  </div>
                
                </div>

                <!--=====================================
                ENTRADA PARA AGREGAR PRODUCTO
                ======================================--> 

                <div class="form-group row nuevoProducto">

                  <!-- Descripción del producto -->
                  
                  <div class="col-xs-6" style="padding-right:0px">
                  
                    <div class="input-group"  id="mostrar_descrip" style="display: none;">
                      
                      <span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></span>

                      <input type="text"  class="form-control" id="agregarProducto" name="agregarProducto" placeholder="Descripción del producto" value="<?php echo $producto->descripcion ?>" required>

                    </div>

                  </div>

                  <!-- Cantidad del producto -->

                  <div class="col-xs-3">
                    
                     <input type="number" style="display: none;" class="form-control" id="nuevaCantidadProducto" name="nuevaCantidadProducto"  min="1" placeholder="0" required>

                  </div> 

                  <!-- Precio del producto -->

                  <div class="col-xs-3" style="padding-left:0px">

                    <div class="input-group" id="mostrar_prod" style="display: none;">

                      <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                         
        <input type="number" min="1" class="form-control josias" id="nuevoPrecioProducto" name="nuevoPrecioProducto" placeholder="000000" onchange="suma();" readonly="" value="<?php echo $producto->precio_venta ?>" required>
         
                    </div>
                     
                  </div> 

                </div>

                <!--=====================================
                BOTÓN PARA AGREGAR PRODUCTO
                ======================================-->

                <button type="button" class="btn btn-default hidden-lg">Agregar producto</button>

                <hr>

                <div class="row">

                  <!--=====================================
                  ENTRADA IMPUESTOS Y TOTAL
                  ======================================-->
                  
                  <div class="col-xs-8 pull-right">
                    
                    <table class="table">

                      <thead>

                        <tr>
                          <th>Impuesto</th>
                          <th>Total</th>      
                        </tr>

                      </thead>

                      <tbody>
                      
                        <tr>
                          
                          <td style="width: 50%">
                            
                            <div class="input-group">
                           
                              <input type="number" class="form-control" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" placeholder="0" required>
                              <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        
                            </div>

                          </td>

                           <td style="width: 50%">
                            
                            <div class="input-group">
                           
                              <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                              <input type="number" min="1" class="form-control" id="nuevoTotalVenta" name="nuevoTotalVenta" placeholder="00000"  required>
                              
                        
                            </div>

                          </td>

                        </tr>

                      </tbody>

                    </table>

                  </div>

                </div>

                <hr>

                <!--=====================================
                ENTRADA MÉTODO DE PAGO
                ======================================-->

                <div class="form-group row">
                  
                  <div class="col-xs-6" style="padding-right:0px">
                    
                     <div class="input-group">
                  
    <select class="form-control" id="nuevoMetodoPago" name="nuevoMetodoPago"   required>
                        <option value="">Seleccione método de pago</option>
                        <option value="efectivo">Efectivo</option>
                        <option value="tarjetaCredito">Tarjeta Crédito</option>
                        <option value="tarjetaDebito">Tarjeta Débito</option>                  
                      </select>    

                    </div>

                  </div>

                  <div class="col-xs-3" style="padding-left:0px">
                        
                    <div class="input-group ">
                         
                      <input type="text" style="display: none;" class="form-control josias" id="nuevoCodigo" name="nuevoCodigo" placeholder="000000" onchange="suma();" required>
                          

                     <!--<span class="input-group-addon"><i class="ion ion-social-usd"></i></span>-->
                      
                    </div>
                    
                     <div class="input-group ">
                         
                      <input type="text" style="display: none; width: 200px;" class="form-control" id="transacion" name="transacion" placeholder="codigo transacion"  required>
                          

                     <!--<span class="input-group-addon"><i class="ion ion-social-usd"></i></span>-->
                      
                    </div>
                  

                  </div>

                  <div class="col-xs-3" style="padding-left:0px">
                        
                    <div class="input-group ">
                         
                      <input type="text" style="display: none;" class="form-control " id="vuelto" name="vuelto" placeholder="000000"  required>
                          

                     <!--<span class="input-group-addon"><i class="ion ion-social-usd"></i></span>-->
                      
                    </div>

                  </div>
                

                </div>

                <br>
      
              </div>

          </div>

          <div class="box-footer">

            <button type="submit" class="btn btn-primary pull-right">Guardar venta</button>

          </div>

        </form>

        </div>
            
      </div>
 


       <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
        
        <div class="box box-warning">

          <div class="box-header with-border"></div>

          <div class="box-body">
            
            <table id="jairo" class="table table-bordered table-striped dt-responsive tablas">
              
               <thead>

                 <tr>
                 
                  <th>Imagen</th>
                  <th>Código</th>
                  <th>Descripcion</th>
                  <th>Stock</th>
                  <th>Acciones</th>
                </tr>

              </thead>

              <tbody>
                 <?php foreach ($ventas as $value) {?>
                <tr>
            <td><img src="<?php echo base_url()?>imagenes1/<?php echo $value->imagen ?>" height='50px' width='50px'></td>       
          <td><?php echo $value->codigo ?></td>
         <td><?php echo $value->descripcion ?></td>
           <td><?php echo $value->stock ?></td>
                  <td>                 
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary btnAgregarProducto" data-id='<?php echo $value->id ?>' id="bt_agregar">Agregar</button> 
                    </div>
                  </td>
                </tr>
                <?php  }?>
                   
              </tbody>

            </table>

          </div>

        </div>


      </div>

    </div>
   
  </section>

</div>


<script type="text/javascript">


$(document).ready(function(){

    $('#jairo').DataTable();

  });


  //http://www.forosdelweb.com/f13/ocultar-mostrar-campos-via-select-1124217/
  //https://es.stackoverflow.com/questions/238780/ocultar-div-de-acuerdo-a-la-opci%C3%B3n-seleccionada-mediante-select
  //ocultar y mostrar un campo con un select option en javascript

$("#nuevoMetodoPago").on('change',function(){

  var valor=$(this).val();
  if (valor=="efectivo") {


   $("#transacion").hide();
  $("#nuevoCodigo").show();
  $("#vuelto").show();



  }else{

  if (valor=="tarjetaCredito") {
    $("#transacion").show();
   $("#nuevoCodigo").hide();
  $("#vuelto").hide();

  }

  }
});


  function suma(){  
 
var add=0;
$('.josias').each(function(){

  if (!isNaN($(this).val())) {

    add+=Number($(this).val());

  }
});

 $('#vuelto').val(add);

  }


/*$(".btnAgregarProducto").click(function(e){
  e.preventDefault();
  var id=$(this).data('id');
   var url='<?= base_url()?>index.php/ventas/nuevoproductos/'+id
      $.ajax({
        url:url,
        dataType:'json',
        method:'POST',
        success:function(response){
       $(".nuevoProducto").append(

            '<div class="row" style="padding:5px 15px">'+

        '<!-- Descripción del producto -->'+
            
            '<div class="col-xs-6" style="padding-right:0px">'+
            
              '<div class="input-group">'+
                
                '<span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarProducto" idProducto><i class="fa fa-times"></i></button></span>'+

                '<select class="form-control nuevaDescripcionProducto" id="producto'+numProducto+'" idProducto name="nuevaDescripcionProducto" required>'+

                '<option>Seleccione el producto</option>'+

                '</select>'+  

              '</div>'+

            '</div>'+

            '<!-- Cantidad del producto -->'+

            '<div class="col-xs-3 ingresoCantidad">'+
              
               '<input type="number" class="form-control nuevaCantidadProducto" name="nuevaCantidadProducto" min="1" value="0" stock nuevoStock required>'+

            '</div>' +

            '<!-- Precio del producto -->'+

            '<div class="col-xs-3 ingresoPrecio" style="padding-left:0px">'+

              '<div class="input-group">'+

                '<span class="input-group-addon"><i class="ion ion-social-usd"></i></span>'+
                   
                '<input type="text" class="form-control nuevoPrecioProducto" precioReal="" name="nuevoPrecioProducto" readonly required>'+
   
              '</div>'+
               
            '</div>'+

          '</div>');

           

         
        }
      });
     
    });
    */
    





   //var precio=$("#nuevoTotalVenta").val();

   //var pago=$("#nuevoCodigo").val();


  /*function entrada(){


  var valor=$(this).val();

  alert(valor);

  }*/
     
/*$("#bt_agregar").on("click",function(){
 
$("#mostrar_descrip").show();
$("#nuevaCantidadProducto").show();
$("#mostrar_prod").show();
});
*/



$(".btnAgregarProducto").click(function(){

$("#mostrar_descrip").show();
$("#nuevaCantidadProducto").show();
$("#mostrar_prod").show();

var id=$(this).data('id');
var url='<?= base_url()?>index.php/ventas/nuevoproductos/'+id
$.ajax({
        url:url,
        //data:url,
        //dataType:'json',
        method:'get',
        success:function(producto){

          $("#nuevoPrecioProducto").val(producto);
          $("#agregarProducto").val(producto);

        // $("#nuevoPrecioProducto").val(producto.descripcion);
         //$("#agregarProducto").val(producto.precio_venta);

        }


      });



});





/*$("#bt_agregar").click(function(e){
 e.preventDefault();

$("#mostrar_descrip").show();
$("#nuevaCantidadProducto").show();
$("#mostrar_prod").show();
});*/



</script>