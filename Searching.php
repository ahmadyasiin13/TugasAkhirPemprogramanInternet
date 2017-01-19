<?php
  include "config/koneksi.php"; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hasil Searching</title>
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
   i{color:#050;}
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
                    Hasil Searching<br>
                    <small>-Good Luck-</small>
                  </h1>
                </div>
                <div id="section1">
                        <!-- First Blog Post -->
        <hr>
                      <p align="justify">
                      <font face="Rockwell">
                          <?php
                             $id = $_GET['cari'];
                             $hasilcari = mysql_query("SELECT * from upload where id like '%$id%' or judul like '%$id%' or deskripsi like '%$id%' or kategori like '%$id%' or url like '%$id%' or tgl like '%$id%'");
                             while($data=mysql_fetch_assoc($hasilcari)){
                             ?>
                              <h3><a href="<?php echo $data['url'] ?>"><?php echo $data['judul'] ?></a></h3>
                              <section><?php echo $data['deskripsi'] ?></section>
                             <hr>
                             <?php
                             }
                             ?>
                          </font>
                      </p>
                    <hr>

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
                    <p><a href="#">MENGHITUNG NILAI AKHIR MAHASISWA DENGAN PHP</a> </p>
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
