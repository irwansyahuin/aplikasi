<?php
session_start();
include "config.php";
$judul 		= $_POST['judul'];
$idkategori = $_POST['kategori'];
$deskripsi 	= $_POST['deskripsi'];
$idprovinsi = $_POST['provinsi'];
$tgl_iklan 	= date("Y-m-d");
$idu 		= $_SESSION['idu'];
$aksi 		= $_GET['aksi'];
$max_size 	= 200000;

$temp1		= $_FILES['foto1']['tmp_name'];
$foto1 		= $_FILES['foto1']['name'];
$size1		= $_FILES['foto1']['size'];

//$lokasi1	= "../_upload/".$name1;

$temp2		= $_FILES['foto2']['tmp_name'];
$foto2 		= $_FILES['foto2']['name'];
move_uploaded_file($_FILES['foto2']['tmp_name'], '../_upload/'.$_FILES['foto2']['name']);
//$lokasi2	= "../_upload/".$name1;

$temp3		= $_FILES['foto3']['tmp_name'];
$foto3 		= $_FILES['foto3']['name'];
move_uploaded_file($_FILES['foto3']['tmp_name'], '../_upload/'.$_FILES['foto3']['name']);
//$lokasi3	= "../_upload/".$name1;

$temp4		= $_FILES['foto4']['tmp_name'];
$foto4 		= $_FILES['foto4']['name'];
move_uploaded_file($_FILES['foto4']['tmp_name'], '../_upload/'.$_FILES['foto4']['name']);
//$lokasi4	= "../_upload/".$name1;


if($aksi == "add"){
		if ($size1 > $max_size) {
			echo "Ukuran gambar max adalah 200 KB";
		}else{
			$sql = mysql_query("insert into tb_iklan values ('','$judul','$idkategori','$deskripsi','$foto1','$foto2','$foto3','$foto4','$idprovinsi','$tgl_iklan','$idu')");
			move_uploaded_file($_FILES['foto1']['tmp_name'], '../_upload/'.$_FILES['foto1']['name']);
		}
	//echo $deskripsi;
}

?> 