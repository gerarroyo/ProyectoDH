<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php
    require_once('styles.php');
   ?>
  <link rel="stylesheet" href="css/perfil.css">
  <title>Mi Perfil</title>
</head>
  <body>
    <div>
      <div class="head-perfil">
        <?php
          require_once ('header.php');
        ?>
      </div>
      <div class="main-perfil">
        <main>
          <p>Este va a ser tu perfil</p>
        </main>
      </div>
      <div class="footer-perfil">
        <?php
        require_once('footer.php');
         ?>
      </div>
    </div>
    <?php require_once 'scripts.php'
    ?>
  </body>
</html>
