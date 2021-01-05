var images = [];

$(document).ready(function() {
	$("#select-zip").on("change", function() {
		var file = this.files[0];
		let fd = new FormData();
		fd.append("file", file);
		fetch(PHP_URL+"/admin/upload_number_2a_images", {
			method: 'POST',
			body: fd
		})
			.then(response => response.text())
			.then(async (response) => {
				getImages();
			});
	});
	getImages();
});

function getImages() {
	$("#images").find("*").remove();
	fetch(PHP_URL+"/admin/get_number_2a_images")
		.then(response => response.text())
		.then(async (response) => {
			images = JSON.parse(response);
			for (let i=0; i<images.length; i++) {
				let image = images[i];
				$("#images").append("<tr>\n" +
					"\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">"+(i+1)+"</th>\n" +
					"\t\t\t\t\t\t\t\t\t\t<td><img src='"+USERDATA_URL+"tafsir/2a/"+image['image']+"' width='100' height='100' style='cursor: pointer;' onclick='viewImage("+i+")'></td>\n" +
					"\t\t\t\t\t\t\t\t\t\t<td>"+image['number']+"</td>\n" +
					"\t\t\t\t\t\t\t\t\t\t<td><button onclick='changeImage("+i+")' type=\"button\" class=\"btn btn-primary\">Ubah</button></td>\n" +
					"\t\t\t\t\t\t\t\t\t\t<td><button onclick='deleteImage("+i+")' type=\"button\" class=\"btn btn-danger\">Hapus</button></td>\n" +
					"\t\t\t\t\t\t\t\t\t</tr>");
			}
		});
}

function viewImage(index) {
	$.redirect(PHP_URL+"/image/view", {
		'img_url': USERDATA_URL+"tafsir/2a/"+images[index]['image']
	}, 'POST', '_blank');
}

function upload() {
	$("#select-zip").click();
}
