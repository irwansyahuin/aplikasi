<?php include "../_mod/config.php"; ?>
<div class="clear"></div>
<div class="full_w">
<div class="h_title">TABEL SEKTOR KEPENDUDUKAN</div>
<form action="?p=cari_kep" method="post" id="cari_kependudukan" name="cari_kependudukan">
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
	<div class="entry">
		<button button type="submit" class="add">Cari Data</button> <button class="cancel">Cancel</button>
	</div>
</form>
</div