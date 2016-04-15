<?php
include "config.php";
$nama_kecamatan = $_POST['nama_kecamatan'];
$x = $_POST['x'];
$y = $_POST['y'];
$idkab = $_POST['idkab'];
//$idkec = $_POST['idkec'];
$aksi = $_GET['aksi'];

//echo $nama_kecamatan;

if($aksi=="add"){
	$sql="INSERT INTO kecamatan values ('','$idkab','$nama_kecamatan')";
	$hasil = $koneksi->query($sql);
if ($hasil) {
	?>
	<script type="text/javascript">
		 self.location="../_member/index.php?p=kecamatan";
  	</script>
<?php	
}
}elseif($aksi=="edit"){
	$sql = "update kecamatan set idkab='$idkab',nama_kecamatan = '$nama_kecamatan' where idkec = {$_POST['idkec']}";
	$hasil = $koneksi->query($sql);
	if($hasil){
?>
<script type="text/javascript">
	self.location="../_member/index.php?p=kecamatan";
</script>

<?php
}
}elseif($aksi=="delete"){
	$sql = "delete from kecamatan where idkec = {$_GET['idkec']}";
	$hasil = $koneksi->query($sql);
	if($hasil){
?>
<script type="text/javascript">
	self.location="../_member/index.php?p=kecamatan";
</script>
<?php

}
}
?>