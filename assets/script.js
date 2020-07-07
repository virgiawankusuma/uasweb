const flashdata = $('.flash-data').data('flashdata');
if (flashdata) {
	Swal.fire({
		icon: 'success',
		title: 'Berhasil...',
		customClass: 'swal-container',
		text: 'Data berhasil ' + flashdata + '!'
	});
}

const gagal = $('.gagal').data('gagal');
if (gagal) {
	Swal.fire({
		icon: 'error',
		title: 'Gagal...',
		customClass: 'swal-container',
		html: 'Data gagal ' + gagal + '<span style="color:blue"> Coba pilih kecamatan lain!</span>'
	});
}

const logout = $('.logout').data('logout');
if (logout) {
	Swal.fire({
	  icon: 'warning',
	  title: logout + ' !',
	  showConfirmButton: false,
	  customClass: 'swal-container',
	  timer: 2000
	})
}

const validlogin = $('.validlogin').data('validlogin');
if (validlogin) {
	Swal.fire({
	  icon: 'error',
	  title: validlogin,
	  showConfirmButton: false,
	  customClass: 'swal-container',
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
	  customClass: 'swal-container',
	  confirmButtonText: 'Ya, hapus data!'
	}).then((result) => {
	  if (result.value) {
	  	document.location.href = href;
	  }
	})

});