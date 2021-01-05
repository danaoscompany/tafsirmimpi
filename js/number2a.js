$(document).ready(function() {
	$("#select-xls").on('change', function(e) {
		var file = this.files[0];
		var fr = new FileReader();
		fr.onload = function(e) {
			let data = e.target.result;
			data = data.substr(data.indexOf(",")+1, data.length);
			var workbook = XLSX.read(data, {'type': 'base64'});
			var sheet = XLSX.utils.sheet_to_json(workbook.Sheets[workbook.SheetNames[0]]);
			// {"30":"10","60":"28","80":"60","91":"53","99":"82","A R J U N A":"A S  I","00":"00","BULAN":"KUMBO  KARNO"}
			let jsonData = [];
			$("#numbers").find("*").remove();
			if (sheet.length > 0) {
				let keys = Object.keys(sheet[0]);
				jsonData.push({
					'keyword_1': keys[5],
					'keyword_2': keys[7],
					'number_1': keys[4],
					'number_2': keys[3],
					'number_3': keys[0],
					'number_4': keys[1],
					'number_5': keys[2]
				});
				jsonData.push({
					'keyword_1': sheet[0][keys[5]],
					'keyword_2': sheet[0][keys[7]],
					'number_1': sheet[0][keys[4]],
					'number_2': sheet[0][keys[3]],
					'number_3': sheet[0][keys[0]],
					'number_4': sheet[0][keys[1]],
					'number_5': sheet[0][keys[2]]
				});
			}
			for (let i=1; i<sheet.length; i++) {
				let keys = Object.keys(sheet[i]);
				jsonData.push({
					'keyword_1': sheet[i][keys[5]],
					'keyword_2': sheet[i][keys[7]],
					'number_1': sheet[i][keys[4]],
					'number_2': sheet[i][keys[3]],
					'number_3': sheet[i][keys[0]],
					'number_4': sheet[i][keys[1]],
					'number_5': sheet[i][keys[2]]
				});
			}
			let fd = new FormData();
			fd.append("data", JSON.stringify(jsonData));
			fetch(PHP_URL+"/admin/upload_numbers_2a", {
				method: 'POST',
				body: fd
			})
				.then(response => response.text())
				.then(async (response) => {
					getData();
				});
		};
		fr.readAsDataURL(file);
	});
	getData();
});

async function getData() {
	$("#numbers").find("*").remove();
	fetch(PHP_URL+"/admin/get_numbers_2a")
		.then(response => response.text())
		.then(async (response) => {
			let data = JSON.parse(response);
			for (let i=0; i<data.length; i++) {
				$("#numbers").append("<tr>\n" +
					"\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">"+(i+1)+"</th>\n" +
					"\t\t\t\t\t\t\t\t\t\t<td><input name='keyword_1-"+data[i]['id']+"' id='keyword_1-"+data[i]['id']+"' placeholder='Masukkan kata kunci' type='text' class='form-control' value='"+data[i]['keyword_1']+"'></td>\n" +
					"\t\t\t\t\t\t\t\t\t\t<td><input name='number_1-"+data[i]['id']+"' id='number_1-"+data[i]['id']+"' placeholder='Masukkan kata kunci' type='text' class='form-control' value='"+data[i]['number_1']+"'></td>\n" +
					"\t\t\t\t\t\t\t\t\t\t<td><input name='number_2-"+data[i]['id']+"' id='number_2-"+data[i]['id']+"' placeholder='Masukkan kata kunci' type='text' class='form-control' value='"+data[i]['number_2']+"'></td>\n" +
					"\t\t\t\t\t\t\t\t\t\t<td><input name='number_3-"+data[i]['id']+"' id='number_3-"+data[i]['id']+"' placeholder='Masukkan kata kunci' type='text' class='form-control' value='"+data[i]['number_3']+"'></td>\n" +
					"\t\t\t\t\t\t\t\t\t\t<td><input name='number_4-"+data[i]['id']+"' id='number_4-"+data[i]['id']+"' placeholder='Masukkan kata kunci' type='text' class='form-control' value='"+data[i]['number_4']+"'></td>\n" +
					"\t\t\t\t\t\t\t\t\t\t<td><input name='number_5-"+data[i]['id']+"' id='number_5-"+data[i]['id']+"' placeholder='Masukkan kata kunci' type='text' class='form-control' value='"+data[i]['number_5']+"'></td>\n" +
					"\t\t\t\t\t\t\t\t\t\t<td><button class='mt-2 btn btn-primary' onclick='saveData("+data[i]['id']+")'>Simpan</button></td>\n" +
					"\t\t\t\t\t\t\t\t\t\t<td><button class='mt-2 btn btn-danger' onclick='deleteData("+i+", "+data[i]['id']+")'>Hapus</button></td>\n" +
					"\t\t\t\t\t\t\t\t\t</tr>");
			}
		});
}

function saveData(id) {
	let keyword1 = $("#keyword_1-"+id).val().trim();
	let number1 = $("#number_1-"+id).val().trim();
	let number2 = $("#number_2-"+id).val().trim();
	let number3 = $("#number_3-"+id).val().trim();
	let number4 = $("#number_4-"+id).val().trim();
	let number5 = $("#number_5-"+id).val().trim();
	let fd = new FormData();
	fd.append("id", id);
	fd.append("keyword_1", keyword1);
	fd.append("number_1", number1);
	fd.append("number_2", number2);
	fd.append("number_3", number3);
	fd.append("number_4", number4);
	fd.append("number_5", number5);
	fetch(PHP_URL+"/admin/save_numbers_2a", {
		method: 'POST',
		body: fd
	})
		.then(response => response.text())
		.then(async (response) => {
			alert("Nomor berhasil disimpan!");
		});
}

function deleteData(index, id) {
	if (confirm("Apakah Anda yakin ingin menghapus data berikut?")) {
		let fd = new FormData();
		fd.append("id", id);
		fetch(PHP_URL+"/admin/delete_numbers_2a", {
			method: 'POST',
			body: fd
		})
			.then(response => response.text())
			.then(async (response) => {
				getData();
			});
	}
}

function upload() {
	$("#select-xls").click();
}
