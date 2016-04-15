<?php 
	include "_mod/config.php"; 
	if(!empty($_GET['p']) and $_GET['p']=='table'){
?>
<div class="header_01">
	<div align="justify">TABEL SEKTOR KEPENDUDUKAN</div>
</div>
<form action="?p=cari_kep" method="post" id="cari_kependudukan" name="cari_kependudukan">
	<div class="element">
		<label for="name">Tahun / Nama Kabupaten <span class="red">
		<select name="tahun" id="tahun">
		<option value='belum milih' selected>- Pilih Tahun -</option>
		<?php 
			for ($i=2015; $i<=2020; $i++){
			echo "<option>$i</option>";
			}
		?>

		</select>
		 / 
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
<br />
	<div class="entry">
		<button button type="submit" class="add">Cari Data</button> <button class="cancel">Cancel</button>
	</div>
</form>

<?php
}
?>