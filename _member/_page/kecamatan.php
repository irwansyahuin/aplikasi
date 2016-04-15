<?php
session_start();
require ('../_mod/config.php');
require ('../_mod/paging.php');

$sql = "select * from kecamatan,kabupaten where kecamatan.idkab = kabupaten.idkab order by nama_kabupaten";
    $query = mysql_query($sql);
	$numrows = mysql_num_rows($query);
	$numperpage = 20; #diisi dengan jumlah baris yang akan ditampilkan / halaman
	$paging = new pagination();
	$pg = $paging->calculate_pages($numrows, $numperpage, $_GET['page']);
	
	//echo $pg['info'];
?>
<div class="full_w">
<div class="h_title">KECAMATAN</div>
<p><a class="button add" href="?p=kecamatan_add">Tambah</a>

				<table>
					<thead>
						<tr>
							<th scope="col" width="6%">No</th>
							<th scope="col">Nama Kabupaten</th>
							<th scope="col">Nama Kecamatan</th>
							<!--<th scope="col">Koordinat X</th>
							<th scope="col">Koordinat Y</th>-->
							<th scope="col" style="width: 65px;">Proses</th>
						</tr>
					</thead>
<?php
    $sql .= " {$pg['limit']}";
    $query = mysql_query($sql);
    $no = 1;
    while ($data = mysql_fetch_array($query)) {
?>
					<tbody>
						<tr>
							<td class="align-center"><?php echo $no; ?></td>
							<td><?php echo $data['nama_kabupaten']; ?></td>
							<td><?php echo $data['nama_kecamatan']; ?></td>
							<!--<td><?php echo $data['x']; ?></td>
							<td><?php echo $data['y']; ?></td>-->
							<td align="center">
								<a href="?p=kecamatan_edit&idkec=<?php echo $data[idkec];?>" class="table-icon edit" title="Edit"></a>&nbsp;|&nbsp;
								<!--<a href="#" class="table-icon archive" title="Archive"></a>-->
								<a href="../_mod/mod_kecamatan.php?aksi=delete&idkec=<?php echo $data['idkec']; ?>" onClick="return confirm('Anda Yakin Akan Menghapus')" class="table-icon delete" title="Delete"></a>
							</td>
						</tr>
					</tbody>
<?php
$no++;
}
?>
				</table>
				<div class="entry">
					<div class="pagination">
						<a href="?p=kecamatan&page=<?php echo $pg['previous'];?>">Prev</a>
						<?php
					#show pagination number
					foreach($pg['pages'] as $key=>$value){
				?>
        			<a href="?p=kecamatan&page=<?php echo $value;?>" class="page"><?php echo $value;?></a>
       			<?php
					}
				?>
					<a href="?p=kecamatan&page=<?php echo $pg['next'];?>"	class="page">Next</a>
					</div>
					<div class="sep"></div>		

</div>
</div>
