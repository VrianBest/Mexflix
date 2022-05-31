<?php 

require('StatusController.php');

echo '<h1> CRUD con MVC de la tabla status </h1>';

$status = new StatusController();

$status_data = $status->read();
var_dump($status_data);

$num_status = count($status_data);

echo '<h1>Numero de status:'.$num_status. '</h1>';

echo '<h2>Tabla de status</h2>';

echo '<table> 
	<tr>
		<th><Status_id/th>
		<th><Status/th>
	</tr>';
	for($n = 0; $n < count($status_data); $n++ ) {
		echo '<tr>
				<td>' .$status_data[$n]['status_id'] .'<Status_id/td>
				<td>' .$status_data[$n]['status'] .'<Status/td>
			</tr>';
	}
echo '</table>'; 

echo '<h2>Insertando status</h2>';
$new_status = array(
	'status_id' => 0,
	'status' => 'Otro Status'
);
echo '<h2>Actualizando status</h2>';
echo '<h2>Eliminado status</h2>';