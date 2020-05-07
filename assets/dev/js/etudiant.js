$(document).ready(function(){

	// Modifier étudiant
	$(document).on('click','#edit_et',function(event){
		event.preventDefault();
		$('#et_modif').modal({backdrop:'static'});
		var id = $(this).data('id');
		get_data_modif(id);
	});

	$(document).on("click","#save_modif_et",function(event){
		event.preventDefault();
		updateEtudiant();
	});


	$(document).on('change','#niveau_note',function(){
		var niveau_note = $(this).val();
		$('#matiere_note').html('<option selected disabled>Séléctionner ici</option>');
		loadMat(niveau_note);
	});

//=========================================== FUNCTION ======================================

	// Modifier étudiant
	function get_data_modif(id){
		$.ajax({
			url : base_url + "ajax/ajax_etudiant/data",
			method : "POST",
			data: {num: id},
			dataType : "json",
			success: function(response){
				console.log(response);
				showData(response);
			},
			error: function(){
				alert("Erreur!");
			}
		});
	}

	function showData(data){
		$('#nom_modifier').val(data.nom);
		$('#prenom_modifier').val(data.prenom);
		$('#date_naissance_modifier').val(data.date_naissance);
		$('#adresse_modifier').val(data.adresse);
		$('#identifiant_modifier').val(data.identifiant);
		$('#id_et_modif').val(data.id);
	}

	function updateEtudiant(){
		var data = $('#m_form').serialize();
		$.ajax({
			url: base_url + "ajax/ajax_etudiant/update",
			method: "POST",
			data: data,
			dataType: 'json',
			success: function (response) {
				if(response.status == true){
					location.reload(true);
				}
			},
			error: function (response) {
				alert(response);
			}
		});
	}

	/**
	 *  FONCTION POUR CHARGER LA MATIERE POUR NOTE
	 */
	function loadMat(niveau_note) {
		$.ajax({
			url: base_url + "ajax/ajax_matiere/matNote",
			method: "POST",
			dataType: "json",
			data: {niveau_note: niveau_note},
			success: function (data) {
				//alert(data);
				data.forEach(function (value) {
					$('#matiere_note').append('<option value="' + value.nom_mat + '">' + value.nom_mat + '</option>');
				});

			},
			error: function (data) {
				console.log(data);
			}
		});
	}
});

