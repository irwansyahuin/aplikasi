<?php
include "config.php";
$idkec = $_POST['idkec'];
$luas_wilayah = $_POST['luas_wilayah'];
$jumlah_penduduk = $_POST['jumlah_penduduk'];
$kepadatan_penduduk = $_POST['kepadatan_penduduk'];
$tahun = $_POST['tahun'];
$aksi = $_GET['aksi'];

//echo $nama_kecamatan;

if($aksi=="add"){
	$cek = mysql_num_rows(mysql_query("select * from kependudukan where tahun = '$tahun' and idkec = '$idkec'"));	
	if($cek > 0){
		echo "Data sudah ada, silahkan pilih tahun yang lain";
		exit();
	}else{
	$sql="INSERT INTO kependudukan values ('','$idkec','$luas_wilayah','$jumlah_penduduk','$kepadatan_penduduk','$tahun')";
	$hasil = $koneksi->query($sql);
if ($hasil) {
	?>
	<script type="text/javascript">
		 self.location="../_member/index.php?p=kependudukan";
  	</script>
<?php	
}}
}elseif($aksi=="edit"){
	$sql = "update kependudukan set idkec='$idkec',luas_wilayah = '$luas_wilayah',jumlah_penduduk = '$jumlah_penduduk',kepadatan_penduduk='$kepadatan_penduduk',tahun='$tahun' where idkep = {$_POST['idkep']}";
	$hasil = $koneksi->query($sql);
	if($hasil){
?>
<script type="text/javascript">
	self.location="../_member/index.php?p=kependudukan";
</script>

<?php
}
}elseif($aksi=="delete"){
	$sql = "delete from kependudukan where idkep = {$_GET['idkep']}";
	$hasil = $koneksi->query($sql);
	if($hasil){
?>
<script type="text/javascript">
	self.location="../_member/index.php?p=kependudukan";
</script>
<?php

}
}
?>