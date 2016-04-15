<?php
session_start();
require ('../_mod/config.php');
require ('../_mod/paging.php');

$sql = "select * from tb_iklan where idu = '$idu' order by tgl_iklan";
    $query = mysql_query($sql);
	$numrows = mysql_num_rows($query);
	$numperpage = 20; #diisi dengan jumlah baris yang akan ditampilkan / halaman
	$paging = new pagination();
	$pg = $paging->calculate_pages($numrows, $numperpage, $_GET['page']);
	
	//echo $pg['info'];
?>
<div class="full_w">
<div class="h_title">IKLAN</div>
<p><a class="button add" href="?p=iklan_add">Tambah</a>

				<table>
					<thead>
						<tr>
							<th scope="col" width="6%">No</th>
							<th scope="col" width="15%">Tanggal</th>
							<th scope="col">Judul</th>
							<th scope="col" width="50%">Deskripsi</th>
							<th scope="col" style="width: 65px;">Modify</th>
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
							<td><?php echo $data['tgl_iklan']; ?></td>
							<td><?php echo $data['judul']; ?></td>
							<td><?php echo $data['deskripsi']; ?></td>
							<td align="center">
								<a href="?p=provinsi_edit&idiklan=<?php echo $data[idiklan];?>" class="table-icon edit" title="Edit"></a>&nbsp;|&nbsp;
								<!--<a href="#" class="table-icon archive" title="Archive"></a>-->
								<a href="../_mod/mod_provinsi.php?aksi=delete&idiklan=<?php echo $data['idiklan']; ?>" onClick="return confirm('Anda Yakin Akan Menghapus')" class="table-icon delete" title="Delete"></a>
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
						<a href="?p=provinsi&page=<?php echo $pg['previous'];?>">Prev</a>
						<?php
					#show pagination number
					foreach($pg['pages'] as $key=>$value){
				?>
        			<a href="?p=provinsi&page=<?php echo $value;?>" class="page"><?php echo $value;?></a>
       			<?php
					}
				?>
					<a href="?p=provinsi&page=<?php echo $pg['next'];?>"	class="page">Next</a>
					</div>
					<div class="sep"></div>		

</div>
</div>
