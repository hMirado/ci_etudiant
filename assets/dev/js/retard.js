$(document).ready(function () {

	$(document).on('change','#num_et_late',function(){
		var num_et_late = $(this).val();
		loadNom(num_et_late);
	});

	$(document).on('change','#niveau_late',function(){
		var niveau_late = $(this).val();
		$('#matiere_late').html('<option selected disabled>Séléctionner ici</option>');
		loadMat(niveau_late);
	});

	/************************************      FUNCTION        ***************************************/

	/**
	 *  FONCTION POUR CHARGER LE NOM & PRENOM ETUDIANT
	 */
	function loadNom(num_et_late) {
		$.ajax({
			url: base_url + "ajax/ajax_retard/nom",
			method: "POST",
			dataType: "json",
			data: {num_et_late: num_et_late},
			success: function (data) {
				//alert(data);
				data.forEach(function (value) {
					$nom = value.nom;
					$prenom = value.prenom;
					$nom_et_late = $nom + ' ' + $prenom;
					$('#nom_et_late').val($nom_et_late);
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
	function loadMat(niveau_late) {
		$.ajax({
			url: base_url + "ajax/ajax_matiere/matLate",
			method: "POST",
			dataType: "json",
			data: {niveau_late: niveau_late},
			success: function (data) {
				//alert(data);
				data.forEach(function (value) {
					$('#matiere_late').append('<option value="' + value.nom_mat + '">' + value.nom_mat + '</option>');
				});

			},
			error: function (data) {
				console.log(data);
			}
		});
	}
});
