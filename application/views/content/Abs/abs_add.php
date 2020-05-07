<?php
$data['listEt'] = $listEt;
//var_dump($listEt);die();
?>
<div class="wrapper">
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Ajout des absents
			</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url(); ?>"><i class="fas fa-home"></i> Home</a></li>
				<li>Absence</li>
				<li class="active">Ajout</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="box box-default">
				<div class="box-body">
					<?php //echo form_open_multipart('Retard/addLate');?>
					<form role="form" id="add_form" method="post">
						<div class="row">

							<!-- PARTIE GAUCHE DU FORMULAIRE -->
							<div class="col-md-6">
								<div class="form-group">
									<label>N° étudiant</label>
									<select class="form-control select2" name="num_et_abs" id="num_et_abs" style="width: 100%;">
										<option selected="selected">Sélectionner ici</option>
										<?php
										foreach ($listEt as $row):
											?>
											<option value="<?php echo $row['identifiant'] ?>"> <?php echo $row['identifiant'] ?></option>
										<?php
										endforeach;
										?>
									</select>
								</div>

								<div class="form-group">
									<label>Niveau</label>
									<select class="form-control select2" name="niveau_abs" id="niveau_abs" style="width: 100%;">
										<option selected="selected">Sélectionner ici</option>
										<option value="L1 - IRD">L1 - IRD</option>
										<option value="L1 - TC">L1 - TC</option>
										<option value="L2 - IRD">L2 - IRD</option>
										<option value="L2 - TC">L2 - TC</option>
										<option value="L3 - BANCASS">L3 - BANCASS</option>
										<option value="L3 - IRD">L3 - IRD</option>
										<option value="L3 - MEGP">L3 - MEGP</option>
									</select>
								</div>

								<div class="form-group">
									<label>Date</label>
									<input type="date" name="date_abs" class="form-control" id="date_abs" value="">
								</div>
							</div>

							<!-- PARTIE DROITE DU FORMULAIRE -->
							<div class="col-md-6">

								<div class="form-group">
									<label>Nom & prénom(s)</label>
									<input type="text" name="nom_et_abs" class="form-control" id="nom_et_abs" value="" readonly>
								</div>

								<div class="form-group">
									<label>Matière</label>
									<select class="form-control select2" name="matiere_abs" id="matiere_abs" style="width: 100%;"> </select>
								</div>
							</div>
						</div>

						<div class="modal-footer">
							<button class="btn btn-primary" id="save_late">Enregistrer</button></div>
					</form>
				</div>
			</div>
		</section>
	</div>
</div>
