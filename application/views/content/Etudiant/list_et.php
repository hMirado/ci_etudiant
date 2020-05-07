<?php
$data['listetudiant'] = $listetudiant;
?>

<table class="table table-bordered table-striped tableau">
	<thead>
	<tr>
		<th class="column-title">Image</th>
		<th class="column-title">Identifiant</th>
		<th class="column-title">Nom</th>
		<th class="column-title">Prénom</th>
		<th class="column-title">Date de naissance</th>
		<th class="column-title">Adresse</th>
		<th></th> <!-- Nombre de th doit être égale au nombre de td -->
	</tr>
	</thead>

	<tbody>
	<?php
	foreach ($listetudiant as $row):
		$row = get_object_vars($row);
		$img = $row['image'];
		$id_et = $row['identifiant'];
		$nom = $row['nom'];
		$prenom = $row['prenom'];
		$adresse = $row['adresse'];
		$myDate = DateTime::createFromFormat('Y-m-d', $row['date_naissance']);
		$date = $myDate->format('d/m/Y');
		?>
		<tr>
			<td><img src="<?php echo base_url() . 'uploads/' . $img ?>" width="30"></td>
			<td><?php echo $id_et; ?></td>
			<td><?php echo $nom; ?></td>
			<td><?php echo $prenom; ?></td>
			<td><?php echo $date ?></td>
			<td><?php echo $adresse; ?></td>
			<td class="text-center">
				<a href="<?php echo site_url('etudiant/detail/'.$id_et); ?>" id="<?php echo $id_et;?>"><i class="fas fa-info-circle"></i>
				</a>
				<a href="" id="edit_et" data-id="<?php echo $id_et;?>"><i class="fa fa-edit" style="color:#10922B"></i>
				</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>

<?php $this->load->view('modal/modal_edit_et'); ?>
