<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
  echo "<center>Untuk mengakses modul, Anda harus login !<br />
		<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Administrator</title>
	<link type="text/css" rel="stylesheet" href="css/style2.css" />
	<link type="text/css" rel="stylesheet" href="css/nav.css" />
	<script language="javascript" type="text/javascript">
		tinyMCE_GZ.init({
		plugins : 'style,layer,table,save,advhr,advimage, ...',
			themes  : 'simple,advanced',
			languages : 'en',
			disk_cache : true,
			debug : false
	});
	</script>
	<script language="javascript" type="text/javascript" src="../tinymcpuk/tiny_mce_src.js"></script>
	<script type="text/javascript">
		tinyMCE.init({
			mode : "textareas",
			theme : "advanced",
			plugins : "table,youtube,advhr,advimage,advlink,emotions,flash,searchreplace,paste,directionality,noneditable,contextmenu",
			theme_advanced_buttons1_add : "fontselect,fontsizeselect",
			theme_advanced_buttons2_add : "separator,preview,zoom,separator,forecolor,backcolor,liststyle",
			theme_advanced_buttons2_add_before: "cut,copy,paste,separator,search,replace,separator",
			theme_advanced_buttons3_add_before : "tablecontrols,separator,youtube,separator",
			theme_advanced_buttons3_add : "emotions,flash",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			extended_valid_elements : "hr[class|width|size|noshade]",
			file_browser_callback : "fileBrowserCallBack",
			paste_use_dialog : false,
			theme_advanced_resizing : true,
			theme_advanced_resize_horizontal : false,
			theme_advanced_link_targets : "_something=My somthing;_something2=My somthing2;_something3=My somthing3;",
			apply_source_formatting : true
		});

		function fileBrowserCallBack(field_name, url, type, win) {
			var connector = "../../filemanager/browser.html?Connector=connectors/php/connector.php";
			var enableAutoTypeSelection = true;
			
			var cType;
			tinymcpuk_field = field_name;
			tinymcpuk = win;
			
			switch (type) {
				case "image":
					cType = "Image";
					break;
				case "flash":
					cType = "Flash";
					break;
				case "file":
					cType = "File";
					break;
			}
			
			if (enableAutoTypeSelection && cType) {
				connector += "&Type=" + cType;
			}
			
			window.open(connector, "tinymcpuk", "modal,width=600,height=400");
		}
	</script>
</head>
<body>
<div id="wrapper">
	<div id="header"></div>
	<nav class="main-nav clearfix">
        <!-- MAIN NAVIGATION -->
        <div class="menu-div">
			<ul>
				<li>
					<a href="media.php?module=home">Menu Utama</a>
					<ul>
						<li><a href="media.php?module=home">Control Panel</a></li> 
						<li><a href="../home.php" target="_blank">Lihat Web</a></li>
						<li><a href="media.php?module=profil">Profil Web</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Modul User</a>
					<ul>
						<li><a href="media.php?module=password">Ganti Password</a></li>
						<li><a href="media.php?module=bukutamu">Buku Tamu</a></li>                                                 
					</ul>
				</li>
				<li><a href="media.php?module=laporan">Laporan Komentar</a></li>
				<li>
					<a href="#">Modul Web</a>
					<ul>
						<li><a href="media.php?module=hubungi">Hubungi Kami</a></li>
						<li><a href="media.php?module=banner">Banner</a></li>
						<li><a href="media.php?module=ym">Modul YM</a></li>
						<li><a href="media.php?module=upload">Upload</a></li>
					</ul>
				</li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
    </nav>
	<div id="content"><?php include "content.php"; ?></div>
	<div id="footer">
		<p> By Us. All Rights Reserved</p>
	</div>
</div>
<script src="js/jquery-1.8.2.min.js"></script>          <script src="js/custom.js"></script>
</body>
</html>
<?php
}
?>