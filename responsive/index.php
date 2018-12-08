<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="favicon.ico" rel="shortcut icon">
	<!-- CSS dasar -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">
	<!-- end CSS dasar -->
  
	<!-- FlexSlider -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/touchTouch.css" />
	  
	<script type="text/javascript">
		$(window).load(function() {
		  $('.flexslider').flexslider();
		});
	</script>
	<!-- end FlexSlider -->
	<!-- untuk gallery -->
	<script src="js/touchTouch/touchTouch.jquery.js"></script>
	<script src="js/touchTouch/script.js"></script>
	<!-- end untuk gallery -->
	<title>Company</title>  
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
  <div class="container">
    <header class="header clearfix">
		<div class="article clearfix">
			<div class="col_100 clearfix">
				<div class="logo"><img src="images/logo1.png" /></div>
			</div>
		</div>
    </header>
	<div class="hero clearfix">
		<div class="col_100">
			<ul id="nav">
	           	<li><a href="#">Home</a></li>
				<li><a href="#">Gallery</a></li>
	            <li><a href="#s1">Company</a>
	                <span id="s1"></span>
	                <ul class="subs">
	                  	<li>
		                  	<a href="#">Visi dan Misi</a>
		                    <a href="#">Pelayanan</a>
							<a href="#">Pembayaran</a>
							<a href="#">Tata Tertib</a>
							<a href="#">Sanksi</a>
							<a href="#">REKENING</a>
	                  	</li>
	                </ul>
	            </li>
	            <li><a href="#s2">Product</a>
	                <span id="s2"></span>
	                <ul class="subs">
	                  	<li>
							<a href="#">Manfaat</a>
	                    	<a href="#">FAQ</a>
							<a href="#">Paket</a>
							<a href="#">Pemesanan</a>
	                  	</li>
	                </ul>
	            </li>
				<li><a href="#s3">Stockist</a>
	                <span id="s3"></span>
	                <ul class="subs">
	                  <li>
							<a href="#">Peraturan</a>
	                    	<a href="#">Mobile</a>
							<a href="#">Center</a>
							<a href="#">Master</a>
	                  </li>
	                </ul>
	            </li>
	            <li><a href="#">Testimoni</a></li>
	        </ul>
			<!--<nav class="menu_main">
				<ul>
				  <li class="active"><a href="#">About</a></li>
				  <li><a href="#">Skins</a></li>
				  <li><a href="#">Samples</a></li>
				</ul>
			</nav>-->
		</div>
		<div class="clearfix"></div>
	</div>

    <div class="info">
		<article class="article clearfix">
			<div class="col_100_slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
						  <img src="images/1.jpg" />
						  <p class="flex-caption">Captions and cupcakes. Winning combination.</p>
						</li>
						<li>
						  <img src="images/2.jpg" /></a>
						  <p class="flex-caption">This image is wrapped in a link!</p>
						</li>
						<li>
						  <img src="images/3.jpg" />
						</li>
						<li>
						  <img src="images/4.jpg" />
						</li>
					</ul>
				</div>
				
			</div>
			<div class="clearfix"></div>
		</article>
	
		<article class="article clearfix">
			<div class="col_100">
				<h1>Selamat datang</h1>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div>
		</article>
		
				
		<article class="outer_custom clearfix">
			
			<div class="col_100">

			<?php 
			include "config/koneksi.php";
			
			$sql   = "SELECT * FROM berita";
         	$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
         
         	while($data = mysql_fetch_assoc($hasil))
         	{
         	?>

			<p>
			<img src="<?php echo "admin_theme/foto_berita/".$data['gambar'];?>" width="200">
			<h4><?php echo $data['judul'];?></h4>

			<p><?php echo $data['isi_berita'];?></p>
			<?php
			}
			?>
			
			</div>
		</article>

		<article class="outer_custom clearfix">

			<div class="col_50">
			<?php 
			include "config/koneksi.php";
			$sql   = "SELECT * FROM produk";
         	$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
         
         	while($data = mysql_fetch_assoc($hasil))
         	{
         	?>

			<p>
			<img src="<?php echo "admin_theme/foto_produk/".$data['gambar'];?>" width="200">
			<h4><?php echo $data['nama_produk'];?></h4>

			<p><?php echo $data['deskripsi'];?></p>
			<?php
			}
			?>

			</div>

		</article>
			
		
    </div>
    
    <footer class="footer clearfix">
		<div class="article">
		<br />
			<div class="copyright">Copyright&copy; Company. All Right Reserved.</div>
		</div>
    </footer>

  </div>
</body>
</html>