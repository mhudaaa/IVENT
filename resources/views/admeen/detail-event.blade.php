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
	                            <div class="card-content table-responsive">
	                                <div class="row item-detail">
	                                	<div class="col-sm-3 text-center">
	                                		<img class="poster" src="{{ asset('assets/dashboard/img/poster/poster.jpg') }}">
	                                		<br><br>
	                                		<a href="">
	                                			<button class="btn btn-info spacing-1">Bagikan</button>
	                                		</a>
	                                	</div>
	                                	<div class="col-sm-9">
	                                		<h4 class="semibold text-red">Discovery 3 : Hack Your City</h4>
	                                		<div class="event-info detail">
		                                		<table class="table table-responsive">
		                                			<tr>
		                                				<td width="200px"><i class="material-icons">event</i> 23 Mar 2017</td>
		                                				<td><i class="material-icons">local_activity</i> Rp. 130.000,-</td>
		                                				<td><i class="material-icons">mail_outline</i> discovery@gmail.com</td>
		                                			</tr>
		                                			<tr>
		                                				<td><i class="material-icons">access_time</i> 08:00 AM - 04:00 AM</td>
		                                				<td><i class="material-icons">account_box</i> <b>53/150</b> Peserta</td>
		                                				<td><i class="material-icons">public</i> http://discovery.com</td>
		                                			</tr>
		                                			<tr>
		                                				<td><i class="material-icons">phone</i> +628 291-1239-0239</td>
		                                				<td colspan="2"><i class="material-icons">location_on</i>  Gd. Mas Soerachman Lt. 3 Universitas Jember</td>
		                                			</tr>
		                                		</table>
	                                		</div>
	                                		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                                		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                                		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                                		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                                		cillum dolore eu fugiat nulla pariatur.<br><br>Excepteur sint occaecat cupidatat non
	                                		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	                                		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                                		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                                		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                                		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                                		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                                		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
	                                		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                                		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                                		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                                		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                                		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                                		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

	                                		<div class="divider"></div>
	                                	</div>
	                                </div>
	                            </div>
	                        </div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header" data-background-color="red">
	                            	<div class="row">
	                            		<div class="col-sm-10">
			                                <h4 class="title semibold">Peserta</h4>
			                                <p class="category">Daftar peserta event Discovery 3 : Hack Your City</p>
	                            		</div>
	                            		<div class="col-sm-2">
	                            			<div class="pull-right jml-circle">
	                            				53
	                            			</div>
	                            		</div>
	                            	</div>
	                            </div>
	                           <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th width="20px">No</th>
	                                    	<th>Nama Peserta</th>
	                                    	<th>Email</th>
	                                    	<th>No. Telp</th>
											<th>Tanggal Daftar</th>
											<th width="75">Aksi</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>1</td>
	                                        	<td>Niger</td>
	                                        	<td>niger@gmail.com</td>
	                                        	<td>+62 8728-9282-1232</td>
												<td>3 Maret 2017 - 08:13 AM</td>
												<td>
													<a href="/dash/detail-event">
														<button class="btn btn-inline btn-xs btn-danger spacing-1"><i class="material-icons">delete</i></button>
													</a>
												</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>2</td>
	                                        	<td>Minerva Hooper</td>
	                                        	<td>niger@gmail.com</td>
	                                        	<td>+62 8728-9282-1232</td>
												<td>3 Maret 2017 - 08:13 AM</td>
												<td>
													<a href="/dash/detail-event">
														<button class="btn btn-xs btn-danger spacing-1"><i class="material-icons">delete</i></button>
													</a>
												</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>3</td>
	                                        	<td>Sage Rodriguez</td>
	                                        	<td>niger@gmail.com</td>
	                                        	<td>+62 8728-9282-1232</td>
												<td>3 Maret 2017 - 08:13 AM</td>
												<td>
													<a href="/dash/detail-event">
														<button class="btn btn-xs btn-danger spacing-1"><i class="material-icons">delete</i></button>
													</a>
												</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>4</td>
	                                        	<td>Philip Chaney</td>
	                                        	<td>niger@gmail.com</td>
	                                        	<td>+62 8728-9282-1232</td>
												<td>3 Maret 2017 - 08:13 AM</td>
												<td>
													<a href="/dash/detail-event">
														<button class="btn btn-xs btn-danger spacing-1"><i class="material-icons">delete</i></button>
													</a>
												</td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
						</div>
					</div>
				</div>
			</div>


			<!-- Footer -->
			@include('dash/template/footer')
			<!-- End Footer -->