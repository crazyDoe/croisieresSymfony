$(document).ready(function() {

	// Formulaire d'ajout d'une valeur à un attribut
	$('#attribut-form-add').submit(function() {
		var attributeId = $(this).data('idatt');
		var attributeVal = $('#attribut-add-input').val();

		console.log(attributeVal);
		$.post("{{path('ideale_copieback_office_ajoutValeur')}}", { id: attributeId, val: attributeVal }, function(data) {
			console.log(data);

			if (data.success) {
				console.log('ok');
			}
			else {
				console.log('not ok');
			}

		}, 'json');

		return false;
	})


});