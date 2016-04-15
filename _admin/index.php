<?php
session_start();

if( !isset($_SESSION['saya_admin']) )
{
	header('location:./../'.$_SESSION['akses']);
	exit();
}

$nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Sistem Pendataan Kelapa Sawit di Wilayah Riau</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<p>Welcome, <strong><?php echo $nama;?></strong> [ <a href="../logout.php">logout</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
					<!--<p>Last login: <strong>23-04-2012 23:12</strong></p>-->
				</div>
			</div>
		</div>
		<div id="nav">
		SISTEM PENDATAAAN KELAPA SAWIT DI WILAYAH RIAU
		<!--
			<ul>
				<li class="upp"><a href="#">Main control</a>
					<ul>
						<li>&#8250; <a href="">Visit site</a></li>
						<li>&#8250; <a href="">Reports</a></li>
						<li>&#8250; <a href="">Add new page</a></li>
						<li>&#8250; <a href="">Site config</a></li>
					</ul>
				</li>
				<li class="upp"><a href="#">Manage content</a>
					<ul>
						<li>&#8250; <a href="">Show all pages</a></li>
						<li>&#8250; <a href="">Add new page</a></li>
						<li>&#8250; <a href="">Add new gallery</a></li>
						<li>&#8250; <a href="">Categories</a></li>
					</ul>
				</li>
				<li class="upp"><a href="#">Users</a>
					<ul>
						<li>&#8250; <a href="">Show all uses</a></li>
						<li>&#8250; <a href="">Add new user</a></li>
						<li>&#8250; <a href="">Lock users</a></li>
					</ul>
				</li>
				<li class="upp"><a href="#">Settings</a>
					<ul>
						<li>&#8250; <a href="">Site configuration</a></li>
						<li>&#8250; <a href="">Contact Form</a></li>
					</ul>
				</li>
			</ul>-->
		</div>
	</div>
	
	<div id="content">
		<div id="sidebar">
			<div class="box">
				<div class="h_title">&#8250; Main control</div>
				<ul id="home">
					<li class="b1"><a class="icon view_page" href="?p=home">Home</a></li>
					<li class="b2"><a class="icon report" href="?p=kabupaten">Kabupaten</a></li>
					<li class="b1"><a class="icon report" href="?p=kecamatan">Kecamatan</a></li>
					<li class="b2"><a class="icon report" href="?p=kependudukan">Sektor Kependudukan</a></li>
					<li class="b1"><a class="icon report" href="?p=perkebunan">Sektor Perkebunan</a></li>
				</ul>
			</div>
			
			<div class="box">
				<div class="h_title">&#8250; Manage Data</div>
				<ul>
					<li class="b1"><a class="icon page" href="?p=graph">Grafik Kependudukan</a></li>
					<li class="b2"><a class="icon page" href="?p=graph_perkebunan">Grafik Perkebunan</a></li>
					<li class="b1"><a class="icon add_page" href="?p=table">Tabel Kependudukan</a></li>
					<li class="b2"><a class="icon add_page" href="?p=sektor_perkebunan">Tabel Perkebunan</a></li>
					<!--<li class="b1"><a class="icon photo" href="">Add new gallery</a></li>
					<li class="b2"><a class="icon category" href="">Categories</a></li>-->
				</ul>
			</div>
			<div class="box">
				<div class="h_title">&#8250; Users</div>
				<ul>
					<li class="b1"><a class="icon users" href="?p=user">Pengguna</a></li>
					<li class="b2"><a class="icon add_user" href="?p=ubahpassword">Ubah Password</a></li>
					<!--<li class="b1"><a class="icon block_users" href="">Lock users</a></li>-->
				</ul>
			</div><!--
			<div class="box">
				<div class="h_title">&#8250; Settings</div>
				<ul>
					<li class="b1"><a class="icon config" href="">Site configuration</a></li>
					<li class="b2"><a class="icon contact" href="">Contact Form</a></li>
				</ul>
			</div>-->
		</div>
	
		<div id="main">			
			
		<?php
			$pages_dir = '_page';
			if(!empty($_GET['p'])){
				$pages = scandir($pages_dir, 0);
				unset($pages[0], $pages[1]);
	 
				$p = $_GET['p'];
				if(in_array($p.'.php', $pages)){
					include($pages_dir.'/'.$p.'.php');
				} else {
					echo 'Halaman tidak ditemukan! :(';
				}
			} else {
				include($pages_dir.'/home.php');
			}
		?>
			
		<div class="clear"></div>
		</div>
	<div id="footer">
		<div class="left">
			<p>Design: <a href="#">Irwansyah</a> | Admin Panel: <a href="">irwansyah.blogspot.com</a></p>
		</div>
		<div class="right">
				<!--<p><a href="">Example link 1</a> | <a href="">Example link 2</a></p>-->
		</div>
	</div>
</div>

</body>
</html>
