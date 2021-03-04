
        <form id="formulario" action="<?php echo base_url() ?>/Micontrolador/guardar_editar/<?php echo $id; ?>" method="post">
            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $nombres; ?>">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $apellidos; ?>">
            </div>
            <div class="form-group">
                <label for="Asignatura">Asignatura</label>
                <input type="text" class="form-control" id="asignatura" name="asignatura" value="<?php echo $asignatura; ?>">
            </div>
        </form>