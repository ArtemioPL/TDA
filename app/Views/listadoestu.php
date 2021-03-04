<div class="container">
<div class="text-right">
<a href="<?php echo base_url() ?>/formestu" class='btn btn-primary'><ion-icon class="ico" name="person-add-outline"></ion-icon> Crear registro</a>
</div>
<h2>Estudiantes</h2>
<table class="table table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Nombres</th>
      <th scope="col">Fecha Nacimiento</th>
      <th class="text-center" scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>

  <?php
        foreach($rows as $row):
    ?>
    <tr>
      <th scope="row"><?php echo $row->id; ?></th>
      <td><?php echo $row->apellidos; ?></td>
      <td><?php echo $row->nombres; ?></td>
      <td><?php echo $row->fechanac; ?></td>
      <td class='text-center'>
	    	<a href="<?php echo base_url(); ?>/Micontrolador_est/borrar/<?= $row->id ?>" class='btn btn-danger'><ion-icon class="ico" name="trash-outline"></ion-icon>Eliminar</a>
	    	<a href="<?php echo base_url(); ?>/Micontrolador_est/editar_ajax/<?= $row->id ?>" class='btn btn-success editar' data-toggle="modal" data-target="#exampleModal"><ion-icon class="ico" name="create-outline"></ion-icon>Editar</a>
      </td>
    </tr>
    <?php
        endforeach;
    ?>

  </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary save">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
</div>