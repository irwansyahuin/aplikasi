<?php
	include "../_mod/config.php";
	$idkec = $_GET['idkec'];
	$sql = mysql_query("select * from kecamatan,kabupaten where idkec = $idkec and kecamatan.idkab = kabupaten.idkab");
	$data = mysql_fetch_array($sql);
	$idkab = $data['idkab'];
?>
<div class="clear"></div>
<div class="full_w">
<div class="h_title">UBAH KECAMATAN</div>
<form action="../_mod/mod_kecamatan.php?aksi=edit" method="post">
	<div class="element">
		<label for="name">Nama Kecamatan <span class="red">(required)</span></label>
		<select name="idkab" id="idkab">
		<option value="<?php echo $data['idkab'];?>"selected="selected"><?php echo $data['nama_kabupaten'];?></option>	 
		<option value='belum milih'>- Pilih Nama Kabupaten -</option>;


	  <?php
	  	$query = "select * from kabupaten order by nama_kabupaten";
		//echo "<option value='belum milih' selected>- Pilih Nama Kapal -</option>";
    	$hasil = mysql_query($query);
    	while($dt=mysql_fetch_array($hasil)){
        echo "<option value=$dt[idkab]>$dt[nama_kabupaten]</option>";
    }
	?>
      </select>
	</div>
	<div class="element">
		<label for="name">Sektor <span class="red">(required)</span></label>
		<input id="nama_kecamatan" name="nama_kecamatan" class="text err" value="<?php echo $data['nama_kecamatan'];?>"/>
		<input type="hidden" id="idkec" name="idkec" class="text err" value="<?php echo $data['idkec'];?>"/>
	</div><!--
	<div class="element">
		<label for="name">Sektor <span class="red">(required)</span></label>
		<input id="x" name="x" class="text err" value="<?php echo $data['x'];?>"/>
		
	</div>
	
	<div class="element">
		<label for="name">Sektor <span class="red">(required)</span></label>
		<input id="y" name="y" class="text err" value="<?php echo $data['y'];?>"/>
	</div>-->	
	<div class="entry">
		<button button type="submit" class="add">Save page</button> <button class="cancel">Cancel</button>
	</div>
</form>
</div