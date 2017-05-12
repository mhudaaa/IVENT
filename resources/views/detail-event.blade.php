	@include('template/header')
	<title>Detail - Ivent</title>
</head>
<body class="detail">

	<!-- Login form -->
	<div class="login-form">
		<div class="rel">
			<div class="arrow-up"></div>
		</div>
		<a href=""><small class="bold">Lupa password?</small></a>
		<form>
			<div class="row">
				<div class="col-sm-12">
						<input type="email" name="email" placeholder="Email...">
						<input type="password" name="password" placeholder="Kata sandi...">
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
						<a class="navbar-brand" href="/"><img src="{{ URL::asset('assets/img/logo.png') }}"></a>
					</div><!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/login"><span class="lnr lnr-calendar-full"></span> Buat Event</a></li>
							<li class="open-login"><a href="#"><span class="lnr lnr-lock"></span> Masuk</a></li>
							<li><a href="/daftar"><span class="lnr lnr-plus-circle"></span> Daftar</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->

				<div class="menu-arrow"></div>
			</nav>
		</div>
	</section>
	<!-- End Header -->

	<section>
		<div id="wrapper-top">
			<img src="{{ URL::asset('assets/img/menu-arrow.png') }}">
		</div>
	</section>
	
	<!-- Begin Content -->
	<section>
		<div id="wrapper" class="semi-bold">
			<div class="row">
				<div class="col-sm-5">
					<img class="poster wow fadeIn" src="{{ URL::asset('assets/img/poster-lg.jpg') }}">
				</div>
				<div class="col-sm-7">
					<h4 class="semi-bolder">Discovery 5 - Build Your Future Today</h4>

					<div class="event-line text-red">
						<img src="{{ URL::asset('assets/img/event-line.png') }}">
						<div class="seat text-uppercase text-center">
							<small>sisa</small><br>
							<div class="number lato">42</div>
							<small>tiket</small><br>
						</div>
					</div>

					<!-- Event Info -->
					<div class="event-info semi-bolder lato text-red text-uppercase">
						<div class="row">
							<div class="col-sm-4">
								<small><span class="lnr lnr-calendar-full"></span> 30 Oktober 2016</small>
							</div>
							<div class="col-sm-3">
								<small><span class="lnr lnr-clock"></span> 07:00 - selesai</small>
							</div>
							<div class="col-sm-4">
								<small><span class="lnr lnr-map-marker"></span> Jember, Jawa Timur</small>
							</div>
						</div>
					</div>
					<!-- End event info -->

					<!-- Event text -->
					<p>Discovery adalah Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>

					<p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco id est laborum.</p>

					<!-- Event Detail -->
					<div class="rincian-event">
						<div class="title title-1">
							<span class="text-red semi-bolder">Rincian Event</span>
						</div>
						<div class="title title-2 text-center">
							<span class="text-tosca lato semi-bolder">Rp 150.000</span>
						</div>
						<a href="/login">
							<div class="title title-3 text-center bg-tosca hvr-shrink">
								<button><span class="lato semi-bolder">Daftar sekarang</span></button>
							</div>
						</a>
						<div class="row">
							<div class="col-sm-8">
								<table class="rincian">
									<tr>
										<td>Tempat</td>
										<td>: Gedung CDAST Universitas Jember</td>
									</tr>
									<tr>
										<td>Kontak</td>
										<td>: 0872-9299-9182</td>
									</tr>
									<tr>
										<td>Email</td>
										<td>: contact@discovery.com</td>
									</tr>
									<tr>
										<td>Website</td>
										<td>: http://discovery.com</td>
									</tr>
								</table>
							</div>
							<div class="col-sm-4">
								<div class="left-border"></div>
								<span class="text-red semi-bolder">Bagikan event</span><br><br>
								<span class="badge"><span class="lnr lnr-link"></span> Salin tautan event</span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Content -->

	<!-- Event lainnya -->
	<section id="event-baru">
		<div class="before"></div>
		<div id="wrapper-top">
			<div class="row">
				<div class="col-sm-6">
					<h3>Event lainnya</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col wow fadeIn" data-wow-delay="1s">
					<div class="event-list hvr-grow">
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
								<a href="detail-event.html"><button class="btn btn-red btn-small text-uppercase">detail</button></a>
							</div>
							<div class="col-sm-6 text-right bold plus">
								<a href="daftar.html"><h3><i class="hvr-buzz-out lnr lnr-plus-circle"></i></h3></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-sm-3 wow fadeIn" data-wow-delay="1.2s">
					<div class="event-list hvr-grow">
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
								<a href="detail-event.html"><button class="btn btn-red btn-small text-uppercase">detail</button></a>
							</div>
							<div class="col-sm-6 text-right bold plus">
								<a href="daftar.html"><h3><i class="hvr-buzz-out lnr lnr-plus-circle"></i></h3></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-sm-3 wow fadeIn" data-wow-delay="1.4s">
					<div class="event-list hvr-grow">
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
								<a href="detail-event.html"><button class="btn btn-red btn-small text-uppercase">detail</button></a>
							</div>
							<div class="col-sm-6 text-right bold plus">
								<a href="daftar.html"><h3><i class="hvr-buzz-out lnr lnr-plus-circle"></i></h3></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-sm-3 wow fadeIn" data-wow-delay="1.6s">
					<div class="event-list hvr-grow">
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
								<a href="detail-event.html"><button class="btn btn-red btn-small text-uppercase">detail</button></a>
							</div>
							<div class="col-sm-6 text-right bold plus">
								<a href="daftar.html"><h3><i class="hvr-buzz-out lnr lnr-plus-circle"></i></h3></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End event lainnya -->

	@include('template/footer')