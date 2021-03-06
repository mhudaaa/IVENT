	@include('template/header')

	<title>Ivent - Bikin Event Gak Pake Ribet</title>
</head>
<body class="homepage">

	<!-- Login form -->
	<div class="login-form">
		<div class="rel">
			<div class="arrow-up"></div>
		</div>
		<a href=""><small class="bold">Lupa password?</small></a>
		<form method="post" action="dashboard/index.html">
			<div class="row">
				<div class="col-sm-12">
						<input type="email" name="email" placeholder="Email..." required="">
						<input type="password" name="password" placeholder="Kata sandi..." required="">
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
					<a href="dashboard"><input type="submit" class="hvr-wobble-horizontal" name="loginBtn" value="Masuk"></a>
				</div>
			</div>
		</form>
	</div>
	<!-- End login -->

	<!-- Begin Header -->
	<section id="header">
		<div id="wrapper">

			<!-- Navbar -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span> <span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="{{ URL::asset('assets/img/logo.png') }}"></a>
					</div><!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/login"><span class="lnr lnr-plus-circle"></span> Buat Event</a></li>
							<li class="open-login"><a href="#"><span class="lnr lnr-lock"></span> Masuk</a></li>
							<li><a href="/event"><span class="lnr lnr-calendar-full"></span> Event</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>

			<div class="row">
				<div class="col-sm-4">
					<div class="form-daftar">
						<h4>Daftarkan Eventmu</h4>
						<form method="post" action="" autocomplete="off">
							<input type="text" name="nama" placeholder="Nama kamu..." required="">
							<input type="email" name="email" placeholder="Email kamu..." required="">
							<input type="submit" value="Daftar">
						</form>
					</div>
					<small><span class="bold">Sudah punya akun?</span> <a href="/login"><span class="bolder">Masuk</span></small></a>
				</div>
				<div class="col-sm-8 text-right">
					<img class="img-header" src="{{ URL::asset('assets/img/people.png') }}">
				</div>
			</div>
		</div>
	</section>
	<!-- End Header -->

	<!-- Cari event -->
	<section id="cari">
		<!-- <div class="polygon">'</div> -->
		<div id="wrapper">
			<form class="cari" method="post">
				<div class="row">
					<div class="col-sm-4">
						<h3>Cari event berdasarkan...</h3>
					</div>
					<div class="col-sm-2">
						<select>
							<option>Waktu pelaksanaan</option>
							<option>Januari</option>
							<option>Februari</option>
							<option>Maret</option>
							<option>April</option>
							<option>Mei</option>
							<option>Juni</option>
						</select>
					</div>
					<div class="col-sm-2">
						<select class="pull-right">
							<option>Lokasi</option>
							<option>Surabaya</option>
							<option>Jember</option>
							<option>Malang</option>
							<option>Jakarta</option>
							<option>Bandung</option>
							<option>Bekasi</option>
					</select>
					</div>
					<div class="col-sm-2">
						<select>
							<option>Harga Tiket</option>
							<option>Gratis</option>
							<option>Rp 0 - Rp 50.000</option>
							<option>Rp 50.000 - Rp 100.000</option>
							<option>> Rp 100.000</option>
						</select>
					</div>
					<div class="col-sm-2 pull-right text-uppercase bold">
						<input type="submit" name="" class="btn" value="Cari">
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- End cari event -->

	<!-- Event Baru -->
	<section id="event-baru">
		<div id="wrapper">
			<div class="row">
				<div class="col-sm-6">
					<h3>Event terbaru</h3>
				</div>
				<div class="col-sm-6">
					<a href="">
						<div class="event-selengkapnya text-center text-uppercase pull-right semi-bolder">
							<small>Selengkapnya</small>
							<div class="event-line">'</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col">
					<div class="event-list hvr-float-shadow">
						<img class="event-img" src="{{ URL::asset('assets/img/poster1.jpg') }}">
						<h5 class="text-red">Lorem ipsum dolor sit</h5>
						<div class="row">
							<div class="col-sm-6">
								<span class="event-info">30-6-2015</span>
							</div>
							<div class="col-sm-6">
								<span class="event-info text-green text-uppercase pull-right">Gratis</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<a href="/detail-event"><button class="btn btn-red btn-small text-uppercase">detail</button></a>
							</div>
							<div class="col-sm-6 text-right bold plus">
								<a href="/daftar"><h3><i class="hvr-buzz-out lnr lnr-plus-circle"></i></h3></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-sm-3">
					<div class="event-list hvr-float-shadow">
						<img class="event-img" src="{{ URL::asset('assets/img/poster2.jpg') }}">
						<h5 class="text-red">Summer Sounds Festival</h5>
						<div class="row">
							<div class="col-sm-6">
								<span class="event-info">30-6-2016</span>
							</div>
							<div class="col-sm-6">
								<span class="event-info text-green text-uppercase pull-right">Rp 50.000</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<a href="/detail-event"><button class="btn btn-red btn-small text-uppercase">detail</button></a>
							</div>
							<div class="col-sm-6 text-right bold plus">
								<a href="/daftar"><h3><i class="hvr-buzz-out lnr lnr-plus-circle"></i></h3></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-sm-3">
					<div class="event-list hvr-float-shadow">
						<img class="event-img" src="{{ URL::asset('assets/img/poster3.jpg') }}">
						<h5 class="text-red">British Academy Film Awards</h5>
						<div class="row">
							<div class="col-sm-6">
								<span class="event-info">30-6-2015</span>
							</div>
							<div class="col-sm-6">
								<span class="event-info text-green text-uppercase pull-right">Gratis</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<a href="/detail-event"><button class="btn btn-red btn-small text-uppercase">detail</button></a>
							</div>
							<div class="col-sm-6 text-right bold plus">
								<a href="/daftar"><h3><i class="hvr-buzz-out lnr lnr-plus-circle"></i></h3></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-sm-3">
					<div class="event-list hvr-float-shadow">
						<img class="event-img" src="{{ URL::asset('assets/img/poster4.jpg') }}">
						<h5 class="text-red">Qontinent - The Last Resort</h5>
						<div class="row">
							<div class="col-sm-6">
								<span class="event-info">30-6-2015</span>
							</div>
							<div class="col-sm-6">
								<span class="event-info text-green text-uppercase pull-right">RP. 30.000</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<a href="/detail-event"><button class="btn btn-red btn-small text-uppercase">detail</button></a>
							</div>
							<div class="col-sm-6 text-right bold plus">
								<a href="/daftar"><h3><i class="hvr-buzz-out lnr lnr-plus-circle"></i></h3></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('template/footer')