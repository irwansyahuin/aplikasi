<?php include "../_mod/config.php"; ?>
<div class="clear"></div>
<div class="full_w">
<div class="h_title">TAMBAH KECAMATAN</div>
<form action="../_mod/mod_kecamatan.php?aksi=add" method="post">
	<div class="element">
		<label for="name">Nama Kabupaten <span class="red">(required)</span></label>
		<select name="idkab" id="idkab">
	  <?php
	  	$query = "select * from kabupaten order by nama_kabupaten";
		echo "<option value='belum milih' selected>- Pilih Nama Kabupaten -</option>";
    	$hasil = mysql_query($query);
    	while($data=mysql_fetch_array($hasil)){
        echo "<option value=$data[idkab]>$data[nama_kabupaten]</option>";
    }
	?>
      </select>
	</div>
	<div class="element">
		<label for="name">Nama Kecamatan <span class="red">(required)</span></label>
		<input id="name" name="nama_kecamatan" class="text err" />
	</div><!--
	<div class="element">
		<label for="name">Koordinat X <span class="red">(required)</span></label>
		<input id="x" name="x" class="text err" />
	</div>
	<div class="element">
		<label for="name">Koordinat Y <span class="red">(required)</span></label>
		<input id="y" name="y" class="text err" />
	</div>-->
	<div class="entry">
		<button button type="submit" class="add">Save page</button> <button class="cancel">Cancel</button>
	</div>
</form>
</div