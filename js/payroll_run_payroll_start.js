var employeeIDs = [];
var employees = [];
var bonuses = [];
var approvedOvertimes = [];
var intensives = [];
var commissions = [];
var mobileTopups = [];
var deductions = [];
var totalPays = [];
var selectedIndex = 0;
var loadingBar;

$(document).ready(function() {
	let progress = 10;
	loadingBar = new ldBar("#loading-bar");
	employeeIDs = JSON.parse($("#employees-data").val().trim());
	let fd = new FormData();
	fd.append("ids", JSON.stringify(employeeIDs));
	fetch(PHP_URL+"/employer/get_employees_from_ids", {
		method: 'POST',
		body: fd
	})
		.then(response => response.text())
		.then(async (response) => {
			employees = JSON.parse(response);
			for (let i=0; i<employees.length; i++) {
				bonuses.push(0);
				approvedOvertimes.push(0);
				intensives.push(0);
				commissions.push(0);
				mobileTopups.push(0);
				deductions.push(0);
				totalPays.push(0);
			}
			for (let i=0; i<employees.length; i++) {
				let employee = employees[i];
				$("#employees").append("<tr>" +
					"                                        <th scope=\"row\">"+(i+1)+"</th>" +
					"                                        <td>"+employee['user']['first_name']+" "+employee['user']['last_name']+"</td>" +
					"                                        <td class='bonus'>"+bonuses[i]+"</td>" +
					"                                        <td class='overtime'>"+approvedOvertimes[i]+"</td>" +
					"                                        <td class='additional-earning'>"+(intensives[i]+commissions[i])+"</td>" +
					"                                        <td class='deduction'>"+deductions[i]+"</td>" +
					"                                        <td class='total-pays'>"+totalPays[i]+"</td>" +
					"                                        <td><button onclick='editAmount("+i+")' class='btn-shadow p-1 btn btn-primary btn-sm show-toastr-example'>Ubah</button></td>" +
					"                                    </tr>");
			}
		});
});

function editAmount(index) {
	selectedIndex = index;
	let bonus = bonuses[index];
	let overtime = approvedOvertimes[index];
	let intensive = intensives[index];
	let commission = commissions[index];
	let mobileTopup = mobileTopups[index];
	let deduction = deductions[index];
	$("#user-name").val(employees[index]['user']['first_name']+" "+employees[index]['user']['last_name']);
	$("#bonus").val(bonus);
	$("#overtime").val(overtime);
	$("#intensive").val(intensive);
	$("#commission").val(commission);
	$("#mobile-topup-allowance").val(mobileTopup);
	$("#absence-deduction").val(deduction);
	$("#edit-component").css("display", "flex").hide().fadeIn(300);
}

function saveComponent() {
	let bonus = $("#bonus").val().trim();
	let overtime = $("#overtime").val().trim();
	let intensive = $("#intensive").val().trim();
	let commission = $("#commission").val().trim();
	let mobileTopup = $("#mobile-topup-allowance").val().trim();
	let absenceDeduction = $("#absence-deduction").val().trim();
	if (bonus == "" || overtime == "" || intensive == "" || commission == "" || mobileTopup == "" || absenceDeduction == "") {
		alert("Mohon lengkapi data");
		return;
	}
	bonus = parseInt(bonus);
	overtime = parseInt(overtime);
	intensive = parseInt(intensive);
	commission = parseInt(commission);
	mobileTopup = parseInt(mobileTopup);
	absenceDeduction = parseInt(absenceDeduction);
	bonuses[selectedIndex] = bonus;
	approvedOvertimes[selectedIndex] = overtime;
	intensives[selectedIndex] = intensive;
	commissions[selectedIndex] = commission;
	mobileTopups[selectedIndex] = mobileTopup;
	deductions[selectedIndex] = absenceDeduction;
	let row = $("#employees tr").eq(selectedIndex);
	row.find(".bonus").html(bonus);
	row.find(".overtime").html(overtime);
	row.find(".additional-earning").html(intensive+commission);
	row.find(".deduction").html(absenceDeduction);
	row.find(".total-pays").html(bonus+overtime+intensive+commission+mobileTopup-absenceDeduction);
	$("#edit-component").fadeOut();
}

async function runPayroll() {
	loadingBar.set(0, false);
	$("#loading-bar-container").css("display", "flex").hide().fadeIn(300);
	$.each(employees, function(i) {
		var doc = new jsPDF();
		doc.text('SLIP GAJI KARYAWAN', 130, 10);
		doc.text("___________________", 130, 11);
		doc.setFontType("bold");
		doc.setFontSize(11);
		doc.text("ID", 10, 30);
		doc.text(":", 40, 30);
		doc.text(employee['id'], 50, 30);
		doc.text(employee['user']['first_name']+" "+employee['user']['last_name'], 60, 30);
		doc.text("___________________________________________", 10, 32);
		doc.text("Periode", 10, 40);
		doc.text(":", 40, 40);
		doc.text(moment([years[$("#years").prop('selectedIndex')], $("#months").prop('selectedIndex'), 1]).format('YYYYMM'), 50, 40);
		doc.text("Posisi", 10, 45);
		doc.text(":", 40, 45);
		doc.text(employee['job']['job_title'], 50, 45);
		doc.text("_________________________________________________________________________________", 10, 57);
		doc.text("_________________________________________________________________________________", 10, 65);
		doc.text("DATA ABSENSI", 20, 63);
		doc.text("PENDAPATAN", 80, 63);
		doc.text("POTONGAN", 140, 63);
		doc.setFontSize(8);
		doc.setFontType("normal");
		doc.text("Hari Masuk", 10, 73);
		doc.text("Hari Absen", 10, 78);
		doc.text("Sakit SKD", 10, 83);
		doc.text("Sakit Non SKD", 10, 88);
		doc.text("Ijin", 10, 93);
		doc.text("Ijin 2", 10, 98);
		doc.text("OT Hour", 10, 103);
		doc.text("Hari Cuti", 10, 108);
		doc.text("0", 50, 73);
		doc.text("0", 50, 78);
		doc.text("0", 50, 83);
		doc.text("0", 50, 88);
		doc.text("0", 50, 93);
		doc.text("0", 50, 98);
		doc.text("0", 50, 103);
		doc.text("0", 50, 108);
		doc.text("Lembur", 65, 73);
		doc.text("Gaji Pokok", 65, 78);
		doc.text("Tunjangan Jabatan", 65, 83);
		doc.text("Uang Makan", 65, 88);
		doc.text("Intensif Marketing", 65, 93);
		doc.text("Transport", 65, 98);
		doc.text("Tunjangan HP", 65, 103);
		doc.text("Bonus", 65, 108);
		doc.text("THR", 65, 113);
		doc.text("Uang Kerajinan", 65, 118);
		doc.text("0", 120, 73);
		doc.text("0", 120, 78);
		doc.text("0", 120, 83);
		doc.text("0", 120, 88);
		doc.text("0", 120, 93);
		doc.text("0", 120, 98);
		doc.text("0", 120, 103);
		doc.text("0", 120, 108);
		doc.text("0", 120, 113);
		doc.text("0", 120, 118);
		doc.text("____________________________________", 65, 123);
		doc.setFontStyle('bold');
		doc.text("Total Pendapatan", 65, 128);
		doc.text("0", 120, 128);
		doc.setFontStyle('normal');
		doc.text("Cicilan Pinjaman", 130, 73);
		doc.text("Potongan Jamsostek", 130, 78);
		doc.text("Potongan Absen", 130, 83);
		doc.text("Potongan Telat", 130, 88);
		doc.text("PPH21", 130, 93);
		doc.text("0", 175, 73);
		doc.text("0", 175, 78);
		doc.text("0", 175, 83);
		doc.text("0", 175, 88);
		doc.text("0", 175, 93);
		doc.text("____________________________________", 130, 123);
		doc.setFontStyle('bold');
		doc.text("Total Potongan", 130, 128);
		doc.text("0", 175, 128);
		doc.setFontSize(14);
		doc.text("Jumlah Gaji", 100, 140);
		doc.text("0", 150, 140);
		let fd = new FormData();
		fd.append("employee_id", employee['id']);
		fd.append("date", $("#date").val().trim());
		fd.append("salary_slip", btoa(doc.output()));
		fetch(API_URL+"/employer/send_salary_slip", {
			method: 'POST',
			body: fd
		})
			.then(response => response.text())
			.then(async (response) => {
				loadingBar.set(i*10, true);
			});
	}).promise().done(function() {
		$("#loading-bar-container").fadeOut(300);
		window.location.href = "http://0fcf2098e08f.ngrok.io/tafsirmimpi/payroll"
	});
}
