<?php
$data['absence'] = $absence;
?>

<h1>ABSENCE</h1>

<table class="table table-bordered table-striped tableau">
	<thead>
	<tr>
		<th class="column-title">Date</th>
		<th class="column-title">Matiére</th>
		<th class="column-title">Niveau</th>
	</tr>
	</thead>

	<tbody>
	<?php
	foreach ($absence as $row):
		$row = get_object_vars($row);
		$niveau_abs = $row['niveau_abs'];
		$matiere_abs = $row['matiere_abs'];
		$myDate = DateTime::createFromFormat('Y-m-d', $row['date_abs']);
		$date_abs = $myDate->format('d/m/Y');
	?>
		<tr>
			<td><?php echo $date_abs; ?></td>
			<td><?php echo $matiere_abs; ?></td>
			<td><?php echo $niveau_abs; ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
