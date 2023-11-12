<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi </title>
</head>
<body>
 
	<h2> DATA MAHASISWA</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
            <th>no_tlp</th>
			<th>Alamat</th>
            <th>agama</th>
            <th>jenis_kelamin</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['NIM']; ?></td>
                <td><?php echo $d['no_tlp']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['agama']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
