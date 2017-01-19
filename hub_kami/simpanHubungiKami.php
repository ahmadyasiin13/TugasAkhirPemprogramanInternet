<?php  
    include "koneksi.php";  
    $nama   = $_POST['nama'];   //method post disini untuk mengambil nilai variabel dari database
    $email   = $_POST['email']; 
    $pesan = $_POST['pesan']; 
    

    $input = "insert into hub_kami values ('','$nama','$email','$pesan')";

    $hasil = mysql_query($input, $koneksi);  
    if($hasil){  
      ?>  
        <script language="javascript">  
          alert('Pesan Anda berhasil dikirim');  
          document.location="../Hubungi kami.php";  
        </script>  
      <?php  
    }else{  
      ?>  
        <script language="javascript">  
          alert('Gagal mengirim pesan');  
          window.back();  
        </script>  
      <?php  
    }  
 ?>   