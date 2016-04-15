<?php
session_start();
require ('../_mod/config.php');
if($_POST){  
$judul 		= $_POST['judul'];
$idkategori = $_POST['kategori'];
$deskripsi 	= $_POST['deskripsi'];
$idprovinsi = $_POST['provinsi'];
$tgl_iklan 	= date("Y-m-d");
$idu 		= $_SESSION['idu'];
$aksi 		= $_GET['aksi'];
$max_size 	= 1024 * 200;
$error 		= array();

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

if(empty($judul)){  
	$error['judul'] = ' || Judul tidak boleh kosong';  
}else if(empty($deskripsi)){  
	$error['deskripsi'] = ' || Deskripsi tidak boleh kosong';  
}else if($size1 > $max_size){  
	$error['foto1'] = 'Max gambar 200 Kb';
}else if($size2 > $max_size){  
	$error['foto2'] = 'Max gambar 200 Kb';
}else if($size3 > $max_size){  
	$error['foto3'] = 'Max gambar 200 Kb';
}else if($size4 > $max_size){  
	$error['foto4'] = 'Max gambar 200 Kb';
}else{
	move_uploaded_file($_FILES['foto1']['tmp_name'], '../_upload/'.$_FILES['foto1']['name']);
	$sql = mysql_query("insert into tb_iklan values ('','$judul','$idkategori','$deskripsi','$foto1','$foto2','$foto3','$foto4','$idprovinsi','$tgl_iklan','$idu')");
?>
	<script language="javascript">
		self.location="../_member/index.php?p=iklan";
	</script>		
<?php
}
}
?>
</script>
<div class="clear"></div>
<div class="full_w">
<div class="h_title">TAMBAH IKLAN</div>
<form action="" method="post" enctype="multipart/form-data" name="iklan">
<div class="element">
	<label for="name">Judul Iklan <span class="red">(required) <?php echo isset($error['judul']) ? $error['judul'] : '';?></span></label>
	<input id="name" name="judul" class="text err" value="<?php echo isset($_POST['judul']) ? $_POST['judul'] : '';?>" /> 
</div>
	<div class="element">
	<label for="category">Kategory <span class="red">(required)</span></label>
	<select name="kategori" class="err">
		<?php
		$q = mysql_query("select * from tb_kategori order by nama_kategori"); //choose the city from indonesia only
		while ($row1 = mysql_fetch_array($q)){
		echo "<option value=$row1[idkategori]>$row1[nama_kategori]</option>";
		}
		?>
	</select>
	</div>
	<div class="element">
	<label for="category">Provinsi <span class="red">(required)</span></label>
	<select name="provinsi" class="err">
		<?php
		$q = mysql_query("select * from tb_provinsi order by nama_provinsi"); //choose the city from indonesia only
		while ($row1 = mysql_fetch_array($q)){
		echo "<option value=$row1[idprovinsi]>$row1[nama_provinsi]</option>";
		}
		?>
	</select>
					</div>
					<div class="element">
						<label for="attach">Gambar (Max 200 kb)</label>
						<input type="file" name="foto1" accept=".gif, .jpg, .png" value="<?php echo isset($_POST['foto1']) ? $_POST['foto1'] : '';?>"/> <span class="red"><?php echo isset($error['foto1']) ? $error['foto1'] : '';?></span><br />
						<input type="file" name="foto2" accept=".gif, .jpg, .png" value="<?php echo isset($_POST['foto2']) ? $_POST['foto2'] : '';?>"/> <span class="red"><?php echo isset($error['foto1']) ? $error['foto2'] : '';?></span><br />
						<input type="file" name="foto3" accept=".gif, .jpg, .png" value="<?php echo isset($_POST['foto3']) ? $_POST['foto3'] : '';?>"/> <span class="red"><?php echo isset($error['foto1']) ? $error['foto3'] : '';?></span><br />
						<input type="file" name="foto4" accept=".gif, .jpg, .png" value="<?php echo isset($_POST['foto4']) ? $_POST['foto4'] : '';?>"/> <span class="red"><?php echo isset($error['foto1']) ? $error['foto4'] : '';?></span><br />
					</div>
					<div class="element">
						<label for="content">Deskripsi <span class="red">(required)<?php echo isset($error['deskripsi']) ? $error['deskripsi'] : '';?></span></label>
						<textarea name="deskripsi" class="textarea" rows="10"><?php echo isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '';?></textarea>
					</div>
					<div class="entry">
						<button type="submit">Preview</button> <button type="submit" class="add" name="upload" id="upload">Save page</button> <button class="cancel">Cancel</button>
					</div>
				</form>
</div

