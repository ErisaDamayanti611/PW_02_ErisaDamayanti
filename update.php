<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$NIM = $_POST['NIM'];
$no_tlp = $_POST['no_tlp'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', NIM='$NIM', no_tlp='$no_tlp', alamat='$alamat', agama='$agama', jenis_kelamin='$jenis_kelamin' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>