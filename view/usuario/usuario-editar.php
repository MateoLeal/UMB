<!-- !PAGE CONTENT! -->
<div class="w3-main w3-container w3-margin-bottom w3-white w3-card" style="margin-left:270px; padding-bottom: 20px;">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>

  <!-- Product grid -->
  <div class="w3-row">
    <center>
      <h1 class="page-header"> <?php echo $usuario->id != null ? 'Editar' : 'Crear'; ?> usuario </h1>
    </center> <br />
    <form action="" method="post" enctype="multipart/form-data">
      <div class="w3-container" style="margin-top:15px">
        <label for="uname"><b>Usuario</b></label>
        <input class="ilogin" id="usu" type="text" name="usu" placeholder="Usuario" pattern="[A-Za-z]{4,15}" title="Debe ingresar minimo 4 letras y maximo 15" value="<?php echo $usuario->user; ?>" required>
        <br />
        <label for="psw"><b>Contraseña</b></label>
        <input class="ilogin" id="pwd" type="password" name="pwd" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres" value="<?php echo $usuario->password; ?>" required>
        <?php if ($usuario->id != null) { ?>
          <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
          <input type="hidden" name="r" value="usuario&amp;Editar">
        <?php } else { ?>
          <input type="hidden" name="r" value="usuario&amp;Crear">
        <?php } ?>
        <button class="blogin">
          <?php echo $usuario->id != null ? 'Editar' : 'Crear'; ?>
        </button>
      </div>
    </form>
  </div>
</div>