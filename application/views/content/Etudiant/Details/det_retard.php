<?php
$data['retard'] = $retard;
?>

<h1>RETARD</h1>

<table class="table table-bordered table-striped tableau">
	<thead>
	<tr>
		<th class="column-title">Date</th>
		<th class="column-title">Heure</th>
		<th class="column-title">Matiére</th>
		<th class="column-title">Niveau</th>
	</tr>
	</thead>

	<tbody>
	<?php
	foreach ($retard as $row):
		$row = get_object_vars($row);
		$niveau_late = $row['niveau_late'];
		$mat_late = $row['mat_late'];
		$date_late = $row['date_late'];
		$heure = $row['heure_late']
		?>
		<tr>
			<td><?php echo $date_late; ?></td>
			<td><?php echo $heure; ?></td>
			<td><?php echo $mat_late; ?></td>
			<td><?php echo $niveau_late; ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
