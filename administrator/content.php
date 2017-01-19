<?php
include "../config/koneksi.php";
include "../config/library.php";
include "../config/fungsi_indotgl.php";
include "../config/class_paging.php";


// Bagian Home
if ($_GET['module']=='home'){
if ($_SESSION['leveluser']=='admin'){
	$jam=date("H:i:s");
	$tgl=tgl_indo(date("Y m d")); 
	echo "<br /><p align=center>Hai <b>$_SESSION[namalengkap]</b>, Anda Login sebagai Admin. 
			  Silahkan klik menu pilihan yang berada di bagian Navigasi untuk mengelola Modul Aplikasi. <br /> <b>$hari_ini, $tgl, $jam </b>WIB</p><br />";
	echo "<table class='list'>
	<thead>
	<tr><td class='center' colspan=5><center>Control Panel</center></td></tr>
	</thead>
	<tr>
		  <td width=120 align='center'><a href='media.php?module=password'><img src='images/password.png' border='none' /><br /><b>Ganti Password</b></a></td>

		  <td width=120 align='center'><a href='media.php?module=profil'><img src='images/toko.png' border='none' /><br /><b>Profil Web</b></a></td>
		  
		  <td width=120 align='center'><a href='media.php?module=kategori'><img src='images/kategori.png' border='none' /><br /><b>Kategori Tutorial</b></a></td>
	</tr>
	<tr>
		  
		  <td width=120 align='center'><a href='media.php?module=laporan'><img src='images/laporan.png' border='none' /><br /><b>Laporan Komentar</b></a></td>
		  
		  <td width=120 align='center'><a href='media.php?module=hubungi'><img src='images/hubungikami.png' border='none' /><br /><b>Hubungi Kami</b></a></td>
		  
		  <td width=120 align='center'><a href='media.php?module=bukutamu'><img src='images/modul.png' border=none /><br /><b>Buku Tamu</b></a></td>
	</tr>
	<tr>
		  <td width=120 align='center'><a href='media.php?module=ym'><img src='images/yahoo.png' border='none' /><br /><b>Modul YM</b></a></td>
		  
		  <td width=120 align='center'><a href='media.php?module=upload'><img src='images/upload.png' border='none' /><br /><b>Daftar Upload</b></a></td>
		  
		  <td width=120 align='center'><a href='media.php?module=link'><img src='images/link.png' border='none' /><br /><b>Link Terkait</b></a></td>
	</tr>
	</table>";
	}
}
  
// Modul Password
elseif ($_GET['module']=='password'){
	if ($_SESSION['leveluser']=='admin'){
		include "modul/mod_password/password.php";
	}
}

elseif ($_GET['module']=='kategori'){
	if ($_SESSION['leveluser']=='admin'){
		include "modul/mod_kategori/kategori.php";
	}
} 
elseif ($_GET['module']=='profil'){
	if ($_SESSION['leveluser']=='admin'){
		include "modul/mod_profil/profil.php";
	}
}
elseif ($_GET['module']=='link'){
	if ($_SESSION['leveluser']=='admin'){
		include "modul/mod_link/link_terkait.php";
	}
}
// elseif ($_GET['module']=='ym'){
// 	if ($_SESSION['leveluser']=='admin'){
// 		include "modul/mod_ym/ym.php";
// 	}
// }
elseif ($_GET['module']=='upload'){
	if ($_SESSION['leveluser']=='admin'){
		include "modul/mod_upload/upload.php";
	}
}
elseif ($_GET['module']=='bukutamu'){
	if ($_SESSION['leveluser']=='admin'){
		include "modul/mod_bukutamu/bukutamu.php";
	}
}
elseif ($_GET['module']=='hubungi'){
	if ($_SESSION['leveluser']=='admin'){
		include "modul/mod_hubungi/hubungi.php";
	}
}
elseif ($_GET['module']=='laporan'){
	if ($_SESSION['leveluser']=='admin'){
		include "modul/mod_laporan/laporan.php";
	}
}
else{
	echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
