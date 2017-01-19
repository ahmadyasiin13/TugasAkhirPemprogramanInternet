<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_upload/aksi_upload.php";
switch($_GET['act']){
  // Tampil Upload
  default:
    echo "<h2>Upload</h2>
          <input type=button value='Tambah Upload' onclick=location.href='?module=upload&act=tambahupload'>
          <input type=button value='Tambah File' onclick=location.href='modul/mod_upload/Upload/upload.php'>
          <table class='list'>
          <tr><th>no</th><th>judul</th><th>deskripsi</th><th>kategori</th><th>url</th><th>tgl</th><th>aksi</th></tr>";

    $p      = new Paging;
    $batas  = 15;
    $posisi = $p->cariPosisi($batas);

    $tampil=mysql_query("SELECT * FROM upload ORDER BY id ");

    $no = $posisi+1;
    while ($r=mysql_fetch_array($tampil)){
      echo "<tr><td>$no</td>
                <td>$r[judul]</td>
                <td>$r[deskripsi]</td>
                <td>$r[kategori]</td>
                <td>$r[url]</td>
                <td>$r[tgl]</td>
                <td><a href=?module=upload&act=editupload&id=$r[id]>Edit</a> | 
	                  <a href=$aksi?module=upload&act=hapus&id=$r[id]>Hapus</a>
		        </tr>";
    $no++;
    }
    echo "</table>";
     
    break;
  
  case "tambahupload":
    echo "<h2>Tambah Upload</h2>
          <form method=POST action='$aksi?module=upload&act=input'>
          <table>
          <tr><td>Judul</td><td>  : <input type=text name='judul' size=30></td></tr>
          <tr><td>Deskripsi</td><td>  : <input type=text name='deskripsi' size=30></td></tr>
          <tr><td>Kategori</td><td>  : <input type=text name='kategori' size=30></td></tr>
          <tr><td>Url</td><td>  : <input type=text name='url' size=30></td></tr>
          <tr><td>Tanggal</td><td>  : <input type=date name='tgl' size=30></td></tr>
          <tr><td colspan=2><input type=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form><br><br><br>";
     break;

/*
    case "tambahfile":
    echo "<h2>Tambah Upload</h2>
          <form method=POST action='$aksi?module=upload&act=inputfile'>
          <table>
          <tr> <td colspan=2 height=2 class='title'>Form Upload File</td></tr>
          <tr><td width=100>File</td>
              <td><input type=file name='data_upload' /></td>
          </tr>
          <tr>
              <td width=100 valign='top' >Keterangan</td>
              <td><textarea name='keterangan' cols=30 rows=3></textarea></td>
          </tr>
          <tr><td colspan=2><input type=submit name='btnUpload' value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form><br><br><br>";
     break;*/

  case "editupload":
    $edit = mysql_query("SELECT * FROM upload WHERE id='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit Upload</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=upload&act=update>
          <input type=hidden name=id value=$r[id]>
          <table>
          <tr><td>Judul</td><td>     : <input type=text name='judul' size=30 value='$r[judul]'></td></tr>
          <tr><td>Deskripsi</td><td>    : <input type=text name='deskripsi' size=30 value='$r[deskripsi]'></td></tr>
          <tr><td>Kategori</td><td>    : <input type=text name='kategori' size=30 value='$r[kategori]'></td></tr>
          <tr><td>Url</td><td>    : <input type=text name='url' size=30 value='$r[url]'></td></tr>
          <tr><td>Tanggal</td><td>    : <input type=date name='tgl' size=30 value='$r[tgl]'></td></tr>

          <tr><td colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
    break;  
}
}
?>