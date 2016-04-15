<?php
	include "../_mod/config.php";
	$idper = $_GET['idper'];
	$sql = mysql_query("select * from kecamatan,perkebunan where idper = $idper and kecamatan.idkec = perkebunan.idkec");
	$data = mysql_fetch_array($sql);
?>
<div class="clear"></div>
<div class="full_w">
<div class="h_title">UBAH SEKTOR PERKEBUNAN</div>
<form action="../_mod/mod_perkebunan1.php?aksi=edit" method="post">
	<div class="element">
		
		<label for="name">Nama Kecamatan <span class="red">(required)</span></label>
		<select name="idkec" id="idkec">
		<option value="<?php echo $data['idkec'];?>"selected="selected"><?php echo $data['nama_kecamatan'];?></option>	 
		<option value='belum milih'>- Pilih Nama Kabupaten -</option>;
	  <?php
	  	$query = "select * from kecamatan order by nama_kecamatan";
		//echo "<option value='belum milih' selected>- Pilih Nama Kapal -</option>";
    	$hasil = mysql_query($query);
    	while($dt=mysql_fetch_array($hasil)){
        echo "<option value=$dt[idkec]>$dt[nama_kecamatan]</option>";
    }
	?>
      </select>
	</div>

	<div class="element">
		<label for="name">Luas Perkebunan <span class="red">(required)</span></label>
		<input id="luas_perkebunan" name="luas_perkebunan" class="text err" value="<?php echo $data ['luas_perkebunan'];?>"/>
		<input type="hidden" name="idper" value="<?php echo $data['idper'];?>" />
	</div>
	<div class="element">
		<label for="name">Jumlah Produksi <span class="red">(required)</span></label>
		<input id="jumlah_produksi" name="jumlah_produksi" class="text err" value="<?php echo $data ['jumlah_produksi'];?>"/>
	</div>
	<div class="element">
		<label for="name">Jumlah PKS <span class="red">(required)</span></label>
		<input id="jumlah_pks" name="jumlah_pks" class="text err" value="<?php echo $data ['jumlah_pks'];?>"/>
	</div>
	<div class="element">
		<label for="name">Tahun <span class="red">(required)</span></label>
		<select name="tahun" id="tahun">
		<option selected><?php echo $data ['tahun'];?></option>
		<?php 
			echo "<option>- Pilih Tahun -</option>";
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