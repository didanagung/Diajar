// jika menemukan $ lalu kurung didalamnya ada keyword berarti itu memanggil jquery
$(document).ready(function() {

	// hilangkan tombol cari
	$('#tombol-cari').hide();
	
	// event ketika keyword ditulis
	$('#keyword').on('keyup', function() {
		// munculkan icon loading
		$('.loader').show();

		// $('#container').load('ajax/hape.php?keyword=' + $('#keyword').val());

		// $.get()
		$.get('ajax/hape.php?keyword=' + $('#keyword').val(), function(data) {

			$('#container').html(data);
			$('.loader').hide();

		});
	});

});