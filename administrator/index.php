<!DOCTYPE html>
<html>
<head>
<title>Login Administrator</title>
<link rel="stylesheet" type="text/css" href="css/style_login.css" />

<script type="text/javascript">
function validasi(form){
if (form.username.value == ""){
alert("Anda belum mengisikan Username");
form.username.focus();
return (false);
}
     
if (form.password.value == ""){
alert("Anda belum mengisikan Password");
form.password.focus();
return (false);
}
return (true);
}
</script>

</head>

<body OnLoad="document.login.username.focus();">
<div id="wrapper">
	<div id="header"><h1>Login Administrator</h1></div>
	<div id="middle">
		<form id="form-login" name="login" method="post" action="cek_login.php" onSubmit="return validasi(this)">
		  
		  <img src="images/images_login/img_login_user.png" align="absmiddle" class="img_user" alt="user" />
		  <input type="text" name="username" size="30" id="input" />
		  <br />
			
		  <img src="images/images_login/img_login_pass.png" align="absmiddle" class="img_pass" alt="password" />
		  <input type="password" name="password" size="30" id="input" />
		  <br />
		  
		  <input name="Submit" type="image" value="Submit" src="images/images_login/button_login.png" id="submit" align="absmiddle" />
		</form>
	</div>
	<div class="clear"></div>
	<div id="footer">By <strong>Us</strong></div>
</div>
</body>
</html>


