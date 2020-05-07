<?php
$data['listAbs'] = $listAbs;
?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Listes des absents
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url(); ?>"><i class="fas fa-home"></i> Home</a></li>
			<li>Absence</li>
			<li class="active">Liste</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body">
						<table  class="table table-bordered table-striped tableau">
							<thead>
							<tr>
								<th class="column-title">N° étudiant</th>
								<th class="column-title">Nom & Prénom(s)</th>
								<th class="column-title">Niveau</th>
								<th class="column-title">Matière</th>
								<th class="column-title">Date</th>
							</tr>
							</thead>

							<tbody>
							<?php
							foreach ($listAbs as $row):
								$row = get_object_vars($row);
								$id = $row['id_abs'];
								$num_et_abs = $row['num_et_abs'];
								$nom_et_abs = $row['nom_et_abs'];
								$niveau_abs = $row['niveau_abs'];
								$matiere_abs = $row['matiere_abs'];
								$myDate = DateTime::createFromFormat('Y-m-d', $row['date_abs']);
								$date_abs = $myDate->format('d/m/Y');
								?>
								<tr>
									<td><?php echo $num_et_abs; ?></td>
									<td><?php echo $nom_et_abs; ?></td>
									<td><?php echo $niveau_abs; ?></td>
									<td><?php echo $matiere_abs; ?></td>
									<td><?php echo $date_abs; ?></td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
