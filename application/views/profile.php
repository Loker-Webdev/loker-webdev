<html lang="en">
	<head>
    	<!-- 
    	Boxer Template
    	http://www.templatemo.com/preview/templatemo_446_boxer
    	-->
		<meta charset="utf-8">
		<title>Loker - Page</title>
		<link rel="icon" href="<?php echo base_url("assets/brief.png")?>"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate css -->
		<link rel="stylesheet" href="<?php echo base_url("assets/css/animate.min.css")?>">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css")?>">
		<!-- custom css -->
		<link rel="stylesheet" href="<?php echo base_url("assets/css/templatemo-style.css")?>">
	</head>
	<body>
		<!-- PRELOADER
		=============================================================
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
    	 </div> -->
		
		<!-- NAVIGATION
		============================================================= -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img width="45" height="45" src="assets/brief.png"/>Loker</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home
							<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#home">Home</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#feature">Fitur</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#feature1">Kerja Sama</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#contact">Contact Us</a></li>
							</ul>
						</li>
						<li><a href="#">Lowongan</a></li>
						<li><a href="#">Resume</a></li>
						<li><a href="#">Rekomendasi</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Login/Register
						<span class="caret"></span>
							</a>
							<div class="dropdown-menu" style="padding:17px;">
							  <form class="form"> 
								<div class="col-sm-12">
									<input name="username" id="username" type="text" placeholder="Username"><br><br>
								</div>
								<div class="col-sm-12">
								<input name="password" id="password" type="password" placeholder="Password"><br><br>
								</div>
								<div class="col-sm-12">
								<center><button type="button" id="btnLogin" class="btn">Login</button><br></center>
								</div>
								<div class="col-sm-12">
									<div class="divider"></div>
								</div>
								<div class="col-sm-12">
								<center><button type="button" id="btnLogin" class="btn btn-success">Register</button></center>
								</div>
							  </form>
							</div>
						</li>
						<li class="disabled"> <a>|</a> </li>
						<li><a href="#" role="button">Perusahaan</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<!-- CONTENT
		============================================================= -->
		<div id="detail-wrapper">
		<div class="container">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="media">
							<a class="media-left">
								<img src="<?php echo base_url('assets/images/defaultpp.png')?>"/>
							</a>
						<div id="detail-body" class="media-body">
							<h1 class="media-heading">John Smith</h1>
							<div class="detail-description">
								<p>Jenis Kelamin: Pria</p>
								<p>Tanggal Lahir: 9 Mei 1988</p>
								<p>Alamat: Apartemen Central Park Residences 121A</p>
								<p>Email: johnsmith@live.com</p>
								<p>Pendidikan: S2 Manajemen Bisnis</p>
								<p>Bergabung sejak tanggal 20 Oktober 2014</p>
								
							</div>
						</div>
						</div>
						
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Deskripsi</h4></div>
					<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. 
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
						</p>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Pengalaman</h4></div>
					<div class="panel-body">
						<div class="media">
							<h3 class="media-heading">Trainee</h3>
							<p>X Coorperation</p>
							<p>2008</p>
						</div>
						<div class="media">
							<h3 class="media-heading">Asisten Manajer Dept. Marketing</h3>
							<p>X Coorperation</p>
							<p>2009-2011</p>
						</div>
						<div class="media">
							<h3 class="media-heading">Kepala Dept. Marketing</h3>
							<p>X Coorperation</p>
							<p>2009-Sekarang</p>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h5>Lowongan Terakhir yang Dilihat</h5></div>
					<div class="panel-body">
						<div class="list-group">
							<a href="#" class="list-group-item">Sales Manager | Berpengalaman min. 2 Tahun</a>
							<a href="#" class="list-group-item">Dibutuhkan Guru Kursus B.Inggris</a>
							<a href="#" class="list-group-item">Sales Consultant This September!</a>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"><h5>Resume Tools</h5></div>
					<div class="panel-body">
						<div class="col-md-6">
							<button type="button" id="" class="btn btn-primary">Edit</button> 
						</div>
						<div class="col-md-6">
							<button type="button" id="" class="btn btn-danger">Delete</button> 
						</div>
					</div>
				</div>
			</div> 
		</div>
		</div>
		</div>
		<!--END OF CONTENT-->
		
		<!-- FOOTER 
		============================================================= -->
		<footer>
			<div class="container">
				<div class="row">
					<p>Copyright © 2015 Loker Coorporation | Mira-Ine-Obos</p>
				</div>
			</div>
		</footer>
		
		<!--SCRIPT
		============================================================= -->
		<script src="<?php echo base_url("assets/js/jquery.js")?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
		<script src="<?php echo base_url("assets/js/wow.min.js")?>"></script>
		<script src="<?php echo base_url("assets/js/jquery.singlePageNav.min.js")?>"></script>
		<script src="<?php echo base_url("assets/js/custom.js")?>"></script>
	</body>
</html>