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
