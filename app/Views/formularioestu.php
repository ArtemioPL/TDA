<div class="container">
<h3>Añadir Estudiante</h3>
<!--<div class="input-group date fj-date">
			<input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
		  </div>-->
<div class="card">
    <div class="card-body">
        <form action="<?php echo base_url() ?>/Micontrolador_est/guardar" method="post">

            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos">
            </div>
            <div class="form-group">
            
                <label for="fechanac">Fecha de Nacimiento</label>
                <div class="input-group date fj-date">
                <input type="text" class="form-control" id="fechanac" name="fechanac"><span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
            </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   </div>
   </div>
   </div>