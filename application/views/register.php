<html lang="en">
	<head>
    	<!-- 
    	Boxer Template
    	http://www.templatemo.com/preview/templatemo_446_boxer
    	-->
		<meta charset="utf-8">
		<title>Loker - Register</title>
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
    	 </div>-->
		
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
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url("Home")?>">Home</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url("Home")?>#feature">Fitur</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url("Home")?>#feature1">Kerja Sama</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url("Home")?>#contact">Contact Us</a></li>
							</ul>
						</li>
						<li><a href="<?php echo site_url("Lowongan/")?>">Lowongan</a></li>
						<li><a href="<?php echo site_url("Profil/")?>">Resume</a></li>
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
								<center><input type="submit" id="btnLogin" class="btn" value="Login"></button><br></center>
								</div>
								<div class="col-sm-12">
									<div class="divider"></div>
								</div>
							  </form>
							  <form action="<?php echo site_url("Register/");?>" method="link" class="col-sm-12">
								<center><input type="submit" id="btnRegister" class="btn btn-success" value="Register"></input></center>
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
			<?php echo form_open("register/index");?>
				
					<div class="col-md-8">	
					<h4>Data Akun</h4>					
						<div class="col-md-6">
							<h5>Username
							<input class="form-control" name="username" type="text" value="<?php echo set_value('username');?>"/></h5>
							<span class="text-danger"></span>
							<span class="notif" id="txtUsername"></span>
						</div>
						<div class="col-md-12">
							<?php echo form_error('email', '<div style="color:red">','</div>');?>
							<h5>Email
							<input class="form-control" name="email" type="text" value="<?php echo set_value('email');?>"/></h5>
							
						</div>
						<div class="col-md-6">
							<h5>Password
							<input class="form-control" name="passwd" type="password" value="<?php echo set_value('passwd');?>"/></h5>
						</div>
						<div class="col-md-6">
							<h5>Confirm Password
							<input class="form-control" name="passwd2" type="password" value="<?php echo set_value('passwd2');?>"/></h5>
						</div>
					</div>
					<div class="col-md-12"><hr></div>
					<div class="col-md-8">	
					<h4>Resume</h4>
						<div class="col-md-6">
							<h5>Nama Depan
							<input class="form-control" name="firstname" type="text" value="<?php echo set_value('firstname');?>"/></h5>
						</div>
						<div class="col-md-6">
							<h5>Nama Belakang
							<input class="form-control" name="lastname" type="text" value="<?php echo set_value('lastname');?>"/></h5>
						</div>
						<div class="col-md-12">
							<h5>Jenis Kelamin</h5>
							<select class="form-control" name="jk" value="<?php echo set_value('jk');?>"/>
								<option value="Wanita" selected="selected">Wanita</option>
								<option value="Pria">Pria</option>
							</select>
						</div>
						<div class="col-md-6">
							<h5>Tanggal Lahir
							<input class="form-control" name="lahir" type="text" value="<?php echo set_value('lahir');?>"/></h5>
						</div>
						<div class="col-md-12">
							<h5>Alamat
							<textarea class="form-control" name="address" value="<?php echo set_value('address');?>"></textarea></h5>
						</div>
						<div class="col-md-6">
							<h5>Pendidikan Terakhir</h5>
							<select class="form-control" name="pendidikan" value="<?php echo set_value('pendidikan');?>"/>
								<option value="0" disabled="disabled" selected="selected">--Pilih jenjang pendidikan--</option>
								<option value="SMA">SMA</option>
								<option value="D1">D1</option>
								<option value="D3">D3</option>
								<option value="S1/D4">S1/D4</option>
								<option value="S2">S2</option>
								<option value="S3">S3</option>
							</select>
						</div>
						<div class="col-md-7">
							<h5>Posisi Terakhir</h5>
							<select class="form-control" name="posisi" value="<?php echo set_value('posisi');?>"/>
								<option value="0" disabled="disabled" selected="selected">--Pilih posisi terakhir--</option>
								<?php foreach($posisi as $i){?>
									<option value="<?php echo $i->getIdPosisi();?>"><?php echo $i->getNamaPosisi();?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-12">
							<h5>Deskripsi diri
							<textarea class="form-control" rows="4" name="deskripsi" value="<?php echo set_value('deskripsi');?>"></textarea></h5>
						</div>
					</div>
					<div class="col-md-12"><hr></div>
					<div class="col-md-8">	
					<h4>Preferensi</h4>
						<div class="col-md-12">
							<h5>Gaji</h5>
							<small>Keinginan gaji per bulan dalam mata uang rupiah</small>
							<select class="form-control" name="gaji" value="<?php echo set_value('gaji');?>">
								<option value="0" selected="selected">Tidak ada preferensi</option>
								<option value="1">1,5jt - 3jt</option>
								<option value="2">3jt - 5jt</option>
								<option value="3">5jt - 10jt</option>
								<option value="4">>10jt</option>
							</select>
						</div>
						<div class="col-md-12">
							<h5>Lokasi Penempatan</h5>
							<small>Keinginan lokasi penempatan pekerjaan</small>
							<select class="form-control" name="lokasi" value="<?php echo set_value('lokasi');?>"/>
								<option value="1" selected="selected">Tidak ada preferensi</option>
								<?php foreach($lokasi as $j){
									if (!(($j->getIdLokasi()) == "1")) {?>
									<option value="<?php echo $j->getIdLokasi();?>"><?php echo $j->getNamaLokasi();?></option>
								<?php } } ?>
							</select>
						</div>
					</div>
					<div class="col-md-11">
						<br>
						<input style="float:right;" class="btn btn-primary" type="submit" value="Submit"/>
						<br>
					</div>
				
				<?php echo form_close(); ?>
				<?php echo $this->session->flashdata('msg');?>
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
		
		<script src="<?php echo base_url("assets/js/jquery.singlePageNav.min.js")?>"></script>
		<script src="<?php echo base_url("assets/js/custom.js")?>"></script>
	</body>
</html>