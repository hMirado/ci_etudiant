<?php
$data['listetudiant'] = $listetudiant;
?>

<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Etudiants
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php //echo site_url('admin/user/'); ?>"><i class="fas fa-home"></i> Home</a></li>
        <li class="active">Etudiants</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
        <div class="tabset">
          <!-- Tab 1 -->
          <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
          <label for="tab1"><i class="fas fa-user-plus"></i> Ajouter d'étudiant</label>
          <!-- Tab 2 -->
          <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
          <label for="tab2"><i class="fas fa-user-check"></i> Liste des étudiants</label>

          <div class="tab-panels">
            <section id="marzen" class="tab-panel">
              <?php $this->load->view('content/etudiant/add_et'); ?>
            </section>
            <section id="rauchbier" class="tab-panel">
              <?php $this->load->view('content/etudiant/list_et'); ?>
            </section>
          </div>
        </div>
      </div>
    </section>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
