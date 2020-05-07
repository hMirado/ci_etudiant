$(document).ready(function () {

	$(document).on('change','#num_et_abs',function(){
		var num_et_abs = $(this).val();
		loadNom(num_et_abs);
	});

	$(document).on('change','#niveau_abs',function(){
		var niveau_abs = $(this).val();
		$('#matiere_abs').html('<option selected disabled>Séléctionner ici</option>');
		loadMat(niveau_abs);
	});

	/************************************      FUNCTION        ***************************************/

	/**
	 *  FONCTION POUR CHARGER LE NOM & PRENOM ETUDIANT
	 */
	function loadNom(num_et_abs) {
		$.ajax({
			url: base_url + "ajax/ajax_abs/nom",
			method: "POST",
			dataType: "json",
			data: {num_et_abs: num_et_abs},
			success: function (data) {
				data.forEach(function (value) {
					$nom = value.nom;
					$prenom = value.prenom;
					$nom_et_abs = $nom + ' ' + $prenom;
					$('#nom_et_abs').val($nom_et_abs);
				});
			},
			error: function (data) {
				alert(data);
			}
		});
	}


	/**
	 *  FONCTION POUR CHARGER LA MATIERE
	 */
	function loadMat(niveau_abs) {
		$.ajax({
			url: base_url + "ajax/ajax_matiere/matAbs",
			method: "POST",
			dataType: "json",
			data: {niveau_abs: niveau_abs},
			success: function (data) {
				//alert(data);
				data.forEach(function (value) {
					$('#matiere_abs').append('<option value="' + value.nom_mat + '">' + value.nom_mat + '</option>');
				});

			},
			error: function (data) {
				console.log(data);
			}
		});
	}
});
