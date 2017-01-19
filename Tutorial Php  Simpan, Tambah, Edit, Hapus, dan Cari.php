<?php
  include "config/koneksi.php"; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tutorial Php : Simpan, Tambah, Edit, Hapus, dan Cari</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/lightbox.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  body {
      position: relative;
  }
  ul.nav-pills {
      top: 20px;
      position: fixed;
  }
  div.col-sm-9 div {
      height: 250px;
      font-size: 28px;
  }
  #section1 {color: #000000; }
  #section2a {color: #000000; }
  #section2b {color: #000000; }
  #section3 {color: #000000; }
  
  @media screen and (max-width: 810px) {
    #section1, #section2a, #section2b, #section3 {
        margin-left: 0px;
    }
  }
/* scroll to top */
  #scroll { 
  position: relative; 
  width: 0px;
  margin: 0 auto;
  bottom: 15px; 
  right: 0;
  background: red;
  padding: 0;
}
  
#scroll a { 
  float: right;
  margin: 0 0 0 0; 
  padding: 0 0 0 0;
}
  
#scroll a img { 
  float: right;
  padding: 0 0 0 0;
  margin: 0;
}
#publishcomment {
border: 2px solid #848484;
box-shadow: 12px 12px 7px #888888;
margin: 30px 0 50px 20px;
padding: 10px;
max-height: 100%;
color: #3d3d3d;
width: 90%;
font-size: 12px;
line-height: 15px;
}
#publishcomment hr {
color: #ccc;
}
#publishcomment a {
color: #da5700;
text-decoration: none;
font-weight:normal;
}
#publishcomment a:link {
font-weight: bold;
}
#publishcomment a:hover {
text-decoration: underline;
}
input[type='search']{height:33px;width:250px;}
 button{padding:5px;width:60px;}
 i{color:#050;}
  </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

      <a class="navbar-brand" href="images/002.jpg" data-lightbox="example-1"> <img src="images/002.jpg" alt="Shouma" style="width:45px;height:26px;"> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="buku tamu.php">Buku Tamu</a></li>
        <li><a href="tutorial.php">Tutorial</a></li>
        <li><a href="Tentang saya.php">Tentang Kita</a></li>
        <li><a href="Hubungi kami.php">Hubungi Kami</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#search" ><span class="glyphicon glyphicon-search"></span> </a></li>
      </ul>
    </div>
  </div>
</nav> <br>

  
<div class="container">

        <div class="row">
 <br>
            <div class="col-md-8">
                <div>
                    <!-- Blog Entries Column -->
                  <h1 class="page-header">
                    Tutorial Php : Simpan, Tambah, Edit, Hapus, dan Cari<br>
                    <small>-Good Luck-</small>
                  </h1>
                </div>

                <div id="section1">
                        <!-- First Blog Post -->
                    <hr>
                    
                      <a class="example-image-link" href="images/PHP-MySQL.jpg" data-lightbox="example-1">
                        <img class="img-responsive" src="images/PHP-MySQL.jpg" alt="Image" width="200" height="80">
                      </a>
        <hr>
                      <p align="justify">
                      <font face="Rockwell" size="4">
                          Pada sesi ini saya mau memberi tips cara Membuat Aplikasi Simpan Tambah Edit Hapus dan Cari dengan PHP dan MYSQL, semoga bermanfaat bagi sobat semua. <br>
                          <br>
                          Pertama yang perlu dilakukan yaitu membuat database dan table seperti gambar di bawah ini.
                          <br><br>
                          <a class="example-image-link" href="images/database.png" data-lightbox="example-1">
                            <img class="img-responsive" src="images/database.png" alt="Image" width="500" height="100">
                          </a>
                          <br><br>
                          Buat Databasenya dengan "dbuas" dan tabelnya "tabbarang" (tanpa tanda petik dua). Atur Field, Type dan length seperti gambar diatas. 
                          <br><br>
                          Setelah itu sebaiknya sobat buka dulu My Komputer pilih Local Disk C-->Xampp-->htdocs lalu buat folder baru, beri nama UAS2, sobat boleh yang lain nama foldernya, sesukanya sobat saja. 
                          <br><br>
                          Buka Editor "notepad++, Sublim, atau Adobe Dreamweaver". <br>
                          Saya menggunakan Sublim. Bisa download <a href="http://www.sublimetext.com/3" target="blank">disini</a>. <br><br>
                          Klik file --> New File --> <br><br>
                          1. Isikan Source di bawah ini :
                          <div style="background-color: white; border: 4px #1780dd solid; height: 800px; overflow: auto; padding: 10px; text-align: left; ">
                          <font face="Rockwell" size="4">
<br />
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;Daftar Barang&lt;/title&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;p&gt;<br />
&nbsp; &lt;?php<br />
mysql_connect("localhost", "root", "") or die ("Gagal konek ke server.");<br />
mysql_select_db("dbuas") or die ("Gagal membuka database.");<br />
?&gt;<br />
&lt;/p&gt;<br />
&lt;p align="center"&gt;MENU&lt;/p&gt;<br />
&lt;table width="536" height="96" border="5" align="center"&gt;<br />
&lt;tr&gt;<br />
&lt;th width="43" height="36"&gt;Kode&lt;/th&gt;<br />
&lt;th width="102"&gt;Nama Produk &lt;/th&gt;<br />
&lt;th width="50"&gt;Jenis&lt;/th&gt;<br />
&lt;th width="82"&gt;Harga&lt;/th&gt;<br />
&lt;th width="82"&gt;Rubah&lt;/th&gt;<br />
&lt;th width="82"&gt;Hapus&lt;/th&gt;<br />
&lt;/tr&gt;<br />
&lt;?php<br />
$query = "select * from tabbarang";<br />
$result = mysql_query($query);<br />
while ($buff = mysql_fetch_array($result)){<br />
?&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;&lt;?php echo $buff['kode']; ?&gt;&lt;/td&gt;<br />
&lt;td&gt;&lt;?php echo $buff['namaproduk']; ?&gt;&lt;/td&gt;<br />
&lt;td&gt;&lt;?php echo $buff['jenis']; ?&gt;&lt;/td&gt;<br />
&lt;td&gt;&lt;?php echo $buff['harga']; ?&gt;&lt;/td&gt;<br />
&lt;td width="43"&gt;&lt;a href="edit.php?jenis=&lt;?php echo $buff['jenis']; ?&gt;"&gt;Rubah&lt;/a&gt;&lt;/td&gt;<br />
&lt;td width="43"&gt;&lt;a href="hapus.php?jenis=&lt;?php echo $buff['jenis']; ?&gt;"&gt;Hapus&lt;/a&gt;&lt;/td&gt;<br />
&nbsp;&lt;/tr&gt;<br />
&lt;?php<br />
}<br />
mysql_close();<br />
?&gt;<br />
&lt;/table&gt;<br />
&lt;p&gt;&amp;nbsp;&lt;/p&gt;<br />
&lt;td&gt;&lt;p align="center"&gt;&lt;a href="tambah.php"&gt;<span class="Apple-tab-span" style="white-space: pre;"> </span>ADD&lt;/a&gt; &lt;/p&gt;&lt;/td&gt;<br />
&nbsp;&lt;p&gt;&lt;td&gt;&lt;p align="center"&gt;&lt;a href="cari.php"&gt;<span class="Apple-tab-span" style="white-space: pre;"> </span>SEARCH&lt;/a&gt; &lt;/p&gt;&lt;/td&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</font></div>
                          lalu simpan dengan nama menuutama.php 
                          <br><br>
                          <a class="example-image-link" href="images/menu.png" data-lightbox="example-1">
                            <img class="img-responsive" src="images/menu.png" alt="Image" width="500" height="100">
                          </a>
                          <br><br>
                            2. Buka File-->New isikan source di bawah ini:
                          <br><br>
                              <div style="background-color: white; border: 4px #1780dd solid; height: 200px; overflow: auto; padding: 10px; text-align: left; ">
<br />
&lt;?php<br />
$host="localhost";<br />
$user="root";<br />
$pass="";<br />
$database="dbuas";<br />
mysql_connect($host,$user,$pass) or die ("server error");<br />
mysql_select_db($database) or die ("database gagal dibuka");<br />
?&gt;<br />
<br />
<br /></div>
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;">lalu simpan beri nama koneksi.php</span><br />
<br />
<br />
<br />
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;">3. Buka lagi File--&gt;New isikan source dibawah ini :</span><br />
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;"><br /></span>
<br />
<div style="background-color: white; border: 4px #1780dd solid; height: 800px; overflow: auto; padding: 10px; text-align: left;">

<br />
&lt;head&gt;&lt;title&gt;Tambah Data&lt;/title&gt;&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;h3&gt;&lt;p align="left"&gt;Tambah Barang&lt;/p&gt;&lt;/h3&gt;<br />
&lt;form name="form1" method="post" action="entry.php"&gt;<br />
&lt;table&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;Kode&lt;/td&gt;<br />
&lt;td&gt;&lt;input type="text" name="kode" size="12"&gt;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;Nama Produk &lt;/td&gt;<br />
&lt;td&gt;&lt;input type="text" name="namaproduk" size="30"&gt;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;Jenis&lt;/td&gt;<br />
&lt;td&gt;&lt;input type="text" name="jenis" size="30"&gt;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;Harga&lt;/td&gt;<br />
&lt;td&gt;&lt;input type="text" name="harga" size="30"&gt;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;&amp;nbsp;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;&lt;input value="Simpan" name="submit" type="submit" /&gt;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&nbsp; &lt;td&gt;&amp;nbsp;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&nbsp; &lt;td&gt;&amp;nbsp;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;<br />
&lt;/form&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</div>
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;">lalu simpan beri nama tambah.php</span><br />
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;"><br /></span>

<span style="font-family: Trebuchet MS, sans-serif; font-size: large;"><br /></span><span style="font-family: Trebuchet MS, sans-serif; font-size: large;">4. Buat File New lagi Source dibawah ini :</span><br />
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;"><br /></span>
<br />
<div style="background-color: white; border: 4px #1780dd solid; height: 200px; overflow: auto; padding: 10px; text-align: left;">

<br />
&lt;?php<br />
include("koneksi.php");<br />
<br />
$kode = $_POST['kode'];<br />
$namaproduk = $_POST['namaproduk'];<br />
$jenis = $_POST['jenis'];<br />
$harga = $_POST['harga'];<br />
$query = mysql_query("insert into tabbarang values &nbsp;('$kode','$namaproduk','$jenis','$harga')");<br />
echo "Data Telah disimpan&lt;br&gt;<br />
&lt;a href=\"menuutama.php\"&gt;Kembali&lt;/a&gt;";<br />
?&gt;</div>
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;">lalu simpan beri nama entry.php</span><br />
<br />
<br />
<br />
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;">5. File baru lagi source di bawah ini:</span><br />
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;"><br /></span>
<br />
<div style="background-color: white; border: 4px #1780dd solid; height: 800px; overflow: auto; padding: 10px; text-align: left; ">

<br />
&lt;?php<br />
include("koneksi.php");<br />
$jenis = $_GET['jenis'];<br />
$query = "select * from tabbarang where jenis='$jenis'";<br />
$result = &nbsp;mysql_query($query) or die("gagal melakukan query");<br />
&nbsp; &nbsp; &nbsp;$buff = mysql_fetch_array($result);<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;mysql_close();<br />
?&gt;<br />
&lt;html&gt;<br />
&lt;head&gt;&lt;title&gt;Edit Data&lt;/title&gt;&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;form name="form1" method="post" action="update.php"&gt;<br />
&lt;table&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;Kode&lt;/td&gt;<br />
&lt;td&gt;&lt;input type="text" name="kode" value="&lt;?php echo $buff['kode']; ?&gt;"&gt;&lt;/td&gt;&lt;/tr&gt;<br />
&lt;tr&gt;&lt;td&gt;Nama Produk &lt;/td&gt;<br />
&nbsp; &lt;td&gt;&lt;input type="text" name="namaproduk" value="&lt;?php echo $buff['namaproduk']; ?&gt;"&gt;&lt;/td&gt;&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&nbsp; &lt;td&gt;Jenis&lt;/td&gt;<br />
&nbsp; &lt;td&gt;&lt;input type="text" name="jenis" value="&lt;?php echo $buff['jenis']; ?&gt;" &gt;&lt;/td&gt;&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&nbsp; &lt;td&gt;Harga&lt;/td&gt;<br />
&nbsp; &lt;td&gt;&lt;input type="text" name="harga" value="&lt;?php echo $buff['harga']; ?&gt;" &gt;&lt;/td&gt;&lt;/tr&gt;<br />
&lt;tr&gt;&lt;td&gt;&amp;nbsp;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;/table&gt;<br />
&lt;label&gt;<br />
&lt;input type="submit" name="Submit" value="Simpan"&gt;<br />
&lt;/label&gt;<br />
&lt;p&gt;&amp;nbsp;&lt;/p&gt;<br />
&lt;/form&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;<br />
<div>
<br /></div>
<br />
<br /></div>
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;">lalu simpan beri nama edit.php</span><br />
<br />
&nbsp;
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;"><br /></span><span style="font-family: Trebuchet MS, sans-serif; font-size: large;">6. File baru lagi source nya dibawah ini :</span><br />
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;"><br /></span>
<br />
<div style="background-color: white; border: 4px #1780dd solid; height: 200px; overflow: auto; padding: 10px; text-align: left; ">

<br />
&lt;?php<br />
include("koneksi.php");<br />
$kode = $_POST['kode'];<br />
$namaproduk = $_POST['namaproduk'];<br />
$jenis = $_POST['jenis'];<br />
$harga = $_POST['harga'];<br />
mysql_query("update tabbarang set kode='$kode', namaproduk='$namaproduk', harga='$harga' where jenis='$jenis'");<br />
echo "Data Telah diupdate&lt;br&gt;<br />
&lt;a href=\"menuutama.php\"&gt;Kembali&lt;/a&gt;";<br />
?&gt;<br />
<div>
<br /></div>
<br />
<br /></div>
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;">lalu simpan beri nama update.php</span><br />
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;"><br /></span>

<span style="font-family: Trebuchet MS, sans-serif; font-size: large;"><br /></span><span style="font-family: Trebuchet MS, sans-serif; font-size: large;">7. File baru lagi source di bawah ini:</span><br />
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;"><br /></span>
<br />
<div style="background-color: white; border: 4px #1780dd solid; height: 200px; overflow: auto; padding: 10px; text-align: left;">

<br />
&lt;style type="text/css"&gt;<br />
&lt;!--<br />
body {<br />
<span class="Apple-tab-span" style="white-space: pre;"> </span>background-color: #FFFFFF;<br />
}<br />
--&gt;<br />
&lt;/style&gt;&lt;?php<br />
include("koneksi.php");<br />
mysql_query("DELETE from tabbarang WHERE jenis='$_GET[jenis]'");<br />
echo"Data Telah dihapus&lt;br&gt;<br />
&lt;a href=\"menuutama.php\"&gt;Kembali&lt;/a&gt;";<br />
?&gt;<br />
<br /></div>
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;">lalu simpan beri nama hapus.php</span><br />
<br />
&nbsp;
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;"><br /></span><span style="font-family: Trebuchet MS, sans-serif; font-size: large;">8. File baru lagi source dibawah ini :</span><br />
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;"><br /></span>
<br />
<div style="background-color: white; border: 4px #1780dd solid; height: 200px; overflow: auto; padding: 10px; text-align: left; ">
<b>ekoninjarr.blogspot.com</b><br />
<br />
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;&lt;/title&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;h1&gt;Search&lt;/h1&gt;<br />
&lt;form action="hasilcari.php" method="POST"&gt;<br />
&lt;p&gt;<br />
<br />
Jenis<br />
&nbsp; &lt;input name="search" type="text" id="search" &gt;<br />
&lt;label&gt;<br />
<br />
&lt;/label&gt;<br />
&lt;input type="submit" name="cari" value="Cari"&gt;<br />
&lt;/p&gt;<br />
&lt;p&gt;&amp;nbsp;&lt;/p&gt;<br />
&lt;/form&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;<br />
<br />
<br /></div>
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;">lalu simpan beri nama cari.php</span><br />
<br />
&nbsp;
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;"><br /></span><span style="font-family: Trebuchet MS, sans-serif; font-size: large;">9. File baru lagi source dibawah ini :</span><br />
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;"><br /></span>
<br />
<div style="background-color: white; border: 4px #1780dd solid; height: 800px; overflow: auto; padding: 10px; text-align: left;">

<br />
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;Daftar Barang&lt;/title&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;p&gt;<br />
&nbsp; &lt;?php<br />
mysql_connect("localhost", "root", "") or die ("Gagal konek ke server.");<br />
mysql_select_db("dbuas") or die ("Gagal membuka database.");<br />
?&gt;<br />
&lt;/p&gt;<br />
&lt;p align="center"&gt;MENU&lt;/p&gt;<br />
&lt;table width="536" height="96" border="5" align="center"&gt;<br />
&lt;tr&gt;<br />
&lt;th width="43" height="36"&gt;Kode&lt;/th&gt;<br />
&lt;th width="102"&gt;Nama Produk &lt;/th&gt;<br />
&lt;th width="50"&gt;Jenis&lt;/th&gt;<br />
&lt;th width="82"&gt;Harga&lt;/th&gt;<br />
&lt;th width="82"&gt;Rubah&lt;/th&gt;<br />
&lt;th width="82"&gt;Hapus&lt;/th&gt;<br />
&lt;/tr&gt;<br />
&lt;?php<br />
$query = "select * from tabbarang";<br />
$result = mysql_query($query);<br />
while ($buff = mysql_fetch_array($result)){<br />
?&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;&lt;?php echo $buff['kode']; ?&gt;&lt;/td&gt;<br />
&lt;td&gt;&lt;?php echo $buff['namaproduk']; ?&gt;&lt;/td&gt;<br />
&lt;td&gt;&lt;?php echo $buff['jenis']; ?&gt;&lt;/td&gt;<br />
&lt;td&gt;&lt;?php echo $buff['harga']; ?&gt;&lt;/td&gt;<br />
&lt;td width="43"&gt;&lt;a href="edit.php?jenis=&lt;?php echo $buff['jenis']; ?&gt;"&gt;Rubah&lt;/a&gt;&lt;/td&gt;<br />
&lt;td width="43"&gt;&lt;a href="hapus.php?jenis=&lt;?php echo $buff['jenis']; ?&gt;"&gt;Hapus&lt;/a&gt;&lt;/td&gt;<br />
&nbsp;&lt;/tr&gt;<br />
&lt;?php<br />
}<br />
mysql_close();<br />
?&gt;<br />
&lt;/table&gt;<br />
&lt;p&gt;&amp;nbsp;&lt;/p&gt;<br />
&lt;td&gt;&lt;p align="center"&gt;&lt;a href="tambah.php"&gt;<span class="Apple-tab-span" style="white-space: pre;"> </span>ADD&lt;/a&gt; &lt;/p&gt;&lt;/td&gt;<br />
&nbsp;&lt;p&gt;&lt;td&gt;&lt;p align="center"&gt;&lt;a href="cari.php"&gt;<span class="Apple-tab-span" style="white-space: pre;"> </span>SEARCH&lt;/a&gt; &lt;/p&gt;&lt;/td&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</div>
<span style="font-family: Trebuchet MS, sans-serif; font-size: large;">lalu simpan beri nama hasilcari.php</span>


<br />
                          <br><br>
                          <a class="example-image-link" href="images/hasilcari.png" data-lightbox="example-1">
                            <img class="img-responsive" src="images/hasilcari.png" alt="Image" width="500" height="100">
                            </a>
                            Note: simpan semua nya dalam satu folder yang dibuat tadi ya,,,yang tadi itu lho di C-->xampp-->htdocs-->UAS2.
                            <br><br>
                            Sekarang buka Mozilla Firefox jalankan programnya, yang dijalankan pertama yang menuutama.php yuaaaaaa....
                            <br><br>
                            Semoga berhasilllllllllll selamat mencoba sobatkuu......!!!
                            <br><br>
                            download file GRATIS : <a href="http://www.mediafire.com/download/1ghox2647lrnyrn/Tambah%2Csimpan%2Cedit%2Chapus.zip" target="blank">mediafire</a>
                            &nbsp <a href="http://learninghtml.freeiz.com/dl/Tambah,simpan,edit,hapus.rar" target="blank"> alternatif link</a>
                           <br><br>
Sumber : <a href="http://ekoninjarr.blogspot.co.id/2015/02/cara-membuat-aplikasi-simpan-tambah.html" target="blank"> http://ekoninjarr.blogspot.co.id/</a>
                      </font>
                      </p>
                    <hr>

                    <!-- Komentar -->
                        <h2>Tinggalkan Komentar</h2>
                        <form role="form" name="submitcomment" method="post" action="komentar/submitcomment.php">
                          <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" class="form-control" name="nama" placeholder="Enter Your Name">
                          </div>
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your email">
                          </div>
                          <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="text" class="form-control" name="website" placeholder="" >
                          </div>
                          <div class="form-group">
                            <label for="comment">Komentar:</label>
                            <textarea class="form-control" rows="5" name="komentar"></textarea>
                          </div>
                          <div class="form-group">
                            <input name="art_id" value="1" type="hidden">
                            <input name="art_url" value="<?php echo $_SERVER['PHP_SELF']; ?>" type="hidden"><br>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary" value="Kirim" name="tombol">Kirim</button>
                          </div>
                        </form>

                        <div class="form-group" id="publishcomment">
                          <?php include("komentar/publishcomment.php"); getcomment("1"); ?>
                      </div>

                    <p><a href="Hubungi kami.php">Hubungi Kami</a></p>
                </div>
            </div>
<br>
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div id="search" class="well">
                    <h4>Search</h4>
                    <form action="Searching.php" method="get">
                      <p>
                       <input type="search" name="cari"/>
                       <input type="Submit" name="batal" value="Cari" class="btn btn-primary"> 
                       <!-- <button>Cari</button> -->
                      </p>
                     </form>
                    <!-- <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div> -->
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Label</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Tips</a>
                                </li>
                                <li><a href="#">Game</a>
                                </li>
                                <li><a href="#">Tutorial</a>
                                </li>
                                <li><a href="#">Excel</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Word</a>
                                </li>
                                <li><a href="#">PPT</a>
                                </li>
                                <li><a href="#">Komputer</a>
                                </li>
                                <li><a href="#">Windows 10</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                  <h4>Tutorial</h4>
                    <p><a href="Tutorial Php  Simpan, Tambah, Edit, Hapus, dan Cari.php">Tutorial Php : Simpan, Tambah, Edit, Hapus, dan Cari</a> </p>
                    <p><a href="Tutorial Php Membuat Pendaftaran Online Sederhana.php">Tutorial Php Membuat Pendaftaran Online Sederhana</a> </p>
                    <p><a href="Kosongan.php">MENGHITUNG NILAI AKHIR MAHASISWA DENGAN PHP</a> </p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script> <br>
    
    <!-- Jquery lightbox -->
    <script src="js/lightbox-plus-jquery.min.js"></script>
<div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top"/></a>
</div>
<footer class="container-fluid text-center">
  <p><img src="images/twitter.png" alt="twitter" />&nbsp;<img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>
  <p><a href="home.php">Home</a> | <a href="#">Another Page</a> | <a href="Hubungi kami.php">Hubungi Kami</a></p>
  <p><font align="center">All Rights Reserved</font></p>
</footer>

</body>
</html>