<?php
session_start();
require ('../_mod/config.php');
$idkab = $_POST['idkab'];
$tahun = $_POST['tahun'];
?>
<html>
<head>
<script src="js/js/jquery.min.js" type="text/javascript"></script>
<script src="js/js/highcharts.js" type="text/javascript"></script>
<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'Sektor Perkebunan <br> Luas Perkebunan (KM2) Tahun ...'
         },
         xAxis: {
            categories: ['Grafik']
         },
         yAxis: {
            title: {
               text: 'Luas Wilayah (Km2)'
            }
         },
              series:             
            [
            <?php 
           $sql   = "SELECT * FROM kecamatan where idkab='$idkab'";
            $query = mysql_query( $sql )  or die(mysql_error());
            while( $ret = mysql_fetch_array( $query ) ){
            	$nama_kecamatan=$ret['nama_kecamatan'];  
				$idkec = $ret['idkec'];                   
                 $sql_jumlah   = "SELECT sum(luas_perkebunan) as luas_perkebunan from perkebunan,kecamatan where perkebunan.idkec = '$idkec' and tahun='$tahun' and kecamatan.idkec = perkebunan.idkec";        
                 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
                 while( $data = mysql_fetch_array( $query_jumlah ) ){
                    $jumlah = $data['luas_perkebunan'];                 
                  }             
                  ?>
                  {
                      name: '<?php echo $nama_kecamatan; ?>',
                      data: [<?php echo $jumlah; ?>]
                  },
                  <?php } ?>
            ]
      });
   });	
</script>
	</head>
	
	<body>
	<div class="full_w">
<div class="h_title">GRAFIK</div>
<form action="?p=grafik_perkebunan" method="post">
	<div class="element">
		<label for="name">Tahun <span class="red">(required)</span></label>
		<select name="tahun" id="tahun">
		<option value='belum milih' selected>- Pilih Tahun -</option>
		<?php 
			for ($i=2015; $i<=2020; $i++){
			echo "<option>$i</option>";
			}
		?>

		</select>
	</div>
	<div class="element">
		<label for="name">Nama Kabupaten <span class="red">(required)</span></label>
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
	<div class="entry">
		<button button type="submit" class="add">Cari</button> <button class="cancel">Cancel</button>
	</div>
	
</form>
<div class="sep"></div>	
</div>
		<div id='container'></div>	
	</div>	
	</body>
