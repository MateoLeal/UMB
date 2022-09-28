<!-- !PAGE CONTENT! -->
<div class="w3-main w3-container w3-margin-bottom w3-white w3-card" style="margin-left:270px; padding-bottom: 20px;">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  <div class="w3-display-container w3-container">
    <h1 class="w3-center w3-text-red">Gestor notas estudiantes</h1>
  </div>
  <br />

  <!-- Product grid -->
  <div class="w3-container w3-center w3-margin-top">
    <div class="w3-center w3-margin-top w3-margin-bottom">
      <form action="" method="post" enctype="multipart/form-data">
      <center>
        <label class="w3-label2" for="semestre"><b>Materia</b></label>
        <select name="materia" class="w3-input2">
          <?php foreach ($this->model->ListarMaterias() as $r) : ?>
            <option value="<?php echo $r->ref; ?>"><?php echo $r->nombre.' - '. $r->periodo; ?></option>
          <?php endforeach; ?>
        </select>
        <br>
        <label class="w3-label2" for="semestre"><b>Id estudiante</b></label>
        <input type="text" name="id" class="w3-input2" placeholder="id estudiante" required>
      </center>
        <br>
        <input type="hidden" name="r" value="estudiante&amp;NotasEstudiante&amp;">
        <button class="w3-button w3-red w3-round-large">
          Buscar materia &nbsp;&nbsp;&nbsp;<i class="fa fa-book" style="font-size:36px"></i>
        </button>
      </form>
    </div>
  </div>

  <!-- End page content -->
</div>