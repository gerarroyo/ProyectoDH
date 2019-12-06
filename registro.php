<?php
if ($_POST){
//VARIABLES DE LOS DATOS QUE LLENA EL USUARIO EN EL FORMULARIO (ESTAN LLAMADOS DENTRO DE LOS VALUES)//
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $direccion = $_POST['direccion'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmarPassword = $_POST['confirmarPassword'];
  $errores = [];

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
                <div class="form-group col-md-6 formu-grupo">
                  <div class="form-group col-md-12">
                    <label class="d-flex justify-content-center" for="nombre">Nombre</label>
                    <input id="nombre" type="text" class="form-control" name="nombre"  value="<?=$nombre ?? ''?>" placeholder="Escribe tu nombre">
                  </div>
                  <div class="container-fluid form-group col-md-12">
                    <label class="d-flex justify-content-center" for="apellido">Apellido</label>
                    <input id="apellido" type="text" class="form-control" name="apellido" value="<?=$apellido ?? ''?>" placeholder="Ahora tu apellido">
                  </div>
                  <div class="form-group col-md-12">
                    <label class="d-flex justify-content-center" for="direccion">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="<?= $direccion ?? ''?>" placeholder="Avenida Corrientes 3800, C.A.B.A">
                  </div>
                  <div class="form-group col-md-12">
                    <label class="d-flex justify-content-center" for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="<?=$email ?? ''?>" placeholder="Email">
                  </div>
                  <div class="form-group col-md-12">
                    <label class="d-flex justify-content-center" for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" value="<?=$password ?? ''?>"placeholder="Password">
                  </div>
                  <div class="form-group col-md-12">
                    <label class="d-flex justify-content-center" for="inputPassword5">Confirmar Password</label>
                    <input id="inputPassword5" type="password" class="form-control" name="confirmarPassword" value="<?=$confirmarPassword ?? ''?>" placeholder="Confirmar Password">
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
