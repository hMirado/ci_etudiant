$(document).ready(function () {

	$(document).on('change','#niveau_late',function(){
		var niveau_late = $(this).val();
		$('#matiere_late').html('<option selected disabled>Séléctionner ici</option>');
		loadMat(niveau_late);
	});

	/************************************      FUNCTION        ***************************************/

	function loadMat(niveau_late) {
		$.ajax({
			url: base_url + "ajax/ajax_matiere/mat",
			method: "POST",
			dataType: "json",
			data: {niveau_late: niveau_late},
			success: function (data) {
				console.log(data);
				data.forEach(function (value) {
					$('#matiere_late').append('<option value="' + value.nom_mat + '">' + value.nom_mat + '</option>');
				});

			},
			error: function () {
				console.log(data);
			}
		});
	}

});
