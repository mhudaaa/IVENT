	@include('dash/template/header')
	
	<title>Pesan - Ivent Dashboard</title>
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
						<div class="col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="blue">
	                            	<div class="row">
	                            		<div class="col-sm-10">
			                                <h4 class="title semibold">Pemberitahuan</h4>
			                                <p class="category">Kelola pemberitahuan akun anda</p>
	                            		</div>
	                            		<div class="col-sm-2">
	                            			<div class="pull-right jml-circle text-info">
	                            				6
	                            			</div>
	                            		</div>
	                            	</div>
	                            </div>
	                            <div class="card-content table-responsive table-pemberitahuan">
	                                <table class="table">
	                                    <thead class="text-info">
											<th width="140px">Tanggal</th>
	                                    	<th>Pemberitahuan</th>
	                                    	<th width="35px"></th>
	                                    	<th width="12px"></th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
												<td>3 Maret 2017</td>
	                                        	<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                                        	tempor incididunt ut labore et dolore magna aliqua...</td>
	                                        	<td>
													<!-- <a href="">
														<i class="material-icons text-info icon-small">check</i>
													</a> -->
												</td>
												<td>
													<a href="">
														<i class="material-icons text-soft icon-small">delete</i>
													</a>
												</td>
	                                        </tr>
	                                        <tr class="unread">
												<td>3 Maret 2017</td>
	                                        	<td>Ut enim ad minim veniam,
	                                        	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                                        	consequat. Duis aute irure dolor in reprehenderit in...</td>
												<td class="text-right">
													<a href="">
														<i class="material-icons text-info icon-small">check</i>
													</a>
												</td>
												<td>
													<a href="">
														<i class="material-icons text-soft icon-small">delete</i>
													</a>
												</td>
	                                        </tr>
	                                        <tr>
												<td>3 Maret 2017</td>
	                                        	<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                                        	tempor incididunt ut labore et dolore magna aliqua...</td>
	                                        	<td>
													<!-- <a href="">
														<i class="material-icons text-info icon-small">check</i>
													</a> -->
												</td>
												<td>
													<a href="">
														<i class="material-icons text-soft icon-small">delete</i>
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