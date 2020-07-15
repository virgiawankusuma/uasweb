const berhasil = $('.berhasil').data('berhasil');
if (berhasil) {
	Swal.fire({
		icon: 'success',
		title: 'Berhasil...',
		text: 'Data berhasil ' + berhasil + '!'
	});
}

const gagal = $('.gagal').data('gagal');
if (gagal) {
	Swal.fire({
		icon: 'error',
		title: 'Error...',
		html: 'Data ' + gagal + '!'
	});
}

const logout = $('.logout').data('logout');
if (logout) {
	Swal.fire({
	  icon: 'warning',
	  title: logout + ' !',
	  showConfirmButton: false,
	  timer: 2000
	})
}

const validlogin = $('.validlogin').data('validlogin');
if (validlogin) {
	Swal.fire({
	  icon: 'error',
	  title: validlogin,
	  showConfirmButton: false,
	  timer: 2000
	})
}

// tombol hapus
$('.tombol-hapus').on('click', function (e){

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
	  title: 'Apakah anda yakin?',
	  text: "Data akan dihapus!",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya, hapus data!'
	}).then((result) => {
	  if (result.value) {
	  	document.location.href = href;
	  }
	})

});
