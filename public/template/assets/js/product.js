$(document).on('click','#btn-edit', function(){

	$('.modal-body #id-produk').val($(this).data('id'));
	$('.modal-body #nama_product').val($(this).data('nama'));
	$('.modal-body #harga').val($(this).data('harga'));
	$('.modal-body #modified_date').val($(this).data('date'));
})