<?php
//session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
	echo "<center>Untuk mengakses Modul, Anda Harus Login!<br />
	<a href='../../index.php'>LOGIN</a></center>";
}
else {
	$aksi="modul/mod_hubungi/aksi_hubungi.php";
	switch($_GET['act']){
	// Tampil Kategori
	default:
		echo "<h2>Hubungi Kami</h2>
		<table class='list'>
		<thead>
		<tr>
			<td class='left'>No.</td>
			<td>Nama</td>
			<td>Email</td>
			<td>Pesan</td>
			<td>Hapus</td>
		</tr></thead>";
		$tampil=mysql_query("SELECT * FROM hub_kami ORDER BY kode_id");
		$no=1;
		while($r=mysql_fetch_array($tampil)){
			echo "<tr>
					<td>$r[kode_id]</td>
					<td>$r[nama]</td>
					<td>$r[email]</td>
					<td>$r[pesan]</td>
					<td width=50><a href=$aksi?module=hubungi&act=hapushubungi&id=$r[kode_id]><img src='images/btn_delete.png' /></a></td></tr>";
			$no++;
		}
		echo "</table>";
	break;

	}
}
?>
	