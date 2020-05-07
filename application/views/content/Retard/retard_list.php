<?php
$data['listLate'] = $listLate;
?>

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Listes des retards
			</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url(); ?>"><i class="fas fa-home"></i> Home</a></li>
				<li class="active">Retard</li>
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
									<th class="column-title">Heure</th>
								</tr>
								</thead>

								<tbody>
								<?php
								foreach ($listLate as $row):
									$row = get_object_vars($row);
									$id = $row['id_late'];
									$num_et_late = $row['num_et_late'];
									$nom_et_late = $row['nom_et_late'];
									$niveau_late = $row['niveau_late'];
									$mat_late = $row['mat_late'];
									$date_late = $row['date_late'];
									$heure_late = $row['heure_late'];
									?>
									<tr>
										<td><?php echo $num_et_late; ?></td>
										<td><?php echo $nom_et_late; ?></td>
										<td><?php echo $niveau_late; ?></td>
										<td><?php echo $mat_late; ?></td>
										<td><?php echo $date_late; ?></td>
										<td><?php echo $heure_late; ?></td>
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
