<?php
include "config.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$hak_akses = $_POST['hak_akses'];
$aksi = $_GET['aksi'];

if($aksi == "add"){
	$sql="INSERT INTO users values ('','$nama','$username','$password','$hak_akses')";
	$hasil = $koneksi->query($sql);
		}if($hasil){
?>
	<script type="text/javascript">
		self.location="../_admin/index.php?p=user";
	</script>
<?php
}else if($aksi=="edit"){
	$sql = "update users set nama = '$nama',username = '$username', hak_akses = '$hak_akses' where idu = {$_POST['idu']}";
	$hasil = $koneksi->query($sql);
		}if($hasil){
?>
<script type="text/javascript">
	self.location="../_admin/index.php?p=user";
</script>

<?php
}elseif($aksi=="delete"){
	$sql = "delete from users where idu = {$_GET['idu']}";
	$hasil = $koneksi->query($sql);
	}if($hasil){
?>
<script type="text/javascript">
	self.location="../_admin/index.php?p=user";
</script>
<?php
}
?>