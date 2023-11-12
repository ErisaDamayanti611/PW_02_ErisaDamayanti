<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>
 
	<h2> DATA MAHASISWA </h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="NIM" value="<?php echo $d['NIM']; ?>"></td>
				</tr>
				<tr>
					<td>no_tlp</td>
					<td><input type="text" name="no_tlp" value="<?php echo $d['no_tlp']; ?>"></td>
				</tr>
                <tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
                <tr>
					<td>Agama</td>
					<td><input type="text" name="agama" value="<?php echo $d['agama']; ?>"></td>
				</tr>
                <tr>
					<td>jenis_kelamin</td>
					<td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>