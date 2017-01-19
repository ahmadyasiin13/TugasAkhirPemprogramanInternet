<?php
//session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
	echo "<center>Untuk mengakses Modul, Anda Harus Login!<br />
	<a href='../../index.php'>LOGIN</a></center>";
}
else {
	$aksi="modul/mod_bukutamu/aksi_bukutamu.php";
	switch($_GET['act']){
	// Tampil Kategori
	default:
		echo "<h2>Buku Tamu</h2>
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
		$tampil=mysql_query("SELECT * FROM buku_tamu ORDER BY no_tamu");
		$no=1;
		while($r=mysql_fetch_array($tampil)){
			echo "<tr>
					<td>$r[no_tamu]</td>
					<td>$r[nama]</td>
					<td>$r[kelamin]</td>
					<td>$r[alamat]</td>
					<td>$r[kota]</td>
					<td width='250'>$r[email]</td>
					<td width=50><a href=$aksi?module=bukutamu&act=hapusbukutamu&id=$r[no_tamu]><img src='images/btn_delete.png' /></a></td></tr>";
			$no++;
		}
		echo "</table>";
	break;

	}
}
?>
	