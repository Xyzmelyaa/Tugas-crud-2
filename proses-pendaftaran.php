<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
// ambil data dari formulir
$nama = $_POST['nama_guru'];
$jk = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no = $_POST['no_telepon'];
$email = $_POST['email'];
// buat query
$sql = "INSERT INTO daftar (nama_guru,  jenis_kelamin, alamat, no_telepon, email) VALUES
 ('$nama', '$jk', '$alamat', '$no', '$email')"; $query = mysqli_query($db, $sql);
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