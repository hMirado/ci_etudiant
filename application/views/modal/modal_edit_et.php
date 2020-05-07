<div class="modal fade" id="et_modif">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="">Modifier Jeu</h4>
			</div>

			<div class="modal-body">
				<form method="post" id="m_form">
					<div class="form-group">
						<label>Nom</label>
						<input type="text" name="nom" class="form-control" id="nom_modifier" value="">
					</div>

					<div class="form-group">
						<label>Prénom(s)</label>
						<input type="text" name="prenom" class="form-control" id="prenom_modifier" value="">
						</div>

					<div class="form-group">
						<label>Date de naissane</label>
						<input type="date" name="date_naissance" class="form-control" id="date_naissance_modifier" value="">
					</div>

					<div class="form-group">
						<label>Adresse</label>
						<input type="texe" name="adresse" class="form-control" id="adresse_modifier" value="">
					</div>

					<div class="form-group">
						<label>N° étudiant</label>
						<input type="text" name="identifiant" class="form-control" id="identifiant_modifier" value="" readonly>
					</div>

					<input type="hidden" name="id_et_modif"  id="id_et_modif" value="">

					<div class="modal-footer">
						<button type="button" type="submit" class="btn btn-primary" id="save_modif_et" name="Enregistrer">Enregistrer les modifications</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Annuller</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
