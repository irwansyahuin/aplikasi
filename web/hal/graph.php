<?php
require ('_mod/config.php');
if(!empty($_GET['p']) and $_GET['p']=='graph'){ 
?>
<div class="full_w">
<div class="header_01">
  <div align="justify">GRAFIK KEPENDUDUKAN</div>
</div>
<form action="?p=grafik" method="post">
	<div class="element">
		<label for="name">Tahun / Nama Kabupaten 
		<select name="tahun" id="tahun">
		<option value='belum milih' selected>- Pilih Tahun -</option>
		<?php 
			for ($i=2015; $i<=2020; $i++){
			echo "<option>$i</option>";
			}
		?>

		</select>
	
		<select name="idkab" id="idkab">
	  <?php
	  	$query = "select * from kabupaten order by nama_kabupaten";
		echo "<option value='belum milih' selected>- Pilih Nama kabupaten -</option>";
    	$hasil = mysql_query($query);
    	while($data=mysql_fetch_array($hasil)){
        echo "<option value=$data[idkab]>$data[nama_kabupaten]</option>";
    }
	?>
      </select>
	 </div>
	<br /><br />
	<div class="entry">
		<button button type="submit" class="add">Cari</button> <button class="cancel">Cancel</button>
	</div>
</form>
<div class="sep"></div>	
</div>
<?php
}
?>