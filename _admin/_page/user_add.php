<div class="clear"></div>
<div class="full_w">
<div class="h_title">TAMBAH PENGGUNA</div>
<form action="../_mod/mod_user.php?aksi=add" method="post">
	<div class="element">
		<label for="name">Nama Pengguna <span class="red">(required)</span></label>
		<input id="name" name="nama" class="text err" />
	</div>
	<div class="element">
		<label for="name">Username <span class="red">(required)</span></label>
		<input id="sektor" name="username" class="text err" />
	</div>
	<div class="element">
		<label for="name">Password <span class="red">(required)</span></label>
		<input id="password" name="password" class="text err" type="password"/>
	</div>
	<div class="element">
		<label for="name">Hak Akses <span class="red">(required)</span></label>
		<select name="hak_akses" id="hak_akses">
			<option value="admin">Admin</option>
			<option value="member">Kabupaten</option>
      	</select>
	</div>
	<div class="entry">
		<button button type="submit" class="add">Save page</button> <button class="cancel">Cancel</button>
	</div>
</form>
</div