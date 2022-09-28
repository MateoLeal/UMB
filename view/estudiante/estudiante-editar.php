<!-- !PAGE CONTENT! -->
<div class="w3-main w3-container w3-margin-bottom w3-white w3-card" style="margin-left:270px; padding-bottom: 20px;">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>

  <!-- Product grid -->
  <div class="w3-row">
    <center>
      <h1 class="page-header"> <?php echo $estudiante->id != null ? 'Editar' : 'Crear'; ?> estudiante </h1>
    </center> <br />
    <form action="" method="post" enctype="multipart/form-data">
      <div class="w3-container" style="margin-top:15px">
        <label for="estudiante"><b>Nombre</b></label>
        <input class="ilogin" type="text" name="nombre" placeholder="Estudiante" pattern="[A-Z a-z]{4,50}" title="Debe ingresar minimo 4 letras y maximo 50" value="<?php echo $estudiante->nombre; ?>" required>
        <br />
        <label for="semestre"><b>Semestre</b></label>
        <input class="ilogin" type="text" name="semestre" placeholder="Semestre (EJMPLO: 1)" pattern="[0-9]{1,2}" title="Debe ingresar un numero del 1 al 10" value="<?php echo $estudiante->semestre; ?>" required>
        <?php if ($estudiante->id != null) { ?>
          <input type="hidden" name="id" value="<?php echo $estudiante->id; ?>">
          <input type="hidden" name="r" value="estudiante&amp;Editar">
        <?php } else { ?>
          <input type="hidden" name="r" value="estudiante&amp;Crear">
        <?php } ?>
        <button class="blogin">
          <?php echo $estudiante->id != null ? 'Editar' : 'Crear'; ?>
        </button>
      </div>
    </form>
  </div>
</div>