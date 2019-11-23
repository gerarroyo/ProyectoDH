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
                    <input id=nombre type="text" class="form-control" placeholder="Escribe tu nombre">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" placeholder="Ahora tu apellido">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputAddress">Direccion</label>
                    <input type="text" class="form-control" id=adress placeholder="Avenida Corrientes 3800, C.A.B.A">
                  </div>
                  <div class="form-group col-md-12">
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
