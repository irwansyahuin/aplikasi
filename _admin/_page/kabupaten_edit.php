<?php
	include "../_mod/config.php";
	$idkab = $_GET['idkab'];
	$sql = mysql_query("select * from kabupaten where idkab = $idkab");
	$data = mysql_fetch_array($sql);
?>
<div class="clear"></div>
<div class="full_w">
<div class="h_title">UBAH KABUPATEN</div>
<form action="../_mod/mod_kabupaten.php?aksi=edit" method="post">
	<div class="element">
		<label for="name">Nama kabupaten <span class="red">(required)</span></label>
		<input id="name" name="nama_kabupaten" class="text err" value="<?php echo $data['nama_kabupaten'];?>"/>
		<input type="hidden" name="idkab" value="<?php echo $idkab;?>" />
	</div>
	<div class="element">
		<label for="name">Koordinat X <span class="red">(required)</span></label>
		<input id="x" name="x" class="text err" value="<?php echo $data['x'];?>"/>
		<input type="hidden" id="idkec" name="idkec" class="text err" value="<?php echo $data['idkec'];?>"/>
	</div>
	
	<div class="element">
		<label for="name">Koordinat Y<span class="red">(required)</span></label>
		<input id="y" name="y" class="text err" value="<?php echo $data['y'];?>"/>
	</div>
	<div class="entry">
		<button button type="submit" class="add">Save page</button> <button class="cancel">Cancel</button>
	</div>
</form>
</div