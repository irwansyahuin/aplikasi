<?php
	include "../_mod/config.php";
	$idkep = $_GET['idkep'];
	$sql = mysql_query("select * from kecamatan,kependudukan where idkep = $idkep and kecamatan.idkec = kependudukan.idkec");
	$data = mysql_fetch_array($sql);
?>
<div class="clear"></div>
<div class="full_w">
<div class="h_title">UBAH SEKTOR KEPENDUDUKAN</div>
<form action="../_mod/mod_kependudukan.php?aksi=edit" method="post">
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
		<label for="name">Luas Wilayah <span class="red">(required)</span></label>
		<input id="luas_wilayah" name="luas_wilayah" class="text err" value="<?php echo $data ['luas_wilayah'];?>"/>
		<input type="hidden" name="idkep" value="<?php echo $data['idkep'];?>" />
	</div>
	<div class="element">
		<label for="name">Jumlah Penduduk <span class="red">(required)</span></label>
		<input id="jumlah_penduduk" name="jumlah_penduduk" class="text err" value="<?php echo $data ['jumlah_penduduk'];?>"/>
	</div>
	<div class="element">
		<label for="name">Kepadatan Penduduk <span class="red">(required)</span></label>
		<input id="kepadatan_penduduk" name="kepadatan_penduduk" class="text err" value="<?php echo $data ['kepadatan_penduduk'];?>"/>
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