	@include('dash/template/header')
	
	<title>Pesan - Ivent Dashboard</title>
<body>

	<div class="wrapper">

		<!-- Sidebar -->
		@include('dash/template/sidebar-4')
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
			                                <h4 class="title semibold">Pesan</h4>
			                                <p class="category">Kelola pesan masuk anda</p>
	                            		</div>
	                            		<div class="col-sm-2">
	                            			<div class="pull-right jml-circle text-red">
	                            				6
	                            			</div>
	                            		</div>
	                            	</div>
	                            </div>
	                            <div class="card-content table-responsive table-pesan">
	                                <table class="table">
	                                    <thead class="text-red">
	                                    	<th width="20px">No</th>
	                                    	<th width="160px">Nama Pengirim</th>
	                                    	<th>Isi Pesan</th>
											<th width="140px">Tanggal</th>
											<th width="75px">Aksi</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>1</td>
	                                        	<td>Niger</td>
	                                        	<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                                        	tempor incididunt ut labore et dolore magna aliqua...</td>
												<td>3 Maret 2017</td>
												<td>
													<a href="/dash/detail-pesan">
														<button class="btn btn-inline btn-xs btn-warning spacing-1">Baca</button>
													</a>
												</td>
	                                        </tr>
	                                        <tr class="unread">
	                                        	<td>2</td>
	                                        	<td>Minerva Hooper</td>
	                                        	<td>Ut enim ad minim veniam,
	                                        	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                                        	consequat. Duis aute irure dolor in reprehenderit in...</td>
												<td>3 Maret 2017</td>
												<td>
													<a href="/dash/detail-pesan">
														<button class="btn btn-inline btn-xs btn-warning spacing-1">Baca</button>
													</a>
												</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>3</td>
	                                        	<td>Sage Rodriguez</td>
	                                        	<td>voluptate velit esse
	                                        	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                                        	proident...</td>
												<td>3 Maret 2017</td>
												<td>
													<a href="/dash/detail-pesan">
														<button class="btn btn-inline btn-xs btn-warning spacing-1">Baca</button>
													</a>
												</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>4</td>
	                                        	<td>Philip Chaney</td>
	                                        	<td>sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
												<td>3 Maret 2017</td>
												<td>
													<a href="/dash/detail-pesan">
														<button class="btn btn-inline btn-xs btn-warning spacing-1">Baca</button>
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