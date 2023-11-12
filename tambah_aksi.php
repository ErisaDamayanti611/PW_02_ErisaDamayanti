<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$no_tlp = $_POST['no.tlp'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis kelamin'];
 
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nim','$no_tlp','$alamat','$agama','$jenis_kelamin')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>