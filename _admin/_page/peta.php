<?php
$x = $_GET['x'];
$y = $_GET['y'];
?>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    
    <!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
    // memanggil library Geocoder
    var geocoder = new google.maps.Geocoder();
	var map;
	// memanggil library Infowindow untuk memunculkan infowindow pada marker
	var infowindow = new google.maps.InfoWindow();
	var marker;
 
	// kita munculkan peta default 
	function initialize() {
  		map = new google.maps.Map(document.getElementById('map-canvas'), {
        	zoom: 12,
        	// posisi default ada di kota Bandung
        	center: {lat: <?php echo $x;?>, lng: <?php echo $y;?>}
      	});
	}
 
	function codeLatLng() {
		// ambil value dari combobox
		var input = document.getElementById('latlng').value;
		var latlngStr = input.split(',', 2);
		var latlng = new google.maps.LatLng(latlngStr[0], latlngStr[1]);
		// cari lokasi dari latitude dan longitude
		geocoder.geocode({'location': latlng}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				// jika berhasil, map akan secara automatis berpindah ke koordinat tersebut
				if (results[1]) {
			    	map.setZoom(13);
			    	map.setCenter(latlng)
			    	marker = new google.maps.Marker({
			      		position: latlng,
			      		map: map
			    	});
			    	infowindow.setContent(results[1].formatted_address);
			    	infowindow.open(map, marker);
			  	} else {
			    	window.alert('No results found');
			  	}
			} else {
				window.alert('Geocoder failed due to: ' + status);
			}
		});
	}
 
	google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Geocoder Reverse</h3>
				<hr />
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
		    	<div id="map-canvas" style="width:100%; height:500px;"></div>
		    </div>
		    <div class="col-lg-4"><!--
		    	<div class="form-vertical">
		    		<div class="form-group">
			    		<label>Koordinat</label>
			    		<select id="latlng" class="form-control">
			    			<option value="-6.9147444,107.6098111">Kota Bandung (-6.9147444,107.6098111)</option>
			    			<option value="-6.982118274,107.5192585">Kabupaten Bandung (-6.982118274,107.5192585)</option>
			    			<option value="-6.5712842,107.7596912">Kabupaten Subang (-6.5712842,107.7596912)</option>
			    			<option value="-6.5614,107.4438">Kabupaten Purwakarta (-6.5614,107.4438)</option>
			    			<option value="-7.2483974,107.9096516">Kabupaten Garut (-7.2483974,107.9096516)</option>
			    		</select>
		    		</div>
		    		<div class="form-group">
			    		<button class="btn btn-primary" id="geocode" onclick="codeLatLng()">Cari Nama Lokasi</button>
		    		</div>-->
		    	</div>
		    </div>
	    </div>
	</div>
</body>
</html>