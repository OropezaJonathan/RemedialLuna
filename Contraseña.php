<!DOCTYPE html>
<html lang="UTF-8">

  <head>
    <?php
    include_once('links/vendors.php');
    include_once('conexion.php');

    ?>
  </head>

<body>
<?php 
  include_once('links/menu2.php'); 
?>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
          <!-- Aqui codigo -->
                <div>
                    <form method="POST" action="guardar.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nombre" name="nombre">                            
                              </div>
                            <div class="form-group">
                            pe="email" class="form-control"  aria-describedby="emailHelp" placeholder="Correo Electronico" name="correo">
                                </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" id="psw">Contraseña</label>
                                
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="psw">
                                <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                            
                            </div>  <br>
                            <button type="submit" class="btn btn-primary">Enviar
                              
                            </button>

                    </form>

                    
                </div>
          </div>
        </div>
      </div>
    </div>
</section>
  
  
  <?php 
  include_once('links/pie.php');

  include_once("links/scrip.php");
  ?>

  
</body>

</body>
</html>