<div class="container">
<h3>Añadir Docente</h3>
<div class="card">
    <div class="card-body">
        <form action="<?php echo base_url() ?>/Micontrolador/guardar" method="post">

            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos">
            </div>
            <div class="form-group">
                <label for="asignatura">Asignatura</label>
                <input type="text" class="form-control" id="asignatura" name="asignatura">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   </div>
   </div>
   </div>