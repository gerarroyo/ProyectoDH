<?php

if($_POST){
  var_dump($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php
    require_once('styles.php');
   ?>
  <link rel="stylesheet" href="css/registro.css">
  <title>Registrate</title>
</head>
  <body>
    <div>
      <div class="head-registro">
        <?php
          require_once ('header.php');
        ?>
      </div>
      <div class="main-registro">
        <main>
          <div class="container">
            <h1 class="text-center titulo-principal">Registro</h1>
            <form class="formulario-registro" method="POST">
                <div class="form-group col-md-12">
                  <div class="form-group col-md-12">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" type="text" class="form-control" name="nombre"  value="<?= $_POST['nombre'] ?? ''?>" placeholder="Escribe tu nombre">
                    <small> <?= $errores['nombre'] ?? '' ?> </small>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" name="apellido" value="<?= $_POST['apellido'] ?? '' ?>" placeholder="Ahora tu apellido">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputAddress">Direccion</label>
                    <input type="text" class="form-control" id="address" name="direccion" value="<?= $_POST['direccion'] ?? ''?>" placeholder="Avenida Corrientes 3800, C.A.B.A">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $_POST['email'] ?? '' ?>" id="inputEmail4" placeholder="Email">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="password" value="<?=$_POST['password'] ?? ''?>"placeholder="Password">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputPassword5">Confirmar Password</label>
                    <input type="password" class="form-control" id="inputPassword5" name="confirmarPassword" value="<?=$_POST['confirmarPassword']?? ''?>" placeholder="Confirmar Password">
                  </div>
                  <div class="form-group col-md-12 d-flex justify-content-center ">
                    <button type="submit" class="btn btn-primary">Registrate</button>
                  </div>
                </div>
            </form>
          </div>
        </main>
      </div>
      <div class="footer-registro">
        <?php
        require_once('footer.php');
         ?>
      </div>
    </div>
    <?php require_once 'scripts.php'
    ?>
  </body>
</html>
