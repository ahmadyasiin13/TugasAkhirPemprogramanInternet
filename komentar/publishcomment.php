 <?php

 include "koneksi.php"; 
function getcomment($art_id){
$commentquery = mysql_query("SELECT * FROM comment WHERE art_id='$art_id'  
ORDER BY id DESC") or die(mysql_error());
$commentNum = mysql_num_rows($commentquery);
echo "<h4>" . "Current comment(s)..." . "</h4>";
echo "<b>" . $commentNum . " comment(s) so far.
 Leave a comment..." .
"</b>" . "<br />" . "<br />";
echo "<hr>";
 
while($row = mysql_fetch_array($commentquery))
 {
 echo "<img src=\"komentar/user1.png\" width=\"40px\" height=\"40px\" align=\"right\"><br />";
 echo "<b>" . $row['nama'] . "</b>" . " " . " | " . " " . "<i>" .
$row['date'] . "</i>" . "<br />" . "<br />" . $row['komentar'] . "<br />";
 echo "<hr>";
 }
}
?>
