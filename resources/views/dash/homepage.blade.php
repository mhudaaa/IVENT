	@include('dash/template/header')
	
	<title>Ivent Dashboard</title>
<body>

	<div class="wrapper">

		<!-- Sidebar -->
		@include('dash/template/sidebar')
		<!-- End Sidebar -->

	    <div class="main-panel">
			
			<!-- Navbar -->
			@include('dash/template/navbar')
			<!-- End Navbar -->

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-4">
							<div class="card card-stats">
								<div class="card-header" data-background-color="white">
									<i class="material-icons">event</i>
								</div>
								<div class="card-content">
									<p class="category">Event</p>
									<h3 class="title">150</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<a href="">Kelola event saya</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card card-stats">
								<div class="card-header" data-background-color="white">
									<i class="material-icons">event_seat</i>
								</div>
								<div class="card-content">
									<p class="category">Tiket</p>
									<h3 class="title">36</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<a href="">Kelola tiket saya</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card card-stats">
								<div class="card-header" data-background-color="white">
									<i class="material-icons">mail_outline</i>
								</div>
								<div class="card-content">
									<p class="category">Pesan Masuk</p>
									<h3 class="title">327</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<a href="">Kelola pesan masuk</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="red">
	                                <h4 class="title semibold">Event Terakhir</h4>
	                                <p class="category">Daftar 10 event terakhir yang anda kelola</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th width="20px">No</th>
	                                    	<th>Nama Event</th>
	                                    	<th>Waktu Pelaksanaan</th>
	                                    	<th>Tempat Pelaksanaan</th>
											<th>HTM</th>
											<th width="75">Aksi</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>1</td>
	                                        	<td>Niger</td>
	                                        	<td>23 Maret 2017 - 09:00 AM</td>
	                                        	<td>Oud-Turnhout</td>
												<td class="text-primary">$36,738</td>
												<td>
													<a href="/dash/detail-event">
														<button class="btn btn-xs btn-danger spacing-1">Detail</button>
													</a>
												</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>2</td>
	                                        	<td>Minerva Hooper</td>
	                                        	<td>30 April 2017 - 09:00 AM</td>
	                                        	<td>Sinaai-Waas</td>
												<td class="text-primary">$23,789</td>
												<td>
													<a href="/dash/detail-event">
														<button class="btn btn-xs btn-danger spacing-1">Detail</button>
													</a>
												</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>3</td>
	                                        	<td>Sage Rodriguez</td>
	                                        	<td>11 Mei 2017 - 09:30 AM</td>
	                                        	<td>Baileux</td>
												<td class="text-primary">$56,142</td>
												<td>
													<a href="/dash/detail-event">
														<button class="btn btn-xs btn-danger spacing-1">Detail</button>
													</a>
												</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>4</td>
	                                        	<td>Philip Chaney</td>
	                                        	<td>3 Juni 2017 - 08:00 AM</td>
	                                        	<td>Korea, South</td>
												<td class="text-primary">$38,735</td>
												<td>
													<a href="/dash/detail-event">
														<button class="btn btn-xs btn-danger spacing-1">Detail</button>
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