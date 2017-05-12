	@include('dash/template/header')
	
	<title>Detail Pesan - Ivent Dashboard</title>
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
	                            		<div class="col-sm-12">
			                                <h4 class="title semibold">Lupa Passord akun</h4>
			                                <p class="category">Muhammad Huda</p>
	                            		</div>
	                            	</div>
	                            </div>
	                            <div class="card-content ">
	                            	<div class="row semibold text-red pesan-info">
	                            		<div class="col-sm-2">
	                            			<td><i class="material-icons">mail_outline</i> huda@students.cs
	                            		</div>
	                            		<div class="col-sm-2">
	                            			<td><i class="material-icons">mail_outline</i>+618 1234-1244-1288
	                            		</div>
	                            		<div class="col-sm-8 text-right">
	                            			 <td><i class="material-icons">access_time</i>23 Mar 2017 - 08:37 AM
	                            		</div>
	                            	</div>
	                            	<hr>
	                            	<div class="text-muted normal">
		                            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                            	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		                            	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		                            	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		                            	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		                            	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		                            	<br><br>

		                            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                            	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		                            	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		                            	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		                            	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		                            	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		                            	<br><hr>
		                            	<a href="/dash/pesan">
		                            		<button class="btn btn-danger">Kembali</button>
		                            	</a>
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