<?php
//session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
	echo "<center>Untuk mengakses Modul, Anda Harus Login!<br />
	<a href='../../index.php'>LOGIN</a></center>";
}
else {
	$aksi="modul/mod_kategori/aksi_kategori.php";
	switch($_GET['act']){
	// Tampil Kategori
	default:
		echo "<h2>Kategori</h2>
		<input type='button' value='Tambah Kategori' onclick=\"window.location.href='?module=kategori&act=tambahkategori';\">
		<table class='list'>
		<thead>
		<tr>
			<td class='left' width='25'>No.</td>
			<td>Nama Kategori</td>
			<td>Upload</td>
			<td>Download</td>
			<td>Edit</td>
			<td>Hapus</td>
		</tr></thead>";
		$tampil=mysql_query("SELECT * FROM kategori ORDER BY id_kategori DESC");
		$no=1;
		while($r=mysql_fetch_array($tampil)){
			echo "<tr><td class='left'>$no</td>
					<td>$r[nama_kategori]</td>
					<td>$r[upload]</td>
					<td>$r[download]</td>
					<td width=50><a href=?module=kategori&act=editkategori&id=$r[id_kategori]><img src='images/btn_edit.png' /></a></td>
					<td width=50><a href=$aksi?module=kategori&act=hapus&id=$r[id_kategori]><img src='images/btn_delete.png' /></a></td></tr>";
			$no++;
		}
		echo "</table>";
	break;

	// Form Tambah Kategori
	case "tambahkategori":
		echo "<h2>Tambah Kategori</h2>
		<form method='POST' action='$aksi?module=kategori&act=input'>
		<table class='list'>
		<tr>
			<td>Nama Kategori</td>
			<td> : <input type='text' name='nama_kategori' /></td>
		</tr>
		<tr>
			<td colspan=2>
				<input type='submit' name='submit' value='Simpan' /> &nbsp;
				<input type='button' value='Batal' onclick=self.history.back()>
			</td>
		</tr>
		</table>
		</form>";
	break;
		
	// Form Edit Kategori
	case "editkategori":
		$edit=mysql_query("SELECT * from kategori WHERE id_kategori='$_GET[id]'");
		$r=mysql_fetch_array($edit);
		
		echo "<h2>Edit Kategori</h2>
		<form method='POST' action=$aksi?module=kategori&act=update>
		<input type='hidden' name='id' value='$r[id_kategori]'>
		<table class='list'>
		<tr>
			<td>Nama Kategori</td>
			<td> : <input type='text' name='nama_kategori' value='$r[nama_kategori]' /></td>
		</tr>
		<tr>
			<td colspan=2>
				<input type='submit' name='update' value='Update' />&nbsp;
				<input type='button' value='Batal' onclick=self.history.back() />
			</td>
		</tr>
		</table>
		</form>";
	break;
	}
}
?>
	