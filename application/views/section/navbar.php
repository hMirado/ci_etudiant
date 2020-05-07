<div class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="<?php echo site_url(''); ?>" class="logo">
				<span class="logo-lg" style="font-family: Georgia, serif">
					<b>Gestion</b> <small>des étudiants</small>
				</span>
			</a>

			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a class="dropdown-toggle" data-toggle="dropdown">
							  <span class="hidden-xs">
								  <i class="fas fa-user-circle"></i>
								  ESMIA
							  </span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<div class="main-sidebar">
			<section class="sidebar">
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MENU DE NAVIGATION</li>

					<!-- TABLE DE BORD
					<li class="treeview">
						<a href="">
							<i class="far fa-chart-bar" style="color: lightskyblue"></i>
							<span>Tableau de bord</span>
							<ul class="treeview-menu">
								<li><a href="<?php echo site_url('absence/add'); ?>"><i class="far fa-user"></i>
										Etudiants</a></li>
								<li><a href="<?php echo site_url('absence/list'); ?>"><i class="fas fa-ban"></i>
										Absence</a></li>
								<li><a href="<?php echo site_url('absence/list'); ?>"><i class="fas fa-clock"></i>
										Retard</a></li>
							</ul>
						</a>
					</li> -->

					<!-- ETUDIANT -->
					<li>
						<a href="<?php echo site_url('etudiant'); ?>">
							<i class="far fa-user" style="color: lightskyblue"></i>
							<span>Etudiants</span>
						</a>
					</li>

					<!-- ABSENCE -->
					<li class="treeview">
						<a href="">
							<i class="fas fa-ban" style="color: lightskyblue"></i>
							<span>Absence</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo site_url('absence/add'); ?>"><i class="fas fa-plus-square"></i>
									Ajouter</a></li>
							<li><a href="<?php echo site_url('absence/list'); ?>"><i class="fas fa-list-ol"></i>
									Listes</a></li>
						</ul>
					</li>

					<!-- RETARD -->
					<li class="treeview">
						<a href="">
							<i class="fas fa-clock" style="color: lightskyblue"></i>
							<span>Retard</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo site_url('retard/add'); ?>"><i class="fas fa-plus-square"></i>
									Ajouter</a></li>
							<li><a href="<?php echo site_url('retard/list'); ?>"><i class="fas fa-list-ol"></i>
									Listes</a></li>
						</ul>
					</li>
				</ul>
			</section>
		</div>
