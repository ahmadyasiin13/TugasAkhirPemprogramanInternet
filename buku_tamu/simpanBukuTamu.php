<?php  
    include "koneksi.php";  

    $nama   = $_POST['nama'];  
    $kelamin = $_POST['kelamin'];   //method post disini untuk mengambil nilai variabel dari database
    $alamat = $_POST['alamat']; 
    $kota = $_POST['kota']; 
    $email   = $_POST['email'];  
    
    $input = "insert into buku_tamu values ('','$nama','$kelamin','$alamat','$kota','$email')";

    $hasil = mysql_query($input);  
    if($hasil){  
      ?>  
        <script language="javascript">  
          alert('Berhasil menambahkan');  
          document.location="../buku tamu.php";  
        </script>  
      <?php  
    }else{  
      ?>  
        <script language="javascript">  
          alert('Gagal menambahkan');  
          window.back();  
        </script>  
      <?php  
    }  
 ?>   