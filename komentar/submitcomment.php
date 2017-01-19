<?php
if($_POST["tombol"]=="Kirim")
{
$nama=$_POST["nama"];
$email=$_POST["email"];
$website=$_POST["website"];
$komentar=$_POST["komentar"];
$art_id=$_POST["art_id"];
$art_url=$_POST["art_url"];
 
if(empty($nama)){
$_POST["nama"]='Manusia tak bernama';
$user='user0.png';
}else{
$user='user1.png';
}
if(empty($komentar)){
echo "<meta http-equiv='refresh' content='2; url=$art_url'>";
echo "<script>
				function kembali(){
					alert(\"Pesan masih kosong, isi dahulu..!!\");
				}
				kembali();
				</script>";
			exit;}
}
 
//connect database
include "koneksi.php";  
 
$sql="INSERT INTO comment (nama, email, website, komentar, art_id, art_url,
date)
VALUES
('$_POST[nama]','$_POST[email]','$_POST[website]', '$_POST[komentar]',
'$_POST[art_id]', '$_POST[art_url]', NOW())";
 
if (!mysql_query($sql))
 {
 die('Error: ' . mysql_error());
 }
echo "<meta http-equiv='refresh' content='0; url=$art_url'>";
echo "<script>
				function kembali(){
					alert(\"Terimakasih atas komentar anda. \");
				}
				kembali();
				</script>";
			exit; 
 
?>