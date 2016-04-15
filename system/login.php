<?php
session_start();
if( isset($_SESSION['akses']) )
{
	header('location:'.$_SESSION['akses']);
	exit();
}

$error = '';
if( isset($_SESSION['error']) ) {

 	$_SESSION['error']; 

 	unset($_SESSION['error']);
} ?>

<?php echo $error;?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Sistem Informasi Pendataan BPS Riau</title>
<link rel="stylesheet" type="text/css" href="../css/login.css" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="../check-login.php" method="post">
			<h1>Form Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="usernamemu" name="usernamemu"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="passwordmu" name="passwordmu" />
			</div>
			<div>
				<input type="submit" value="Login" />
				<a href="../?p=informasi">Kembali ke web</a>
				<!--<a href="index.php">Back</a>			</div>-->
		</form>
		<!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>