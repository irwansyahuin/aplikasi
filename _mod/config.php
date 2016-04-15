<?php
/**
 * Nama File : Config.php
 * File Ini berisi beberapa data penting seperti
 * Data koneksi ke database
 * Secret Kode
 * dan data lain yang nantinya akan digunakan secara terus-menerus
 */
 
 # rubahlah sesuai alamat website kamu
 $url    = 'http://localhost/sip';

 # host untuk database, biasanya 'localhost'
 $dbhost = 'localhost';
 
 # username untuk mengakses database, jika dilokal biasanya 'root'
 $dbuser = 'root';

 # password untuk mengakses databae, jika dilokal biasanya kosong
 $dbpass = 'sisjoko';

 # nama database yang akan digunakan
 $dbname = 'db_sip';
 
 # koneksi Database
 $koneksi = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
 
 # Check koneksi, berhasil atau tidak
 if( $koneksi->connect_error )
 {
 	die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
 }

 $url = rtrim($url,'/');

mysql_connect($dbhost,$dbuser,$dbpass) or die("Koneksi gagal");
mysql_select_db($dbname) or die("Database tidak bisa dibuka");
?>