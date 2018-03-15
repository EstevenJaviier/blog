$('.select-tag').chosen({
	max_selected_options: 3,
	placeholder_text_multiple: "Seleciona un maximo de 3 tag",
	no_results_text: "Vaya, no se ha encontrado!"
});

$(".select-category").chosen({
	no_results_text: "Vaya, no se ha encontrado!"
});

$('#editor').trumbowyg({
	fullscreenable: false,
	lang: 'es'
});

$("#input-id").fileinput({
	'showUpload':false, 'previewFileType':'any'
});