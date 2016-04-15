<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Pendataan Kelapa Sawit di Wilayah Riau</title>
<meta name="keywords" content="Global Website Template, XHTML CSS" />
<meta name="description" content="Global Website Template, XHTML CSS layout" />
<link href="web/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_container">
<!--  Free Web Templates @ www.TemplateMo.com  -->
	<div id="content_left">
        <div id="site_title">
        	<div id="site_name">
            	BPS</div>
            <div id="site_slogan">
            	Kependudukan dan Perkebunan</div>
        </div>	
        
        <div id="templatemo_menu">
            <ul>
                <li><a href="?p=informasi" <?php if(!empty($_GET['p']) and $_GET['p']=='informasi'){ echo "class=\"current\""; }else{ echo "";} ?>><span></span>Home</a></li>
                <li><a href="?p=pusat_layanan" <?php if(!empty($_GET['p']) and $_GET['p']=='pusat_layanan'){ echo "class=\"current\""; }else{ echo "";}?>>Pusat Layanan</a></li>
              <li><a href="?p=rencana_strategis" <?php if(!empty($_GET['p']) and $_GET['p']=='rencana_strategis'){ echo "class=\"current\""; }else{ echo "";}?>>Rencana Strategis</a></li>
              <li><a href="?p=table" <?php if(!empty($_GET['p']) and $_GET['p']=='table' or $_GET['p']=='cari_kep' or $_GET['p']=='peta' ){ echo "class=\"current\""; }else{ echo "";}?>>Tabel Kependudukan</a></li>
           	  <li><a href="?p=sektor_perkebunan" <?php if(!empty($_GET['p']) and $_GET['p']=='sektor_perkebunan' or $_GET['p']=='cari_per' or $_GET['p']=='peta_perkebunan' ){ echo "class=\"current\""; }else{ echo "";}?>>Tabel Perkebunan</a></li>                
                <li><a href="?p=graph" <?php if(!empty($_GET['p']) and $_GET['p']=='graph' or $_GET['p']=='grafik' or $_GET['p']=='peta_perkebunan' ){ echo "class=\"current\""; }else{ echo "";}?>>Grafik Kependudukan</a></li> 
				<li><a href="?p=graph_perkebunan" <?php if(!empty($_GET['p']) and $_GET['p']=='graph_perkebunan' or $_GET['p']=='grafik_perkebunan' ){ echo "class=\"current\""; }else{ echo "";}?>>Grafik Perkebunan</a></li>   
          </ul>
	    </div> 
        
       
        <div class="margin_bottom_40"></div>
        
        <!-- end of menu -->
    </div> <!-- end of content left -->
    
    <div id="content_right">
    	<div id="top_menu">
        	<ul>
                <!--<li><a href="#" class="rss">Subscribe RSS</a></li>-->
                <li><a href="index.php">Home</a></li>
                <li><a href="?p=informasi">Informasi Umum</a></li>
                <li><a href="system/login.php">Login</a></li>
			</ul>
        </div>
        
        <div id="template_banner">
        	<div class="header">Your Choice</div>
          <p>Bagi semua pihak yang telah berpartisipasi mewujudkan Renstra BPS Tahun 2015–2019 disampaikan penghargaan dan terima kasih atas segala masukan dan sumbangan pemikiran hingga tersusunnya Renstra BPS Tahun 2015–2019.</p>
            
            <div class="rc_btn_01"><a href="?p=informasi">Learn more...</a></div>
        </div>
        <div class="margin_bottom_50"></div>
        
        <div class="section_w600">
      			 <?php
			$pages_dir = 'web/hal';
			if(!empty($_GET['p'])){
				$pages = scandir($pages_dir, 0);
				unset($pages[0], $pages[1]);
	 
				$p = $_GET['p'];
				if(in_array($p.'.php', $pages)){
					include($pages_dir.'/'.$p.'.php');
				} else {
					echo 'Halaman tidak ditemukan! :(';
				}
			} else {
				include($pages_dir.'/informasi.php');
			}
		?>
        </div>
        
        <div class="margin_bottom_30"></div>
    </div> <!-- end of content right -->
	
    <div class="cleaner"></div>
</div> <!-- end of container -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        Copyright © 2016 <a href="#">Irwansyah</a> | <a href="#" target="_parent">Universitas Islam Negeri Sultan Syarif Kasim Riau</a>
    </div> <!-- end of footer -->
</div>
<!--  Free Website Templates  @  T e m p l a t e M o . c o m    
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>-->
</html>