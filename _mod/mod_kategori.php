<?php
include "config.php";
$nama_kategori = $_POST['nama_kategori'];
$aksi = $_GET['aksi'];

//echo $nama_kategori;

if($aksi=="add"){
	$sql="INSERT INTO tb_kategori values ('','$nama_kategori')";
	$hasil = $koneksi->query($sql);
if ($hasil) {
	?>
	<script type="text/javascript">
		 self.location="../_admin/index.php?p=kategori";
  	</script>
<?php	
}
}elseif($aksi=="edit"){
	$sql = "update tb_kategori set nama_kategori = '$nama_kategori' where idkategori = {$_POST['idkategori']}";
	$hasil = $koneksi->query($sql);
	if($hasil){
?>
<script type="text/javascript">
	self.location="../_admin/index.php?p=kategori";
</script>

<?php
}
}elseif($aksi=="delete"){
	$sql = "delete from tb_kategori where idkategori = {$_GET['idkategori']}";
	$hasil = $koneksi->query($sql);
	if($hasil){
?>
<script type="text/javascript">
	self.location="../_admin/index.php?p=kategori";
</script>
<?php

}
}
?>