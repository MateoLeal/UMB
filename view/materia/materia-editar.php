<!-- !PAGE CONTENT! -->
<div class="w3-main w3-container w3-margin-bottom w3-white w3-card" style="margin-left:270px; padding-bottom: 20px;">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>

  <!-- Product grid -->
  <div class="w3-row">
    <center>
      <h1 class="page-header"> <?php echo $materia->ref != null ? 'Editar' : 'Crear'; ?> materia </h1>
    </center> <br />
    <form action="" method="post" enctype="multipart/form-data">
      <div class="w3-container" style="margin-top:15px">
        <label for="materia"><b>Nombre</b></label>
        <input class="ilogin" type="text" name="nombre" placeholder="Materia" pattern="[A-Z a-z]{4,100}" title="Debe ingresar minimo 4 letras y maximo 100" value="<?php echo $materia->nombre; ?>" required>
        <br />
        <label for="periodo"><b>Periodo</b></label>
        <input class="ilogin" type="text" name="periodo" placeholder="Periodo (EJMPLO: 12022)" pattern="[00000-99999]{5,5}" title="Debe ingresar 5 numeros ejemplo 12022 donde 1 es el semestre del año y lo que sigue es el año" value="<?php echo $materia->periodo; ?>" required>
        <?php if ($materia->ref != null) { ?>
          <input type="hidden" name="ref" value="<?php echo $materia->ref; ?>">
          <input type="hidden" name="r" value="materia&amp;Editar">
        <?php } else { ?>
          <input type="hidden" name="r" value="materia&amp;Crear">
        <?php } ?>
        <button class="blogin">
          <?php echo $materia->ref != null ? 'Editar' : 'Crear'; ?>
        </button>
      </div>
    </form>
  </div>
</div>