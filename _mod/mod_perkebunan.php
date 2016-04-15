<?php
include "config.php";
$idkec = $_POST['idkec'];
$luas_perkebunan = $_POST['luas_perkebunan'];
$jumlah_produksi = $_POST['jumlah_produksi'];
$jumlah_pks = $_POST['jumlah_pks'];
$tahun = $_POST['tahun'];
$aksi = $_GET['aksi'];

//echo $nama_kecamatan;

if($aksi=="add"){
	$cek = mysql_num_rows(mysql_query("select * from perkebunan where tahun = '$tahun' and idkec = '$idkec'"));	
	if($cek > 0){
		echo "Data sudah ada, silahkan pilih tahun yang lain";
		exit();
	}else{
	$sql="INSERT INTO perkebunan values ('','$idkec','$luas_perkebunan','$jumlah_produksi','$jumlah_pks','$tahun')";
	$hasil = $koneksi->query($sql);
if ($hasil) {
	?>
	<script type="text/javascript">
		 self.location="../_admin/index.php?p=perkebunan";
  	</script>
<?php	
}}
}elseif($aksi=="edit"){
	$sql = "update perkebunan set idkec='$idkec',luas_perkebunan = '$luas_perkebunan',jumlah_produksi = '$jumlah_produksi',jumlah_pks='$jumlah_pks',tahun='$tahun' where idper = {$_POST['idper']}";
	$hasil = $koneksi->query($sql);
	if($hasil){
?>
<script type="text/javascript">
	self.location="../_admin/index.php?p=perkebunan";
</script>

<?php
}
}elseif($aksi=="delete"){
	$sql = "delete from perkebunan where idper = {$_GET['idper']}";
	$hasil = $koneksi->query($sql);
	if($hasil){
?>
<script type="text/javascript">
	self.location="../_admin/index.php?p=perkebunan";
</script>
<?php

}
}
?>