<?php include "../_mod/config.php"; ?>
<div class="clear"></div>
<div class="full_w">
<div class="h_title">TAMBAH SEKTOR PERKEBUNAN</div>
<form action="../_mod/mod_perkebunan.php?aksi=add" method="post">
	<div class="element">
		<label for="name">Nama Kecamatan <span class="red">(required)</span></label>
		<select name="idkec" id="idkec">
	  <?php
	  	$query = "select * from kecamatan order by nama_kecamatan";
		echo "<option value='belum milih' selected>- Pilih Nama Kecamatan -</option>";
    	$hasil = mysql_query($query);
    	while($data=mysql_fetch_array($hasil)){
        echo "<option value=$data[idkec]>$data[nama_kecamatan]</option>";
    }
	?>
      </select>
	</div>
	<div class="element">
		<label for="name">Luas Perkebunan <span class="red">(required)</span></label>
		<input id="luas_perkebunan" name="luas_perkebunan" class="text err" />
	</div>
	<div class="element">
		<label for="name">Jumlah Produksi <span class="red">(required)</span></label>
		<input id="jumlah_produksi" name="jumlah_produksi" class="text err" />
	</div>
	<div class="element">
		<label for="name">Jumlah PKS <span class="red">(required)</span></label>
		<input id="jumlah_pks" name="jumlah_pks" class="text err" />
	</div>
	<div class="element">
		<label for="name">Tahun <span class="red">(required)</span></label>
		<select name="tahun" id="tahun">
		<option value='belum milih' selected>- Pilih Tahun -</option>
		<?php 
			for ($i=2015; $i<=2020; $i++){
			echo "<option>$i</option>";
			}
		?>

		</select>
	</div>
	<div class="entry">
		<button button type="submit" class="add">Save page</button> <button class="cancel">Cancel</button>
	</div>
</form>
</div