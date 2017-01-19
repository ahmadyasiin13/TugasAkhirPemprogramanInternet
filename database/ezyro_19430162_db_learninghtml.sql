/*
SQLyog - Free MySQL GUI v5.0
Host - 5.1.37 : Database - db_learninghtml
*********************************************************************
Server version : 5.1.37
*/


create database if not exists `db_learninghtml`;

USE `db_learninghtml`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert into `admin` values 
('admin','1321995','Ahmad Yasiin','ayassin786@gmail.com','082210901146','admin','N');

/*Table structure for table `buku_tamu` */

DROP TABLE IF EXISTS `buku_tamu`;

CREATE TABLE `buku_tamu` (
  `no_tamu` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`no_tamu`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `buku_tamu` */

insert into `buku_tamu` values 
(5,'Ahmad Yasiin','Laki-Laki','Hasanudin, Semarang, Kudus','Kudus','ayassin786@gmail.com'),
(6,'Amalia Setyo Pratiwi','Perempuan','Ds. Purwosari, Kota, Kudus','Kudus','amaliapratiwi26@gmail.com'),
(7,'Samuel Kurnia Yudha','Laki-Laki','Ds. Blangsak, Kincir, Jepara','Jepara','sakurdha@gmail.com'),
(9,'Elsafitri Damayanti','Perempuan','Jl. Nakula 1 No 68','Semarang','elsafdama@gmail.com'),
(10,'Ilham Priyo Wibowo','Laki-Laki','Ds. Hadiwarno Rt.01/Rw/04, Mejobo, Kudus','Kudus','ilhamwibowo1999@gmail.com'),
(14,'Bondeng','Laki-Laki','Ds. Sujen','Demak','bondeng@gmail.com');

/*Table structure for table `comment` */

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(30) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `komentar` varchar(250) NOT NULL DEFAULT '',
  `date` datetime NOT NULL,
  `art_id` int(3) NOT NULL,
  `art_url` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `comment` */

/*Table structure for table `download` */

DROP TABLE IF EXISTS `download`;

CREATE TABLE `download` (
  `id_download` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  PRIMARY KEY (`id_download`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `download` */

/*Table structure for table `hub_kami` */

DROP TABLE IF EXISTS `hub_kami`;

CREATE TABLE `hub_kami` (
  `kode_id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`kode_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `hub_kami` */

insert into `hub_kami` values 
(6,'Ilham Priyo Wibowo','ilhampriyo1999@gmail.com','pye? wes move on?'),
(5,'Elsafitri Damayanti','elsada@gmail.com','Nice! '),
(4,'Amalia Setyo Pratiwi','amellala@gmail.com','Bro, ijeh Galau ora ?');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `upload` int(3) NOT NULL,
  `download` int(3) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `kategori` */

insert into `kategori` values 
(112,'HTML',2,0),
(113,'Css',1,0),
(114,'Php',3,0),
(111,'JScript',2,0);

/*Table structure for table `mod_ym` */

DROP TABLE IF EXISTS `mod_ym`;

CREATE TABLE `mod_ym` (
  `id_ym` int(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id_ym`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `mod_ym` */

insert into `mod_ym` values 
(1,'yasiin','ahmadyasiin'),
(2,'amel','mamelcieamel'),
(3,'candra','candramacan'),
(4,'irul','ywww');

/*Table structure for table `posting` */

DROP TABLE IF EXISTS `posting`;

CREATE TABLE `posting` (
  `id_posting` int(10) NOT NULL AUTO_INCREMENT,
  `judul_posting` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `id` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_posting`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `posting` */

/*Table structure for table `upload` */

DROP TABLE IF EXISTS `upload`;

CREATE TABLE `upload` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `upload` */

insert into `upload` values 
(1,'Tutorial Php : Simpan, Tambah, Edit, Hapus, dan Cari','Cara membuat aplikasi berbasis web php dan mysql aga bisa melakukan fungsi simpan, edit, hapus, tambah dan cari.','php dan mysql','Tutorial Php  Simpan, Tambah, Edit, Hapus, dan Cari.php','2016-12-07 22:35:31'),
(2,'Tutorial Php Membuat Pendaftaran Online Sederhana','Tutorial php mysql untuk membuat aplikasi pendaftaran online berbasis web.','php','Tutorial Php Membuat Pendaftaran Online Sederhana.php','2016-12-17 22:38:16');
