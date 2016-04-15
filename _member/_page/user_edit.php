<?php
	include "../_mod/config.php";
	$idu = $_GET['idu'];
	$sql = mysql_query("select * from users where idu = $idu");
	$data = mysql_fetch_array($sql);
?>
<div class="clear"></div>
<div class="full_w">
<div class="h_title">UBAH PENGGUNA</div>
<form action="../_mod/mod_user.php?aksi=edit" method="post">
	<div class="element">
		<label for="name">Nama user <span class="red">(required)</span></label>
		<input id="name" name="nama" class="text err" value="<?php echo $data['nama'];?>"/>
		<input type="hidden" name="idu" value="<?php echo $idu;?>" />
	</div>
	<div class="element">
		<label for="name">Username <span class="red">(required)</span></label>
		<input id="username" name="username" class="text err" value="<?php echo $data['username'];?>"/>
	</div><!--
	<div class="element">
		<label for="name">Hak Akses <span class="red">(required)</span></label>
		<select name="hak_akses" id="hak_akses">
			<option><?php echo $data['hak_akses'];?></option>
			<option>admin</option>
			<option>ketua</option>
			<option>panitera</option>
			<option>wapan</option>
			<option>panitia_muda</option>
      	</select>
	</div>-->
	<div class="entry">
		<button button type="submit" class="add">Save page</button> <button class="cancel">Cancel</button>
	</div>
</form>
</div