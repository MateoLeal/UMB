<!-- !PAGE CONTENT! -->
<div class="w3-main w3-container w3-margin-bottom w3-white w3-card" style="margin-left:270px; padding-bottom: 20px;">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>

  <!-- Product grid -->
  <div class="w3-row">
    <center>
      <h1 class="page-header"> Asignar notas estudiante </h1>
    </center> <br />
    <form action="" method="post" enctype="multipart/form-data">
      <div class="w3-container" style="margin-top:15px">
        <div class="w3-third w3-left w3-margin-top w3-margin-bottom">
          <label for="estudiante"><b>Nombre</b></label>
          <input class="ilogin" type="text" name="nombre" value="<?php echo $estudiante->estudiante; ?>" disabled>
          <br />
          <label for="periodo"><b>Periodo</b></label>
          <input class="ilogin" type="text" name="periodo" value="<?php echo $estudiante->periodo; ?>" disabled>
        </div>
        <div class="w3-third w3-left w3-margin-top w3-margin-bottom">
          <label for="id"><b>Id</b></label>
          <input class="ilogin" type="text" name="id" value="<?php echo $estudiante->id; ?>" disabled>  
          <br />
          <label for="materia"><b>Materia</b></label>
          <input class="ilogin" type="text" name="materia" value="<?php echo $estudiante->materia; ?>" disabled>
        </div>
        <div class="w3-third w3-left w3-margin-top w3-margin-bottom">
          <label for="semestre"><b>Semestre</b></label>
          <input class="ilogin" type="text" name="semestre" value="<?php echo $estudiante->semestre; ?>" disabled>
          <br />
          <label for="Definitiva"><b>Definitiva</b></label>
          <input class="ilogin" type="text" name="definitiva" value="<?php echo $estudiante->definitiva; ?>" disabled>
        </div>
        <label for="notas"><b>Notas</b></label>
        <table style="width:100%;" class="table table-striped table-hover" id="tabla">
          <thead>
              <tr>
                  <th class="w3-red w3-center" style="width: 30%">Descripción</th>
                  <th class="w3-red w3-center" style="width: 10%">Nota</th>
                  <th class="w3-red w3-center" style="width: 5%">Editar</th>
                  <th class="w3-red w3-center" style="width: 5%">Eliminar</th>
              </tr>
          </thead>
          <tbody>
            <?php foreach ($this->model->ListarNotas($estudiante->ref, $estudiante->id) as $r) : ?>
              <tr>
                <td class="w3-center"><?php echo $r->descripcion; ?></td>
                <td class="w3-center"><?php echo $r->nota; ?></td>
                <td>
                  <form action="" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="ref" value="<?php echo $r->ref; ?>">
                      <input type="hidden" name="r" value="materia&amp;EditarMateria&amp;">
                      <button class="w3-button w3-block">
                          <i class="fa fa-edit w3-large w3-text-blue"></i>
                      </button>
                  </form>
                </td>
                <td>
                  <form action="" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="ref" value="<?php echo $r->ref; ?>">
                      <input type="hidden" name="r" value="materia&amp;Eliminar&amp;">
                      <button class="w3-button w3-block" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');">
                          <i class="fa fa-trash w3-large w3-text-red"></i>
                      </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
            <tr>
              <form action="" method="post" enctype="multipart/form-data">
                <td class="w3-center">
                  <input type="text" name="descripcion" class="w3-input3" placeholder="Descripción" required>  
                </td>
                <td class="w3-center">
                <input type="text" name="nota" class="w3-input3" placeholder="Nota (EJEMPLO: 3.45)" pattern="[0-9](.)[0-9]{1,4}" title="Debe ingresar minimo 4 letras y maximo 15" required>  
                </td>
                <td COLSPAN="2" class="w3-center">
                  <button class="w3-button w3-red w3-round-large">
                    Agregar nota
                  </button>
                </td>
                <input type="hidden" name="ref" value="<?php echo $estudiante->ref; ?>">
                <input type="hidden" name="id" value="<?php echo $estudiante->id; ?>">
                <input type="hidden" name="r" value="estudiante&amp;Nota">
              </form>
            </tr>
          </tbody>
        </table>
      </div>
    </form>
  </div>
</div>