<?php
    session_start();
        if (empty($_SESSION['nombre']) and empty($_SESSION['apellido'])) {
        header('location:login/login.php');
    }

?>


<?php require('./layout/topbar.php'); ?>

<?php require('./layout/sidebar.php'); ?>


<div class="page-content">

    <h5 class="text-center text-secondary">ASISTENCIAS DE LOS USUARIOS</h5>

<?php
include "../modelo/conexion.php";

$sql=$conexion->query(" SELECT
	asistencia.*, 
	asistencia.id_asistencia, 
	asistencia.id_empleado, 
	asistencia.entrada, 
	asistencia.salida, 
	empleado.*, 
	empleado.id_empleado, 
	empleado.nombre, 
	empleado.apellido, 
	empleado.dni, 
	empleado.cargo, 
	cargo.*, 
	cargo.id_cargo, 
	cargo.nombre
FROM
	asistencia
	INNER JOIN
	empleado
	ON 
		asistencia.id_empleado = empleado.id_empleado
	INNER JOIN
	cargo
	ON 
		empleado.cargo = cargo.id_cargo ")

?>

    <table class="table" id= "example">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">GRADO</th>
      <th scope="col">ENTRADA</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($datos = $sql->fetch_object()){ ?>
        <tr>
      <th><?= $datos->id_asistencia ?></th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <?php }
    ?>


  </tbody>
</table>

</div>
</div>




<?php require('./layout/footer.php'); ?>