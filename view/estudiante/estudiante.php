<!-- !PAGE CONTENT! -->
<div class="w3-main w3-white w3-container w3-card w3-margin-bottom" style="margin-left:270px; padding-bottom: 20px;">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>

    <!-- Product grid -->
    <div class="w3-row" style="margin-top:20px">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="r" value="estudiante&amp;CrearEstudiante&amp;">
            <button class="w3-button w3-right">
                <i class="fa fa-user-plus w3-xxlarge w3-text-green"></i>
            </button>
        </form>
    </div>
    <br />
    <!-- Lista estudiantes -->
    <div class="w3-row">
        <center>
            <table style="width:85%;" class="table table-striped table-hover" id="tabla">
                <thead>
                    <tr>
                        <th class="w3-red w3-center" style="width: 5%">Id</th>
                        <th class="w3-red" style="width: 20%">Nombre</th>
                        <th class="w3-red" style="width: 20%">Semestre</th>
                        <th class="w3-red w3-center" style="width: 5%">Editar</th>
                        <th class="w3-red w3-center" style="width: 5%">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->model->Listar() as $r) : ?>
                        <tr>
                            <td class="w3-center"><?php echo $r->id; ?></td>
                            <td><?php echo $r->nombre; ?></td>
                            <td><?php echo $r->semestre; ?></td>
                            <td>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $r->id; ?>">
                                    <input type="hidden" name="r" value="estudiante&amp;EditarEstudiante&amp;">
                                    <button class="w3-button w3-block">
                                        <i class="fa fa-edit w3-large w3-text-blue"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $r->id; ?>">
                                    <input type="hidden" name="r" value="estudiante&amp;Eliminar&amp;">
                                    <button class="w3-button w3-block" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');">
                                        <i class="fa fa-trash w3-large w3-text-red"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br />
        </center>
    </div>
</div>