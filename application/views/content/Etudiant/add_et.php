<div class="modal-content center">
    <div class="modal-header">
        <h4 class="modal-title">Nouveau Etudiant</h4>
    </div>
    <div class="modal-body">
        <div style="color:red">
            <?php //echo validation_errors(); ?>
            <?php if(isset($error)){print $error;}?>
       </div>

       <?php echo form_open_multipart('Etudiant/add');?>
        <form role="form" id="add_form" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nom</label>
                    <input type="text" name="nom" class="form-control" id="name" value="">
                </div>
                <div class="form-group col-md-6">
                    <label>Prénom(s)</label>
                    <input type="text" name="prenom" class="form-control" id="name" value="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Date de naissane</label>
                    <input type="date" name="date_naissance" class="form-control" id="name" value="">
                </div>
                <div class="form-group col-md-9">
                    <label>Adresse</label>
                    <input type="text" name="adresse" class="form-control" id="adresse" value="">
                </div>
            <div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>N° étudiant</label>
                    <input type="text" name="identifiant" class="form-control" id="name" value="">
                </div>
                <div class="form-row col-md-6">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" id="poste" value="">
                </div>
            </div>
            <br>
           	<div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="save" name="Enregistrer">Enregistrer</button>
		   	</div>
        </form>
    </div>
</div>
