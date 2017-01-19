<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";
include "../../../config/library.php";
include "../../../config/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];
$id=$_POST['id'];

// Hapus
if ($module=='upload' AND $act=='hapus'){
  mysql_query("DELETE FROM upload WHERE id='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

// Update 
elseif ($module=='upload' AND $act=='update'){
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	$kategori = $_POST['kategori'];
	$url = $_POST['url'];
	$tgl = $_POST['tgl'];
	mysql_query("UPDATE upload SET judul='$judul', deskripsi='$deskripsi', kategori='$kategori', url='$url', tgl='$tgl' WHERE id='$_POST[id]'");
  header('location:../../media.php?module='.$module);
}

// Input file 
/*elseif ($module=='upload' AND $act=='inputfile'){
		
		//Folder tujuan upload file
	
		
		//Buat konfigurasi upload
//Folder tujuan upload file
$eror       = false;
$folder     = 'C:/xampp/htdocs/UAS2/Tugas Akhir Pi/file_upload/';
//type file yang bisa diupload
 $file_type  = array('jpg','jpeg','png','docx','xls','xlsx','rar','zip');
//tukuran maximum file yang dapat diupload
$max_size   = 5000000; // 5MB
if(isset($_POST['btnUpload'])){
    //Mulai memorises data
    $file_name  = $_FILES['data_upload']['name'];
    $file_size  = $_FILES['data_upload']['size'];
    //cari extensi file dengan menggunakan fungsi explode
    $explode    = explode('.',$file_name);
    $extensi    = $explode[count($explode)-1];
 
    //check apakah type file sudah sesuai
    /*if(!in_array($extensi,$file_type)){
        $eror   = 'true';
        $pesan = '- Type file yang anda upload tidak sesuai<br />';
    }
    if($file_size > $max_size){
        $eror   = 'true';
        $pesan = '- Ukuran file melebihi batas maximum<br />';
    }
    //check ukuran file apakah sudah sesuai
 
    if($eror == true){
        echo '<div id="eror">'.$pesan.'</div>';
    }
    else{
        //mulai memproses upload file
        if(move_uploaded_file($_FILES['data_upload']['tmp_name'], $folder.$file_name)){
            //catat nama file ke database
            
            /*$inputannya = "INSERT into file_upload values ('', '$file_name', '$keterangan', '$folder','' 'date('Y-m-d H:i:s')''')";
            $catat = mysql_query($inputannya);
           mysql_query('insert into file_upload(Filename,Detail,Folder,DateUpload) values ("'.$file_name.'", "'.$_POST['keterangan'].'", "'.$folder.'", "'.date('Y-m-d H:i:s').'")');
            echo '<div id="msg">Berhasil mengupload file '.$file_name.'</div>';
        } else{
            echo "Proses upload eror";
        }
    }
}
    
  //mysql_query("INSERT INTO file_upload VALUES('','$_POST[judul]','$_POST[deskripsi]','$_POST[kategori]','$_POST[url]','$_POST[tgl]')");
//header('location:../../media.php?module='.$module);
}*/

// Input
elseif ($module=='upload' AND $act=='input'){
  mysql_query("INSERT INTO upload VALUES('','$_POST[judul]','$_POST[deskripsi]','$_POST[kategori]','$_POST[url]','$_POST[tgl]')");
  header('location:../../media.php?module='.$module);
}
}
?>
