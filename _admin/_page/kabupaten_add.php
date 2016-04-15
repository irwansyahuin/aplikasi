<div class="clear"></div>
<div class="full_w">
<div class="h_title">TAMBAH KABUPATEN</div>
<form action="../_mod/mod_kabupaten.php?aksi=add" method="post">
	<div class="element">
		<label for="name">Nama Kabupaten <span class="red">(required)</span></label>
		<input id="name" name="nama_kabupaten" class="text err" />
	</div>
	<div class="element">
		<label for="name">Koordinat X <span class="red">(required)</span></label>
		<input id="x" name="x" class="text err" />
	</div>
	<div class="element">
		<label for="name">Koordinat Y <span class="red">(required)</span></label>
		<input id="y" name="y" class="text err" />
	</div>
	<div class="entry">
		<button button type="submit" class="add">Save page</button> <button class="cancel">Cancel</button>
	</div>
</form>
</div