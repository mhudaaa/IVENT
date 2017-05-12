	@include('dash/template/header')
	
	<title>Tiket - Ivent Dashboard</title>
<body>

	<div class="wrapper">

		<!-- Sidebar -->
		@include('dash/template/sidebar-3')
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
	                            <div class="card-header" data-background-color="green">
	                            	<div class="row">
	                            		<div class="col-sm-10">
			                                <h4 class="title semibold">Tiket</h4>
			                                <p class="category">Tiket event yang anda ikuti</p>
	                            		</div>
	                            		<div class="col-sm-2">
	                            			<div class="pull-right jml-circle text-green">
	                            				2
	                            			</div>
	                            		</div>
	                            	</div>
	                            </div>
	                            <div class="card-content">
	                                <div class="row item">
	                                	<div class="col-sm-2">
	                                		<img class="poster" src="{{ asset('assets/dashboard/img/poster/poster3.jpg') }}">
	                                	</div>
	                                	<div class="col-sm-8">
	                                		<h4 class="semibold text-green">Discovery 3 : Hack Your City</h4>
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
	                                		<a href="/dash/detail-tiket">
	                                			<button class="btn btn-block btn-success spacing-1">Detail</button>
	                                		</a>
	                                	</div>
	                                </div>

	                                <div class="row item">
	                                	<div class="col-sm-2">
	                                		<img class="poster" src="{{ asset('assets/dashboard/img/poster/poster5.jpg') }}">
	                                	</div>
	                                	<div class="col-sm-8">
	                                		<h4 class="semibold text-green">Seminar Nasional : Build Your Future Business Today</h4>
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
	                                		<a href="/dash/detail-tiket">
	                                			<button class="btn btn-block btn-success spacing-1">Detail</button>
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