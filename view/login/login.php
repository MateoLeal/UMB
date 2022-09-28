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

<body class="w3-light-grey w3-content" style="max-width:60%;margin-top:10px;">

  <!-- Image header -->
  <div class="w3-main w3-text-grey w3-white w3-container w3-card w3-margin-bottom bgimg-1">
  </div>
  <!-- !PAGE CONTENT! -->
  <div class="w3-main w3-white w3-container w3-card w3-margin-bottom" style="padding-bottom: 20px;">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>

    <!-- Product grid -->
    <div class="w3-row">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="w3-container" style="margin-top:15px">
          <label for="uname"><b>Usuario</b></label>
          <input class="ilogin" id="usu" type="text" name="usu" placeholder="Usuario" pattern="[A-Za-z]{4,15}" title="Debe ingresar minimo 4 letras y maximo 15" required>
          <br />
          <label for="psw"><b>Contraseña</b></label>
          <input class="ilogin" id="pwd" type="password" name="pwd" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres" required>
          <input type="hidden" name="r" value="login&amp;Obtener">
          <button class="blogin">
            Ingresar
          </button>
        </div>
      </form>
    </div>
    <!-- End page content -->
  </div>

</body>

</html>