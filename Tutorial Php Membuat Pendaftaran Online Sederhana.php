<?php
  include "config/koneksi.php"; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tutorial Php Membuat Pendaftaran Online Sederhana</title>
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
                    Tutorial Php Membuat Pendaftaran Online Sederhana<br>
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
                          Sebenarnya apa sih PHP? PHP merupakan singkatan dari Hypertext PreProcessor yang artinya bahasa pemrograman
                          yang digunakan untuk oembuatan dan pengembangan situs atau website.
                          Disini saya berikan contoh <b>Tutorial Php Membuat Pendaftaran Online Sederhana</b>. <br><br>
                          Banyak sekali diluar sana aplikasi-aplikasi yang pembuatannya dengan PHP seperti 
                          <a href="http://learninghtml.freeiz.com/Tutorial%20Php%20%20Simpan,%20Tambah,%20Edit,%20Hapus,%20dan%20Cari.php">
                          Tutorial Php : Simpan, Tambah, Edit, Hapus, dan Cari </a> yang baru kemarin saya berikan.
                          Mungkin akan lebih indah apabila pembuatan sebuah aplikasi PHP di dampingi oleh CSS. <br>
                          Tapi kali ini kita belajar yang sederhana dulu, dari yang mudah, kalau sudah paham kita lanjut ke tahap selanjutnya.
                          <br><br>
               Sesuai dengan janjiku tadi sekarang kita bahas saja Contoh Aplikasi Sederhana Pendaftaran Online Dengan PHP, ikuti langkah-langkahnya berikut ini.            
                          <br><br>
                          Pertama buka dulu XAMPP Control Panel Aplication klik tombol start pilih Apache, MySql, dan FileZilla. Setelah itu sobat buka My Computer lari ke 
                          Local Disk C-->xampp-->htdocs dan buat folder baru <b>pendaftaran</b>.
                          <br><br>
                          Yang kedua sobat buka <b>Editor</b> anda (Notpade++, Sublime, dll), buat file baru. Pada lembar baru tadi 
                          isikan code di bawah ini dan simpan dengan nama <b>formdaftar.php</b> ( simpan di folder <b>pendaftaran</b> tadi ).
                          <br><br>
                          <div style="background-color: white; border: 4px #1780dd solid; height: 800px; overflow: auto; padding: 10px; text-align: left; ">
                          <font face="Rockwell" size="4">
<br />
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;<br />
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;<br />
&lt;head&gt;<br />
&lt;meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /&gt;<br />
&lt;title&gt;Untitled Document&lt;/title&gt;<br />
&lt;/head&gt;<br />
<br />
&lt;body&gt;<br />
&lt;form action="hasilpendaftaran.php" method="post" enctype="multipart/form-data" name="form1" id="form1"&gt;<br />
&nbsp; &lt;p align="center"&gt;PENDAFTARAN ONLINE &lt;/p&gt;<br />
&nbsp; &lt;table width="500" border="1" align="center" bgcolor="#66FF00"&gt;<br />
&nbsp; &nbsp; &lt;tr&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td width="137"&gt;Nama Lengkap &lt;/td&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td width="347"&gt;&lt;label&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;input name="t1" type="text" id="t1" size="30" maxlength="30" /&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;/label&gt;&lt;/td&gt;<br />
&nbsp; &nbsp; &lt;/tr&gt;<br />
&nbsp; &nbsp; &lt;tr&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;Jenis Kelamin &lt;/td&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;&lt;label&gt;<br />
&lt;input name="r1" type="radio" value="Pria" /&gt; &nbsp; &nbsp; <br />
Pria&lt;br /&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;input name="r1" type="radio" value="Wanita" /&gt;<br />
&nbsp; &nbsp; &nbsp; Wanita&lt;/label&gt;&lt;/td&gt;<br />
&nbsp; &nbsp; &lt;/tr&gt;<br />
&nbsp; &nbsp; &lt;tr&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;Tempat Lahir &lt;/td&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;&lt;label&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;input name="t2" type="text" id="t2" /&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;/label&gt;&lt;/td&gt;<br />
&nbsp; &nbsp; &lt;/tr&gt;<br />
&nbsp; &nbsp; &lt;tr&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;Tanggal Lahir &lt;/td&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;&lt;label&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;select name="ttgl" id="ttgl"&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option selected="selected"&gt;1&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;2&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;3&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;4&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;5&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &bbsp; &nbsp; &lt;option&gt;6&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;7&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;8&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;8&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;10&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;11&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;12&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;13&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;14&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;15&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;16&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;17&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;18&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;19&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;20&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;21&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;22&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;23&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;24&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;25&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;26&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;27&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;28&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;29&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;30&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;31&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;/select&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;select name="tbln" id="tbln"&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option selected="selected"&gt;1&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;2&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;3&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;4&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;5&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;6&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;7&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;8&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;9&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;10&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;11&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;12&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/select&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;select name="tthn" id="tthn"&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1980&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1981&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1982&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1983&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1984&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1985&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1986&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1987&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1988&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1989&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1990&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1991&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1992&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1993&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1994&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1995&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1996&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1997&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1998&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1999&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;/select&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;/label&gt;&lt;/td&gt;<br />
&nbsp; &nbsp; &lt;/tr&gt;<br />
&nbsp; &nbsp; &lt;tr&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;Agama&lt;/td&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;&lt;label&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;select name="tagama" id="tagama"&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option selected="selected"&gt;Islam&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;Kristen&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;Katholik&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;Hindu&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;Budha&lt;/option&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;/select&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;/label&gt;&lt;/td&gt;<br />
&nbsp; &nbsp; &lt;/tr&gt;<br />
&nbsp; &nbsp; &lt;tr&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;Hoby&lt;/td&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;&lt;label&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;input name="cm" type="checkbox" id="cm" value="Mancing" /&gt;<br />
&nbsp; &nbsp; &nbsp; Mancing&lt;br /&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;input name="cv" type="checkbox" id="cv" value="Voly" /&gt;<br />
&nbsp; &nbsp; &nbsp; Voly &lt;br /&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;input name="cs" type="checkbox" id="cs" value="Sepak bola" /&gt;<br />
&nbsp; &nbsp; &nbsp; Sepak Bola&lt;br /&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;input name="cr" type="checkbox" id="cr" value="renang" /&gt;<br />
&nbsp; &nbsp; &nbsp; Renang&lt;/label&gt;&lt;/td&gt;<br />
&nbsp; &nbsp; &lt;/tr&gt;<br />
&nbsp; &nbsp; &lt;tr&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;Alamat&lt;/td&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;&lt;label&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;textarea name="talamat" id="talamat"&gt;&lt;/textarea&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;/label&gt;&lt;/td&gt;<br />
&nbsp; &nbsp; &lt;/tr&gt;<br />
&nbsp; &nbsp; &lt;tr&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;No Telepon &lt;/td&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;&lt;label&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;input name="t3" type="text" id="t3" /&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;/label&gt;&lt;/td&gt;<br />
&nbsp; &nbsp; &lt;/tr&gt;<br />
&nbsp; &nbsp; &lt;tr&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;&amp;nbsp;&lt;/td&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td&gt;&lt;label&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;input type="submit" name="Submit" value="Daftar" /&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;input type="submit" name="Submit2" value="Cancel" /&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;/label&gt;&lt;/td&gt;<br />
&nbsp; &nbsp; &lt;/tr&gt;<br />
&nbsp; &lt;/table&gt;<br />
&nbsp; &lt;p&gt;&amp;nbsp;&lt;/p&gt;<br />
&nbsp; &lt;p&gt;&amp;nbsp;&lt;/p&gt;<br />
&lt;/form&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;<br />
</font></div>
            Setelah itu buat file baru dan isikan kode berikut ini lalu simpan dengan nama <b>hasilpendaftaran.php</b>,
            simpan di folder <b>pendaftaran</b>.
            <br><br>
                         
    <div style="background-color: white; border: 4px #1780dd solid; height: 800px; overflow: auto; padding: 10px; text-align: left; ">

<br />
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;<br />
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;<br />
&lt;head&gt;<br />
&lt;meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /&gt;<br />
&lt;title&gt;Untitled Document&lt;/title&gt;<br />
&lt;style type="text/css"&gt;<br />
&lt;!--<br />
.style2 {font-weight: bold; font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 18px; }<br />
.style3 {<br />
<span class="Apple-tab-span" style="white-space: pre;"> </span>font-weight: bold;<br />
<span class="Apple-tab-span" style="white-space: pre;"> </span>font-size: 18;<br />
<span class="Apple-tab-span" style="white-space: pre;"> </span>font-family: Geneva, Arial, Helvetica, sans-serif;<br />
}<br />
--&gt;<br />
&lt;/style&gt;<br />
&lt;/head&gt;<br />
<br />
&lt;body&gt;<br />
<br />
&lt;p&gt;&amp;nbsp;&lt;/p&gt;<br />
&lt;form id="form1" name="form1" method="post" action=""&gt;<br />
&nbsp; &lt;p align="center" class="style2"&gt;Selamat Datang &lt;/p&gt;<br />
&nbsp; &lt;table width="345" height="228" border="3" align="center" bordercolor="#0000FF" bgcolor="#FF0000"&gt;<br />
&nbsp; &nbsp; &lt;tr&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;td width="331" bordercolor="#0000FF" bgcolor="#66FF00"&gt;&lt;?php<br />
$a=$_POST['t1'];<br />
$b=$_POST['r1'];<br />
$c=$_POST['t2'];<br />
$d=$_POST['ttgl']." ".$_POST['tbln']." ".$_POST['tthn'];<br />
$g=$_POST['tagama'];<br />
$h=$_POST['cm']." ".$_POST['cv']." ".$_POST['cs']." ".$_POST['cr'];<br />
$i=$_POST['talamat'];<br />
$j=$_POST['t3'];<br />
<br />
<br />
echo "Nama Lengkap &nbsp;:$a&lt;br&gt;";<br />
echo "Jenis Kelamin :$b&lt;br&gt;";<br />
echo "Tempat Lahir &nbsp;:$c&lt;br&gt;";<br />
echo "Tanggal Lahir :$d&lt;br&gt;";<br />
echo "Agama &nbsp; &nbsp; &nbsp; &nbsp; :$g&lt;br&gt;";<br />
echo "Hoby &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:$h&lt;br&gt;";<br />
echo "Alamat &nbsp; &nbsp; &nbsp; &nbsp;:$i&lt;br&gt;";<br />
echo "No Telepon &nbsp; &nbsp;:$j&lt;br&gt;";<br />
?&gt;&lt;/td&gt;<br />
&nbsp; &nbsp; &lt;/tr&gt;<br />
&nbsp; &lt;/table&gt;<br />
&lt;/form&gt;<br />
&lt;p align="center" class="style3"&gt;&lt;span class="styler1"&gt;Terima Kasih Telah Mendaftar&lt;/span&gt;<br />
&nbsp; &nbsp;&lt;body&gt;<br />
&lt;/p&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;<br />
<br /></div>
<br>
Sekarang coba jalankan programnya, buka browser mozilla firefox ketikan localhost/pendaftaran/formdaftar.php lalu enter.
<br> Hasilnya kurang lebih seperti ini:
                          <br><br>
                          <a class="example-image-link" href="images/formdaftar.png" data-lightbox="example-1">
                            <img class="img-responsive" src="images/formdaftar.png" alt="Image" width="500" height="100">
                            </a>
                            Dan sepereti ini :
                            <br><br>
                           <a class="example-image-link" href="images/hasilformdaftar.png" data-lightbox="example-1">
                            <img class="img-responsive" src="images/hasilformdaftar.png" alt="Image" width="500" height="100">
                            </a>
                            <br><br>
                            download file GRATIS : <a href="http://www.mediafire.com/download/kwsew1dad4un5pn/Pendaftaran.zip" target="blank">mediafire</a>
                            &nbsp <a href="http://learninghtml.freeiz.com/dl/Pendaftaran.rar" target="blank"> alternatif link</a>
                            <br><br>
Sumber : <a href="http://ekoninjarr.blogspot.co.id/2015/02/contoh-aplikasi-sederhana-pendaftaran.html" target="blank"> http://ekoninjarr.blogspot.co.id/</a>
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
  