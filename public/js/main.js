var $tanggalLahir = $('dd#tanggal_lahir');
var tanggalLahir = $tanggalLahir.text();
var date = new Date(tanggalLahir);

$tanggalLahir.text(date.toLocaleDateString());