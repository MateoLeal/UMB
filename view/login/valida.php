<?php
error_reporting(0);
if ($login->id != null) {
  $pwd = $_REQUEST['pwd'];
  $hash = $login->password;
  if (password_verify($pwd, $hash)) {
    $_SESSION['user'] = $login->user;
    $controller = 'inicio';
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();
  } else { ?>
    <!DOCTYPE html>
    <html>
    <title>UMB</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="icon" type="ico" href="img/umb-ico.jpeg" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <body class="w3-light-grey w3-content" style="max-width:60%;">

      <!-- Image header -->
      <div class="w3-main w3-text-grey w3-white w3-container w3-card w3-margin-bottom bgimg-1">
      </div>
      <!-- !PAGE CONTENT! -->
      <div class="w3-main w3-white w3-container w3-card w3-margin-bottom" style="padding-bottom: 20px;">

        <!-- Push down content on small screens -->
        <div class="w3-hide-large" style="margin-top:83px"></div>

        <!-- Product grid -->
        <div class="w3-row">
          <center>
            <h1 class="page-header">Usuario o contraseña incorrectos por favor verifique sus datos </h1>
          </center>
          <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="r" value="login&amp;Login&amp;">
            <button class="w3-button w3-red w3-right"> Volver </button>
          </form>
        </div>
      </div>
    </body>

    </html>
  <?php
    require_once 'view/footer.php';
  }
} else { ?>
  <!DOCTYPE html>
  <html>
  <title>UMB</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/w3.css">
  <link rel="icon" type="ico" href="img/umb-ico.jpeg" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">

  <body class="w3-light-grey w3-content" style="max-width:60%;">

    <!-- Image header -->
    <div class="w3-main w3-text-grey w3-white w3-container w3-card w3-margin-bottom bgimg-1">
    </div>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-white w3-container w3-card w3-margin-bottom" style="padding-bottom: 20px;">

      <!-- Push down content on small screens -->
      <div class="w3-hide-large" style="margin-top:83px"></div>

      <!-- Product grid -->
      <div class="w3-row">
        <center>
          <h1 class="page-header">Usuario no encontrado </h1>
        </center> <br />
        <form action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="r" value="login&amp;Login&amp;">
          <button class="w3-button w3-red w3-right"> Volver </button>
        </form>
      </div>
    </div>
  </body>

  </html>
<?php
  require_once 'view/footer.php';
} ?>