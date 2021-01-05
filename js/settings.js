$(document).ready(function() {
	$.ajax({
		type: 'GET',
		url: PHP_URL+"/admin/get_settings",
		dataType: 'text',
		cache: false,
		success: function(response) {
			var settings = JSON.parse(response);
			$("#about").val(settings['about']);
			$("#share").val(settings['share_text']);
			$("#prediction-2d-link").val(settings['prediction_2d_link']);
			$("#prediction-4d-1-name").val(settings['prediction_4d_1_name']);
			$("#prediction-4d-1-link").val(settings['prediction_4d_1_link']);
			$("#prediction-4d-2-name").val(settings['prediction_4d_2_name']);
			$("#prediction-4d-2-link").val(settings['prediction_4d_2_link']);
		}
	});
});

function save() {
	var about = $("#about").val().trim();
	var shareText = $("#share").val().trim();
	var prediction2DLink = $("#prediction-2d-link").val().trim();
	var prediction4D1Name = $("#prediction-4d-1-name").val().trim();
	var prediction4D1Link = $("#prediction-4d-1-link").val().trim();
	var prediction4D2Name = $("#prediction-4d-2-name").val().trim();
	var prediction4D2Link = $("#prediction-4d-2-link").val().trim();
	let fd = new FormData();
	fd.append("about", about);
	fd.append("share_text", shareText);
	fd.append("prediction_2d_link", prediction2DLink);
	fd.append("prediction_4d_1_name", prediction4D1Name);
	fd.append("prediction_4d_1_link", prediction4D1Link);
	fd.append("prediction_4d_2_name", prediction4D2Name);
	fd.append("prediction_4d_2_link", prediction4D2Link);
	$.ajax({
		type: 'POST',
		url: PHP_URL+"/admin/update_settings",
		data: fd,
		processData: false,
		contentType: false,
		cache: false,
		success: function(response) {
			window.location.href = "http://0fcf2098e08f.ngrok.io/tafsirmimpi/settings";
		}
	});
}

function cancel() {
	if (confirm("Apakah Anda yakin ingin membatalkan perubahan?")) {
		window.location.href='http://0fcf2098e08f.ngrok.io/tafsirmimpi/settings';
	}
}
