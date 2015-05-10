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
			<div class="col-lg-1"></div>
		<?php 
          echo form_open("register/index");?>
		  <div class="col-lg-12 col-sm-12 panel panel-default">
          <fieldset>
               <legend class="panel-heading"><h3>Register</h3><hr></legend>
			   <div class="panel-body">
			   <!--Username-->
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
                    <label for="txt_username" class="control-label">Username</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_username" name="register_username" placeholder="Username" type="text" value="<?php echo set_value('reegister_username'); ?>" />
                    <span class="text-danger"></span>
					<span class="notif" id="txtUsername"></span>
               </div>
               </div>
               </div>
			   <!--Email-->
			   <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
			   <?php echo form_error('email', '<div style="color:red">','</div>');?>
                    <label for="txt_email" class="control-label">Email</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_email" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>
			   <!--Password-->
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
               <label for="txt_password" class="control-label">Password</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="password" name="password1" placeholder="Password" type="password" value="<?php echo set_value('password1'); ?>" />
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>  
			   <!--Confirm Password-->
			   <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
			   <?php echo form_error('password2', '<div style="color:red">','</div>');?>
               <label for="txt_password" class="control-label">Confirm Password</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="password2" name="password2" placeholder="Confirm Password" type="password" value="<?php echo set_value('password2'); ?>" />
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>
			   <hr>
			   <!--Nama-->
			   <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
					<?php echo form_error('register_nama', '<div style="color:red">','</div>');?>
                    <label for="txt_nama" class="control-label">Nama</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_nama" name="register_nama" placeholder="Nama" type="text" value="<?php echo set_value('register_nama'); ?>" />
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>
			   <!--Jenis Kelamin-->
			   <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
					<?php echo form_error('jk', '<div style="color:red">','</div>');?>
                    <label for="txt_nama" class="control-label">Jenis Kelamin</label>
               </div>
               <div class="col-lg-8 col-sm-8">
					<select class="form-control" id="select_jk" name="jk" value="<?php set_value('jk');?>">
						<option value="Wanita" selected="selected">Wanita</option>
						<option value="Pria">Pria</option>
					</select>
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>
			   <!--Tanggal Lahir-->
			   <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
					<?php echo form_error('lahir', '<div style="color:red">','</div>');?>
                    <label for="txt_lahir" class="control-label">Tanggal Lahir</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_lahir" name="lahir" placeholder="YYYY-mm-dd" type="text" value="<?php echo set_value('lahir'); ?>" />
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>
			   <!--Alamat-->
			   <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
					<?php echo form_error('alamat', '<div style="color:red">','</div>');?>
                    <label for="txt_alamat" class="control-label">Alamat</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <textarea class="form-control" id="txt_alamat" name="address" type="text" value="<?php echo set_value('address'); ?>"></textarea>
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>
			   <!--Pendidikan Terakhir-->
			   <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
					<?php echo form_error('pend', '<div style="color:red">','</div>');?>
                    <label for="txt_nama" class="control-label">Pendidikan</label>
               </div>
               <div class="col-lg-8 col-sm-8">
					<select class="form-control" id="select_pend" name="pendidikan" value="<?php set_value('pendidikan');?>">
						<option value="0" disabled="disabled" selected="selected">--Pilih jenjang pendidikan--</option>
						<option value="SMA">SMA</option>
						<option value="D1">D1</option>
						<option value="D3">D3</option>
						<option value="S1/D4">S1/D4</option>
						<option value="S2">S2</option>
						<option value="S3">S3</option>
					</select>
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>
			   <!--Posisi Terakhir-->
			   <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
					<?php echo form_error('pend', '<div style="color:red">','</div>');?>
                    <label for="txt_nama" class="control-label">Posisi Terakhir</label>
               </div>
               <div class="col-lg-8 col-sm-8">
					<select class="form-control" id="select_posisi" name="posisi" value="<?php set_value('posisi');?>">
						<option value="0" disabled="disabled" selected="selected">--Pilih posisi terakhir--</option>
						<?php foreach($posisi as $i){?>
							<option value="<?php echo $i->getNamaPosisi();?>"><?php echo $i->getNamaPosisi();?></option>
						<?php } ?>
					</select>
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>
			   <!--Deskripsi-->
			   <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
					<?php echo form_error('deskripsi', '<div style="color:red">','</div>');?>
                    <label for="txt_alamat" class="control-label">Deskripsi</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <textarea class="form-control" rows="5" id="txt_deskripsi" name="deskripsi" type="text" value="<?php echo set_value('deskripsi'); ?>"></textarea>
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>
			   <!--Gaji-->
			   <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
					<?php echo form_error('gaji', '<div style="color:red">','</div>');?>
                    <label for="txt_nama" class="control-label">Gaji</label>
               </div>
               <div class="col-lg-8 col-sm-8">
					<select class="form-control" id="select_gaji" name="gaji" value="<?php set_value('gaji');?>">
						<option value="ANY" selected="selected">Tidak ada preferensi</option>
						<option value="1,5jt - 3jt">1,5jt - 3jt</option>
						<option value="3jt - 5jt">3jt - 5jt</option>
						<option value="5jt - 10jt">5jt - 10jt</option>
						<option value=">10jt">>10jt</option>
					</select>
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>
			   <!--Button Submit-->
			   <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_register" name="btn_register" type="submit" class="btn btn-default" value="Register"  />
               </div>
               </div>
			   </div>
          </fieldset>
		 
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
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
		
	</body>
</html>