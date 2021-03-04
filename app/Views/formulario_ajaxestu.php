
        <form id="formulario" action="<?php echo base_url() ?>/Micontrolador_est/guardar_editar/<?php echo $id; ?>" method="post">
            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $nombres; ?>">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $apellidos; ?>">
            </div>
            <div class="form-group">
                <label for="fechanac">Fecha de Nacimiento</label>
                <input type="text" class="form-control" id="fechanac" name="fechanac" value="<?php echo $fechanac; ?>">
            </div>
        </form>