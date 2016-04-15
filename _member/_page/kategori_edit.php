<?php
	include "../_mod/config.php";
	$idkategori = $_GET['idkategori'];
	$sql = mysql_query("select * from tb_kategori where idkategori = $idkategori");
	$data = mysql_fetch_array($sql);
?>
<div class="clear"></div>
<div class="full_w">
<div class="h_title">UBAH KATEGORI</div>
<form action="../_mod/mod_kategori.php?aksi=edit" method="post">
	<div class="element">
		<label for="name">Nama Kategori <span class="red">(required)</span></label>
		<input id="name" name="nama_kategori" class="text err" value="<?php echo $data['nama_kategori'];?>"/>
		<input type="hidden" name="idkategori" value="<?php echo $idkategori;?>" />
	</div>
	<div class="entry">
		<button button type="submit" class="add">Save page</button> <button class="cancel">Cancel</button>
	</div>
</form>
</div