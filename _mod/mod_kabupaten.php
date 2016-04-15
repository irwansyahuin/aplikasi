<?php
include "config.php";
$nama_kabupaten = $_POST['nama_kabupaten'];
$sektor = $_POST['sektor'];
$x = $_POST['x'];
$y = $_POST['y'];

$aksi = $_GET['aksi'];

//echo $nama_kabupaten;

if($aksi=="add"){
	$sql="INSERT INTO kabupaten values ('','$nama_kabupaten','$x','$y')";
	$hasil = $koneksi->query($sql);
if ($hasil) {
	?>
	<script type="text/javascript">
		 self.location="../_admin/index.php?p=kabupaten";
  	</script>
<?php	
}
}elseif($aksi=="edit"){
	$sql = "update kabupaten set nama_kabupaten = '$nama_kabupaten',x = '$x',y='$y' where idkab = {$_POST['idkab']}";
	$hasil = $koneksi->query($sql);
	if($hasil){
?>
<script type="text/javascript">
	self.location="../_admin/index.php?p=kabupaten";
</script>

<?php
}
}elseif($aksi=="delete"){
	$sql = "delete from kabupaten where idkab = {$_GET['idkab']}";
	$hasil = $koneksi->query($sql);
	if($hasil){
?>
<script type="text/javascript">
	self.location="../_admin/index.php?p=kabupaten";
</script>
<?php

}
}
?>