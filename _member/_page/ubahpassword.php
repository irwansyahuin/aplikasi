<?php
	include "../_mod/config.php";
	$idu = $_SESSION['idu'];
	$sql = mysql_query("select * from users where idu = $idu");
	$data = mysql_fetch_array($sql);
?>
<div class="clear"></div>
<div class="full_w">
<div class="h_title">UBAH USER</div>
<form action="../_mod/mod_password.php?aksi=ubah" method="post">
	<div class="element">
		<label for="name">Nama user <span class="red">(required)</span></label>
		<input id="name" name="nama" class="text err" value="<?php echo $data['nama'];?>"/>
		<input type="hidden" name="idu" value="<?php echo $idu;?>" />
	</div>
	<div class="element">
		<label for="name">Username <span class="red">(required)</span></label>
		<input id="username" name="username" class="text err" value="<?php echo $data['username'];?>"/>
	</div>
	<div class="element">
		<label for="name">Password Lama <span class="red">(required)</span></label>
		<input id="password" name="password" class="text err" value="<?php echo $data['password'];?>" type="password" readonly=""/>
	</div>
	<div class="element">
		<label for="name">Password Baru<span class="red">(required)</span></label>
		<input id="password_baru" name="password_baru" class="text err" type="password"/>
	</div>
	<div class="entry">
		<button button type="submit" class="add">Save page</button> <button class="cancel">Cancel</button>
	</div>
</form>
</div