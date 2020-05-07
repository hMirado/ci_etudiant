<div class="box box-default">
	<div class="box-body">
		<form class="form-horizontal">
			<input type="hidden" name="id_et" value="<?php echo $detail->identifiant; ?>">
			<input type="hidden" class="form-control" name="num_et_note" id="num_et_note"value="<?php echo $detail->identifiant; ?>">

			<div class="form-group">
				<label class="col-sm-2 control-label">Niveau</label>
				<div class="col-sm-10">
					<select class="form-control select2" name="niveau_note" id="niveau_note" style="width: 100%;">
						<option selected="selected" disabled>Sélectionner ici</option>
						<option value="L1 - IRD">L1 - IRD</option>
						<option value="L1 - TC">L1 - TC</option>
						<option value="L2 - IRD">L2 - IRD</option>
						<option value="L2 - TC">L2 - TC</option>
						<option value="L3 - BANCASS">L3 - BANCASS</option>
						<option value="L3 - IRD">L3 - IRD</option>
						<option value="L3 - MEGP">L3 - MEGP</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Semestre</label>
				<div class="col-sm-10">
					<select class="form-control select2" name="semestre_note" id="semestre_note" style="width: 100%;">
						<option selected="selected" disabled>Sélectionner ici</option>
						<option value="Semestre 1">Semestre 1</option>
						<option value="Semestre 2">Semestre 2</option>
						<option value="Semestre 3">Semestre 3</option>
						<option value="Semestre 4">Semestre 4</option>
						<option value="Semestre 5">Semestre 5</option>
						<option value="Semestre 6">Semestre 6</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Matière</label>
				<div class="col-sm-10">
					<select class="form-control select2" name="matiere_note" id="matiere_note"
							style="width: 100%;"> </select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Note</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="note" id="note"value="">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" id="save_note" class="btn btn-info">Enregistrer</button>
					<button type="submit" id="cancel_note" class="btn btn-danger">Annuller</button>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="box box-default">
	<div class="box-body">
		<table class="table table-bordered table-striped tableau">
			<thead>
			<tr>
				<th class="column-title">Identifiant</th>
				<th class="column-title">Niveau</th>
				<th class="column-title">Matière</th>
				<th class="column-title">Note</th>
				<th></th>
			</tr>
			</thead>

			<tbody>

			</tbody>
		</table>
	</div>
</div>
