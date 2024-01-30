<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
// ambil data dari formulir
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah_asal'];
$tgl = $_POST['tanggal_lahir'];
$no = $_POST['no_tel'];
$email = $_POST['email'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$kode = $_POST['kode_pos'];
// buat query
$sql = "INSERT INTO pendaftaran1 (nama, alamat, jenis_kelamin, agama, sekolah_asal, tanggal_lahir, no_tel, email, desa, kecamatan, kota, provinsi, kode_pos) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah', '$tgl', '$no', '$email', '$desa', '$kecamatan', '$kota', '$provinsi','$kode')"; $query = mysqli_query($db, $sql);
// apakah query simpan berhasil?
if($query) {
// kalau berhasil alihkan ke halaman index.php dengan status=sukses 
header('Location: index.php?status=sukses');
} else {
// kalau gagal alihkan ke halaman indek.php dengan status-gagal 
header('Location: index.php?status=gagal');
} 
}else {
die("Akses dilarang...");
}
?>