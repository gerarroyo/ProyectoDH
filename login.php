<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php
    require_once('styles.php');
   ?>
  <link rel="stylesheet" href="css/login.css">
  <title>Login</title>
</head>
<body>
  <div>
    <div class="header-login">
      <?php
        require_once ('header.php');
      ?>
    </div>
    <div class="main-login">
      <main>
        <div class="container-fluid">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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

</body>
</html>
