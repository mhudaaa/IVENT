	@include('dash/template/header')
	
	<title>Event - Ivent Dashboard</title>
<body>

	<div class="wrapper">

		<!-- Sidebar -->
		@include('dash/template/sidebar-2')
		<!-- End Sidebar -->

	    <div class="main-panel">
			
			<!-- Navbar -->
			@include('dash/template/navbar')
			<!-- End Navbar -->

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="red">
	                            	<div class="row">
	                            		<div class="col-sm-10">
			                                <h4 class="title semibold">Event</h4>
			                                <p class="category">Daftar event yang anda kelola</p>
	                            		</div>
	                            		<div class="col-sm-2">
	                            			<div class="pull-right jml-circle">
	                            				3
	                            			</div>
	                            		</div>
	                            	</div>
	                            </div>
	                            <div class="card-content">
	                                <div class="row item">
	                                	<div class="col-sm-2">
	                                		<img class="poster" src="{{ asset('assets/dashboard/img/poster/poster.jpg') }}">
	                                	</div>
	                                	<div class="col-sm-8">
	                                		<h4 class="semibold text-red">Discovery 3 : Hack Your City</h4>
	                                		<div class="row event-info">
	                                			<div class="col-sm-3">
	                                				<i class="material-icons">event</i>  <small>23 Maret 2017</small>
	                                			</div>
	                                			<div class="col-sm-3">
	                                				<i class="material-icons">access_time</i>  <small>08:00 AM - 04:00 PM</small>
	                                			</div>
	                                			<div class="col-sm-6">
	                                				<i class="material-icons">location_on</i>  <small>Gd. Mas Soerachman Lt. 3 Universitas Jember</small>
	                                			</div>
	                                		</div>
	                                		<br>
	                                		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.
	                                		<hr>
	                                	</div>
	                                	<div class="col-sm-2">
	                                		<a href="/dash/detail-event">
	                                			<button class="btn btn-block btn-danger spacing-1">Detail</button>
	                                		</a>
	                                	</div>
	                                </div>

	                                <div class="row item">
	                                	<div class="col-sm-2">
	                                		<img class="poster" src="{{ asset('assets/dashboard/img/poster/poster2.jpg') }}">
	                                	</div>
	                                	<div class="col-sm-8">
	                                		<h4 class="semibold text-red">Seminar Nasional : Build Your Future Business Today</h4>
	                                		<div class="row event-info">
	                                			<div class="col-sm-3">
	                                				<i class="material-icons">event</i>  <small>23 Maret 2017</small>
	                                			</div>
	                                			<div class="col-sm-3">
	                                				<i class="material-icons">access_time</i>  <small>08:00 AM - 04:00 PM</small>
	                                			</div>
	                                			<div class="col-sm-6">
	                                				<i class="material-icons">location_on</i>  <small>Gd. Mas Soerachman Lt. 3 Universitas Jember</small>
	                                			</div>
	                                		</div>
	                                		<br>
	                                		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.
	                                		<hr>
	                                	</div>
	                                	<div class="col-sm-2">
	                                		<a href="/dash/detail-event">
	                                			<button class="btn btn-block btn-danger spacing-1">Detail</button>
	                                		</a>
	                                	</div>
	                                </div>

	                                <div class="row item">
	                                	<div class="col-sm-2">
	                                		<img class="poster" src="{{ asset('assets/dashboard/img/poster/poster4.jpg') }}">
	                                	</div>
	                                	<div class="col-sm-8">
	                                		<h4 class="semibold text-red">Olimpiade TI 2017 - First Step to Change The World</h4>
	                                		<div class="row event-info">
	                                			<div class="col-sm-3">
	                                				<i class="material-icons">event</i>  <small>23 Maret 2017</small>
	                                			</div>
	                                			<div class="col-sm-3">
	                                				<i class="material-icons">access_time</i>  <small>08:00 AM - 04:00 PM</small>
	                                			</div>
	                                			<div class="col-sm-6">
	                                				<i class="material-icons">location_on</i>  <small>Gd. Mas Soerachman Lt. 3 Universitas Jember</small>
	                                			</div>
	                                		</div>
	                                		<br>
	                                		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.
	                                		<hr>
	                                	</div>
	                                	<div class="col-sm-2">
	                                		<a href="/dash/detail-event">
	                                			<button class="btn btn-block btn-danger spacing-1">Detail</button>
	                                		</a>
	                                	</div>
	                                </div>
	                            </div>
	                        </div>
						</div>
					</div>
				</div>
			</div>


			<!-- Footer -->
			@include('dash/template/footer')
			<!-- End Footer -->