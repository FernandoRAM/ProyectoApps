<table>
	<th>Expediente</th>
	<th>Nombre</th>
	<th>Semestre</th>
	<th>Carrera</th>

	<?php foreach ($this->pruebas as $registro) { ?>
		<tr>
			<?php foreach ($registro as $value) {
				echo "<td>".$value."</td>";
			} ?>
		</tr>
	<?php } ?>
</table>