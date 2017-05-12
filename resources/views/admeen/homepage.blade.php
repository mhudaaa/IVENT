	@include('admeen/template/header')
	
	<title>Ivent Admin</title>
<body>

	<div class="wrapper">

		<!-- Sidebar -->
		@include('admeen/template/sidebar')
		<!-- End Sidebar -->

	    <div class="main-panel">
			
			<!-- Navbar -->
			@include('admeen/template/navbar')
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
									<h3 class="title">230</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<a href="">Kelola event</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card card-stats">
								<div class="card-header" data-background-color="white">
									<i class="material-icons">account_box</i>
								</div>
								<div class="card-content">
									<p class="category">User</p>
									<h3 class="title">396</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<a href="">Kelola user</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card card-stats">
								<div class="card-header" data-background-color="white">
									<i class="material-icons">class</i>
								</div>
								<div class="card-content">
									<p class="category">Premium Event</p>
									<h3 class="title">37</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<a href="">Kelola event premium</a>
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
	                                <p class="category">Daftar 10 event terakhir</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th width="20px">No</th>
	                                    	<th>Nama Event</th>
	                                    	<th>Pengelola</th>
	                                    	<th>Waktu Pelaksanaan</th>
	                                    	<th>Peserta</th>
											<th>HTM</th>
											<th width="75">Aksi</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>1</td>
	                                        	<td>Niger</td>
	                                        	<td>Oud-Turnhout</td>
	                                        	<td>23 Maret 2017 - 09:00 AM</td>
	                                        	<td>100/130</td>
												<td class="text-primary">$36,738</td>
												<td>
													<a href="/admeen/detail-event">
														<button class="btn btn-xs btn-danger spacing-1">Detail</button>
													</a>
												</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>2</td>
	                                        	<td>Minerva Hooper</td>
	                                        	<td>Sinaai-Waas</td>
	                                        	<td>30 April 2017 - 09:00 AM</td>
	                                        	<td>50/320</td>
												<td class="text-primary">$23,789</td>
												<td>
													<a href="/admeen/detail-event">
														<button class="btn btn-xs btn-danger spacing-1">Detail</button>
													</a>
												</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>3</td>
	                                        	<td>Sage Rodriguez</td>
	                                        	<td>Baileux</td>
	                                        	<td>11 Mei 2017 - 09:30 AM</td>
	                                        	<td>30/120</td>
												<td class="text-primary">$56,142</td>
												<td>
													<a href="/admeen/detail-event">
														<button class="btn btn-xs btn-danger spacing-1">Detail</button>
													</a>
												</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>4</td>
	                                        	<td>Korea, South</td>
	                                        	<td>Philip Chaney</td>
	                                        	<td>3 Juni 2017 - 08:00 AM</td>
	                                        	<td>134/200</td>
												<td class="text-primary">$38,735</td>
												<td>
													<a href="/admeen/detail-event">
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
			@include('admeen/template/footer')
			<!-- End Footer -->