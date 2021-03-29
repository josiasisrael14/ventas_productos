<div id="back"></div>

<div class="login-box">
  
  <div class="login-logo">

    <img src="<?php echo base_url()?>imagenes1/madre_jairo.jpg" class="img-responsive">

  </div>

  <div class="login-box-body">

    <p class="login-box-msg">Ingresar al sistema</p>

    <form method="post" action="<?php echo base_url()?>index.php/general/validar">

     <!-- <input type="hidden"  id="id" name="id" value="">-->

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="contrazeña" id="contrazeña" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      
      </div>

      <div class="row">
       
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        
        </div>

      </div>


    </form>

  </div>

</div>


