const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal({
		text: 'Berhasil ' + flashData,
		type: 'success'
	});
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
		title: 'Apakah anda yakin ?',
		text: "Data akan dihapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});

//--------------custom below
function handleClick() {
	var amountCorrect = 0;
	for (var i = 1; i <= 45; i++) {
		var radios = document.getElementsByName('group' + i);
		for (var j = 0; j < radios.length; j++) {
			var radio = radios[j];
			if (radio.value == "correct" && radio.checked) {
				amountCorrect++;
			}
		}
	}
	alert("Correct Responses: " + amountCorrect);
}

// batas
