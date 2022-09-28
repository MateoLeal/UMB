<?php
$host = $_SERVER['HTTP_HOST'];
$ruta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$url = "http://$host$ruta";
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<title>OC-Canalife</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/w3.css">
<link rel="icon" type="ico" href="imagenes/favicon.ico" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">

<body class="w3-light-grey w3-content w3-margin-top" style="max-width:1400px;">

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-bar-block w3-collapse w3-top w3-margin-top w3-light-grey" style="z-index:3;width:250px" id="menuLateral">
    <!-- Left Column -->
    <div class="w3-text-grey w3-white w3-margin-bottom w3-card-4">
      <div class="w3-display-container">
        <img src="img/umb-logo.png" style="width:85%" alt="Canalife">
        <div class="w3-container">
          <h4 class="w3-right">Bienvenido(a) <?php echo $_SESSION['user']; ?></h4>
        </div>
        <hr>
      </div>
      <div class="w3-container">
        <p>
          <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="r" value="inicio&amp;Index&amp;">
            <button class="w3-button w3-block w3-left-align">
              <i class="fa fa-home w3-margin-right w3-large w3-text-black"></i>
              <font class="w3-text-black">Inicio</font>
            </button>
          </form>
        </p>
        <p>
          <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="r" value="materia&amp;Ver&amp;">
            <button class="w3-button w3-block w3-left-align">
              <i class="fa fa-book w3-margin-right w3-large w3-text-black"></i>
              <font class="w3-text-black">Administrar materias </font>
            </button>
          </form>
        </p>
        <p>
          <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="r" value="estudiante&amp;Ver&amp;">
            <button class="w3-button w3-block w3-left-align">
              <i class="fa fa-address-card-o w3-margin-right w3-large w3-text-black"></i>
              <font class="w3-text-black">Administrar estudiante </font>
            </button>
          </form>
        </p>
        <p>
          <?php if ($_SESSION['user'] === 'mleal') { ?>
            <form action="" method="post" enctype="multipart/form-data">
              <input type="hidden" name="r" value="usuario&amp;Ver&amp;">
              <button class="w3-button w3-block w3-left-align">
                <i class="fa fa-address-book w3-margin-right w3-large w3-text-black"></i>
                <font style="color: black"> Administrar usuarios </font>
              </button>
            </form>
          <?php } ?>
        </p>
        <hr>
        <p>
          <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="r" value="login&amp;Login&amp;">
            <button class="w3-button w3-block w3-left-align">
              <i class="fa fa-power-off w3-margin-right w3-large w3-text-red"></i>
              <font style="color: red"> Salir </font>
            </button>
          </form>
        </p>
        <br />
      </div>
    </div>
  </nav>
  <!-- Top menu on small screens -->
  <header class="w3-bar w3-top w3-hide-large w3-white w3-xlarge">
    <div style="padding-top:10px; padding-left: 10px; padding-bottom: 10px;"><img src="img/umb-logo.png" style="width:90px" alt="canalife">
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right" onclick="w3_open_menu()"><i class="fa fa-bars"></i></a>
  </header>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close_menu()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>