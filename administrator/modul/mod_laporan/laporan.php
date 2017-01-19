<?php
//session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
	echo "<center>Untuk mengakses Modul, Anda Harus Login!<br />
	<a href='../../index.php'>LOGIN</a></center>";
}
else {
	$aksi="modul/mod_laporan/aksi_laporan.php";
	switch($_GET['act']){
	// Tampil Kategori
	default:
		echo "<h2>Laporan Komentar</h2>
		<table class='list'>
		<thead>
		<tr>
			<td class='left'>No.</td>
			<td>Nama</td>
			<td>Jenis Kelamin</td>
			<td>Alamat</td>
			<td>Kota</td>
			<td>Email</td>
			<td>Hapus</td>
		</tr></thead>";
		$tampil=mysql_query("SELECT * FROM comment ORDER BY id");
		$no=1;
		while($r=mysql_fetch_array($tampil)){
			echo "<tr>
					<td>$r[id]</td>
					<td>$r[nama]</td>
					<td>$r[email]</td>
					<td>$r[website]</td>
					<td>$r[date]</td>
					<td>$r[komentar]</td>
					<td width=50><a href=$aksi?module=laporan&act=hapuslaporan&id=$r[id]><img src='images/btn_delete.png' /></a></td></tr>";
			$no++;
		}
		echo "</table>";
	break;

	}
}
?>
	