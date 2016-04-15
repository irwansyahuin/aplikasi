<?php
include "../_mod/config.php";
include "../_mod/paging.php";
	$tahun = $_POST['tahun'];
	$idkab = $_POST['idkab'];
$sql = "select * from kecamatan,kabupaten,kependudukan where kecamatan.idkab = kabupaten.idkab and kependudukan.idkec = kecamatan.idkec and kependudukan.tahun = '$tahun' and kabupaten.idkab='$idkab'";
    $query = mysql_query($sql);
	$numrows = mysql_num_rows($query);
	$numperpage = 20; #diisi dengan jumlah baris yang akan ditampilkan / halaman
	$paging = new pagination();
	$pg = $paging->calculate_pages($numrows, $numperpage, $_GET['page']);
	
	//echo $tahun."-".$idkab;
	//echo $pg['info'];
?>
<div class="full_w">
<div class="h_title">SEKTOR KEPENDUDUKAN</div>

				<table>
					<thead>
						<tr>
							<th scope="col" width="6%">No</th>
							<th scope="col">Nama Kecamatan</th>
							<th scope="col">Luas Wilayah</th>
							<th scope="col">Jumlah Penduduk</th>
							<th scope="col">Kepadatan Penduduk</th>
							<th scope="col">Tahun</th>
							<th scope="col" style="width: 65px;">Detail</th>
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
							<td><?php echo $data['nama_kecamatan']; ?></td>
							<td><?php echo $data['luas_wilayah']; ?></td>
							<td><?php echo $data['jumlah_penduduk']; ?></td>
							<td><?php echo $data['kepadatan_penduduk']; ?></td>
							<td><?php echo $data['tahun']; ?></td>
							<td align="center">
							<a href="?p=peta&x=<?php echo $data['x']."&y=".$data['y'];?>">Lihat Detail</a>
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
						<a href="?p=cari_kep&page=<?php echo $pg['previous'];?>">Prev</a>
						<?php
					#show pagination number
					foreach($pg['pages'] as $key=>$value){
				?>
        			<a href="?p=cari_kep&page=<?php echo $value;?>" class="page"><?php echo $value;?></a>
       			<?php
					}
				?>
					<a href="?p=cari_kep&page=<?php echo $pg['next'];?>"	class="page">Next</a>
					</div>
					<div class="sep"></div>		

</div>
</div>
