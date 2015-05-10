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
		============================================================= -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
    	 </div>
		
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
					<a class="navbar-brand" href="#"><img width="45" height="45" src="<?echo base_url("assets/brief.png")?>"/>Loker</a>
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
			<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Register<br>
				<small>Buat resume untuk melamar pekerjaan</small>
				</h3>
			</div>
			<div class="panel-body">
				<form>
					<div class="col-md-8">	
					<h4>Data Akun</h4>					
						<div class="col-md-6">
							<h5>Username
							<input class="form-control" id="username" type="text"/></h5>
						</div>
						<div class="col-md-12">
							<h5>Email
							<input class="form-control" id="email" type="text"/></h5>
						</div>
						<div class="col-md-6">
							<h5>Password
							<input class="form-control" id="passwd" type="text"/></h5>
						</div>
						<div class="col-md-6">
							<h5>Confirm Password
							<input class="form-control" id="passwd2" type="text"/></h5>
						</div>
					</div>
					<div class="col-md-12"><hr></div>
					<div class="col-md-8">	
					<h4>Resume</h4>
						<div class="col-md-6">
							<h5>Nama Depan
							<input class="form-control" id="firstname" type="text"/></h5>
						</div>
						<div class="col-md-6">
							<h5>Nama Belakang
							<input class="form-control" id="lastname" type="text"/></h5>
						</div>
						<div class="col-md-12">
							<h5>Jenis Kelamin</h5>
							<p class="radio-inline"><input type="radio" name="jk"> Wanita</p>
							<p class="radio-inline"><input type="radio" name="jk"> Pria</p>
						</div>
						<div class="col-md-6">
							<h5>Tanggal Lahir
							<input class="form-control" id="lahir" type="text"/></h5>
						</div>
						<div class="col-md-12">
							<h5>Alamat
							<textarea class="form-control" id="address"></textarea></h5>
						</div>
						<div class="col-md-6">
							<h5>Pendidikan Terakhir</h5>
							<select class="form-control" id="pendidikan"/>
								<option value="0" disabled="disabled" selected="selected">--Pilih jenjang pendidikan--</option>
								<option value="1">SMA</option>
								<option value="1">D1</option>
								<option value="1">D3</option>
								<option value="1">S1/D4</option>
								<option value="1">S2</option>
								<option value="1">S3</option>
							</select>
						</div>
						<div class="col-md-7">
							<h5>Posisi Terakhir</h5>
							<select class="form-control" id="posisi"/>
								<option value="0" disabled="disabled" selected="selected">--Pilih posisi terakhir--</option>
								<?php foreach($posisi as $i){?>
									<option value="<?php echo $i->getIdPosisi();?>"><?php echo $i->getNamaPosisi();?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</form>
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
		<script src="<?php echo base_url("assets/js/wow.js")?>"></script>
		<script src="<?php echo base_url("assets/js/jquery.singlePageNav.min.js")?>"></script>
		<script src="<?php echo base_url("assets/js/custom.js")?>"></script>
	</body>
</html>