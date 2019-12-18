<?php
  if ($_POST){
  //VARIABLES DE LOS DATOS QUE LLENA EL USUARIO EN EL FORMULARIO (ESTAN LLAMADOS DENTRO DE LOS VALUES)//
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $direccion = trim($_POST['direccion']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmarPassword = trim($_POST['confirmarPassword']);
    $errores = [];
    $nombre = str_replace(" ", "", $nombre);
//validaciones
    if($nombre == '')
    {
      $errores['nombre'] = 'Completa el nombre';
    }
      elseif (strlen($nombre) <=2)
        {
          $errores['nombre'] = 'Al menos 2 caracteres';
        }
        elseif (!ctype_alpha($nombre))
            {
              $errores['nombre'] = 'Solo puede contener caracteres: (a-z , " ")';
            }
    if($apellido == '')
    {
      $errores['apellido'] = 'Completa el apellido';
    }
      elseif (strlen($apellido) <= 2)
        {
          $errores['apellido'] = 'Al menos 2 caracteres';
        }
    if($direccion == '')
    {
      $errores['direccion'] = 'Escribe tu direccion';
    }
      elseif (strlen($direccion) <= 8)
        {
          $errores['direccion'] = 'Escribe una dirección válida (al menos 8 caracteres)';
        }
    if($email == '')
    {
      $errores['email'] = 'Escribe tu E-mail';
    }
      elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
      {
        $errores['email'] = 'Ingresa un E-Mail válido';
      }
    if ($password == '')
    {
      $errores['password'] = 'La contraseña esta vacia';
    }

      elseif (strlen($password) <= 6)
      {
        $errores['password'] = 'Minimo 6 caracteres';
      }
    if ($confirmarPassword == '')
    {
      $errores['confirmarPassword'] = 'Reescribe la contraseña';
    }
    elseif ($confirmarPassword != $password)
    {
      $errores['confirmarPassword'] = 'Las contraseñas no coinciden';
    }


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
                    <p class="text-center text-danger"><?php echo $errores['nombre'] ?? ''?></p>
                  </div>
                  <div class="container-fluid form-group col-md-12">
                    <label class="d-flex justify-content-center" for="apellido">Apellido</label>
                    <input id="apellido" type="text" class="form-control" name="apellido" value="<?=$apellido ?? ''?>" placeholder="Ahora tu apellido">
                    <p class="text-center text-danger"><?php echo $errores['apellido'] ?? ''?></p>
                  </div>
                  <div class="form-group col-md-12">
                    <label class="d-flex justify-content-center" for="direccion">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="<?= $direccion ?? ''?>" placeholder="Avenida Corrientes 3800, C.A.B.A">
                    <p class="text-center text-danger"><?php echo $errores['direccion'] ?? ''?></p>
                  </div>
                  <div class="form-group col-md-12">
                    <label class="d-flex justify-content-center" for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="<?=$email ?? ''?>" placeholder="Email">
                    <p class="text-center text-danger"><?php echo $errores['email'] ?? ''?></p>
                  </div>
                  <div class="form-group col-md-12">
                    <label class="d-flex justify-content-center" for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" value="<?=$password ?? ''?>"placeholder="Password">
                    <p class="text-center text-danger"><?php echo $errores['password'] ?? ''?></p>
                  </div>
                  <div class="form-group col-md-12">
                    <label class="d-flex justify-content-center" for="inputPassword5">Confirmar Password</label>
                    <input id="inputPassword5" type="password" class="form-control" name="confirmarPassword" value="<?=$confirmarPassword ?? ''?>" placeholder="Confirmar Password">
                    <p class="text-center text-danger"><?php echo $errores['confirmarPassword'] ?? ''?></p>
                  </div>
                  <div class="custom-file file-upload-form">
                    <input id="avatar" type="file" class="custom-file-input" id="validatedCustomFile">
                    <label class="custom-file-label d-flex justify-content-center" for="avatar">Sube tu Avatar...</label>
                  </div>
                  <div class="form-group col-md-12 d-flex justify-content-center boton-enviar">
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
