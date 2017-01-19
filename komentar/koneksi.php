<?php  
		$server  = "localhost";  
       $username = "root";  
       $password = "";  

       $database = "db_learninghtml";  
       $koneksi = mysql_connect($server,$username,$password) or die ('Koneksi gagal');  
       if($koneksi){  
              mysql_select_db($database) or die ('Database belum dibuat');    
     }  
?>