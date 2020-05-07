<?php
$data['absence'] = $absence;
$data['retard'] = $retard;
//var_dump($retard);die();
?>

<div class="wrapper">
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Détail sur l'étudiant
			</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url(''); ?>"><i class="fas fa-home"></i> Home</a></li>
				<li><a href="<?php echo site_url('etudiant'); ?>">Etudiants</a></li>
				<li class="active">Détail</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<!-- PROFILE -->
				<div class="col-md-3">
					<!-- Profile Image -->
					<div class="box box-primary">
						<div class="box-body box-profile">
							<img class="profile-user-img img-responsive img-circle"
								 src="<?php echo base_url() . 'uploads/' . $detail->image; ?>"
								 alt="User profile picture">

							<h3 class="profile-username text-center"><?php echo $detail->prenom; ?></h3>
							<p class="text-muted text-center">N° étudiant : <?php echo $detail->identifiant; ?></p>
						</div>
					</div>

					<!-- A propos -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">A propos</h3>
						</div>

						<div class="box-body">
							<strong><i class="fa fa-book margin-r-5"></i> Nom & Prénom(s)</strong>
							<p class="text-muted">
								<?php echo $detail->nom . ' ' . $detail->prenom; ?>
							</p>
							<hr>

							<strong><i class="fa fa-calendar-alt"></i> Date de naissance</strong>
							<p class="text-muted">
								<?php echo $detail->date_naissance; ?>
							</p>
							<hr>

							<strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
							<p class="text-muted"><?php echo $detail->adresse; ?></p>
						</div>
					</div>
				</div>

				<div class="col-md-9">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#activity" data-toggle="tab">Absence</a></li>
							<li><a href="#timeline" data-toggle="tab">Retard</a></li>
							<li><a href="#settings" data-toggle="tab">Notes</a></li>
						</ul>

						<div class="tab-content">
							<!-- Absence -->
							<div class="active tab-pane" id="activity">
								<?php $this->load->view('content/etudiant/details/det_absence'); ?>
							</div>

							<!-- Retard -->
							<div class="tab-pane" id="timeline">
								<?php $this->load->view('content/etudiant/details/det_retard'); ?>
							</div>

							<!-- Note -->
							<div class="tab-pane" id="settings">
								<?php $this->load->view('content/etudiant/details/det_note'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
