$(document).on("click", ".edit", function () {
	var nama = $(this).data('nama');
	var id_guru = $(this).data('id_guru');
	var ampuan = $(this).data('ampuan');
	$(".modal-body #nama").val(nama);
	$("#id_guru").val(id_guru);
	$("#kelas_lama").val(ampuan);
	// As pointed out in comments, 
	// it is unnecessary to have to manually call the modal.
	// $('#addBookDialog').modal('show');
});

$(document).on("click", ".user", function () {
	var nama = $(this).data('nama');
	var nipd = $(this).data('nipd');
	var ibu = $(this).data('ibu');
	var kelas = $(this).data('kelas');
	var id = $(this).data('id');
	$(".modal-body #nama").val(nama);
	$("#nipd").val(nipd);
	$("#ibu").val(ibu);
	$("#kelas").val(kelas);
	$("#ids").val(id);
	// As pointed out in comments, 
	// it is unnecessary to have to manually call the modal.
	// $('#addBookDialog').modal('show');
});

$(document).on("click", ".nonRegis", function () {
	var nama = $(this).data('nama');
	var nipd = $(this).data('nipd');
	var ibu = $(this).data('ibu');
	var kelas = $(this).data('kelas');
	var id = $(this).data('id');
	$(".modal-body #nama_n").val(nama);
	$("#nipd_n").val(nipd);
	$("#ibu_n").val(ibu);
	$("#kelas_n").val(kelas);
	$("#idn").val(id);
	// As pointed out in comments, 
	// it is unnecessary to have to manually call the modal.
	// $('#addBookDialog').modal('show');
});
