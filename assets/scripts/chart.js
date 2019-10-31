$(document).ready(function () {

	//Dynamic Button
	var i = 1;
	// $('#add').click(function () {
	// 	i++;
	// 	$('#dynamic_field').append('<tr id="row' + i + '" class="mt-2"><td>'+ i +'. </td><td><input type="text" name="pertanyaan[]" placeholder="Masukkan Pertanyaan" class="form-control name_list" required/><div class="row mt-2"><div class="col-3"><input type="text" name="opsi_1" placeholder="Opsi" class="form-control name_list" required/></div><div class="col-3"><input type="text" name="opsi_2" placeholder="Opsi" class="form-control name_list" required/></div><div class="col-3"><input type="text" name="opsi_3" placeholder="Opsi" class="form-control name_list" required/></div><div class="col-3"><input type="text" name="opsi_4" placeholder="Opsi" class="form-control name_list" required/></div></div></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
	// });


	$('#add').click(function () {
		i++;
		$('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="pertanyaan[]" placeholder="Masukkan Pertanyaan" class="form-control name_list" required/></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
	});

	$('#addPertanyaanGuru').click(function () {
		i++;
		$('#dynamicPertanyaanGuru').append('<tr id="row' + i + '"><td><input type="text" name="pertanyaan[]" placeholder="Masukkan Pertanyaan" class="form-control name_list" required/></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
	});

	$('#addSiswa').click(function () {
		i++;
		$('#dynamicSiswa').append('<tr id="row' + i + '"><td><label for="">' + i + '. </label><input type="text" name="siswa[]" placeholder="Nama Siswa" class="form-control name_list col-4 d-inline-block" /><input type="number" name="nipd[]" placeholder="NIPD" class="form-control name_list col-2 d-inline-block" /><input type="text" name="namaIbu[]" placeholder="Nama Ibu" class="form-control name_list col-4 d-inline-block" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
	});

	$(document).on('click', '.btn_remove', function () {
		var button_id = $(this).attr("id");
		$('#row' + button_id + '').remove();
	});





	//CHART KEGIATAN
	var sb = document.getElementById('sb').innerHTML;
	var b = document.getElementById('b').innerHTML;
	var c = document.getElementById('c').innerHTML;
	var k = document.getElementById('k').innerHTML;

	var ctx = document.getElementById('kegiatan').getContext('2d');
	var chart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'],
			datasets: [{
				label: 'Grafik Kepuasan',
				backgroundColor: '#16AAFF',
				data: [sb, b, c, k],
				pointBackgroundColor: ['#16AAFF', '#16AAFF', '#F7B924', '#D92550']
			}]
		},
		options: {}
	});








});


//-------------------------------------------------------------------------------------> End of Survei Kegiatan
