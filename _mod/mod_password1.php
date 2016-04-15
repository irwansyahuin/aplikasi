<?php
include "config.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$password_baru = md5($_POST['password_baru']);

$aksi = $_GET['aksi'];


if($aksi=="edit"){
	if($password_baru=="d41d8cd98f00b204e9800998ecf8427e"){
		$sql = "update users set nama = '$nama',username = '$username' where idu = {$_POST['idu']}";
		$hasil = $koneksi->query($sql);
	}else{
		$sql = "update users set nama = '$nama',username = '$username',password = '$pasword_baru' where idu = {$_POST['idu']}";
		$hasil = $koneksi->query($sql);
	}if($hasil){
?>
<script type="text/javascript">
	self.location="../_member/index.php?p=ubahpassword";
</script>

<?php
}
}elseif($aksi=="ubah"){
	if($password_baru=="d41d8cd98f00b204e9800998ecf8427e"){
		$sql = "update users set nama = '$nama',username = '$username' where idu = {$_POST['idu']}";
		$hasil = $koneksi->query($sql);
	}else{
		$sql = "update users set nama = '$nama',username = '$username',password='$password_baru' where idu = {$_POST['idu']}";
		$hasil = $koneksi->query($sql);
	}if($hasil){
	?>
		<script type="text/javascript">
			self.location="../_member/index.php?p=ubahpassword";
		</script>
<?php
	}
}
?>