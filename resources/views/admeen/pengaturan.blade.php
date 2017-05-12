	@include('dash/template/header')
	
	<title>Pengaturan - Ivent Dashboard</title>
<body>

	<div class="wrapper">

		<!-- Sidebar -->
		@include('dash/template/sidebar-5')
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
			                                <h4 class="title semibold">Pengaturan</h4>
			                                <p class="category">Atur Profil Anda</p>
	                            		</div>
	                            	</div>
	                            </div>
	                            <div class="card-content">
	                            	<div class="row">
	                            		<div class="col-sm-10 col-sm-offset-1">
			                            	<div class="row">
			                            		<!-- Profil -->
			                            		<div class="col-sm-6">
			                            			<h6 class="semibold text-red">Profil</h6>
			                            			<form method="post" action="">
				                            			<div class="row">
				                            				<div class="col-sm-6">
																<div class="form-group label-floating">
																	<label class="control-label">Nama</label>
																	<input type="text" name="nama" class="form-control" required="" maxlength="14">
																</div>
				                            				</div>
				                            				<div class="col-sm-6">
																<div class="form-group label-floating">
																	<label class="control-label">Organisasi</label>
																	<input type="text" name="organisasi" class="form-control" required="" maxlength="15">
																</div>
				                            				</div>
				                            			</div>
				                            			<div class="row">
				                            				<div class="col-sm-12">
				                            					<div class="form-group label-floating">
																	<label class="control-label">Email</label>
																	<input type="email" name="email" class="form-control" required="" maxlength="50">
																</div>
				                            				</div>
				                            			</div>
				                            			<div class="row">
				                            				<div class="col-sm-12">
				                            				 	<button type="submit" class="btn btn-danger">Simpan</button>
				                            				</div>
				                            			</div>
			                            			</form>
			                            		</div>

			                            		<!-- Akun / Password -->
			                            		<div class="col-sm-6">
			                            			<h6 class="semibold text-red">Password</h6>
			                            			<form method="post" action="">
				                            			<div class="row">
				                            				<div class="col-sm-6">
																<div class="form-group label-floating">
																	<label class="control-label">Password Lama</label>
																	<input type="password" name="passlama" class="form-control" required="" maxlength="20">
																</div>
				                            				</div>
				                            				<div class="col-sm-6">
																<div class="form-group label-floating">
																	<label class="control-label">Password Baru</label>
																	<input type="password" name="passbaru" class="form-control" required="" maxlength="20">
																</div>
				                            				</div>
				                            			</div>
				                            			<div class="row">
				                            				<div class="col-sm-12">
				                            					<div class="form-group label-floating">
																	<label class="control-label">Ulangi Password Baru</label>
																	<input type="password" name="repassbaru" class="form-control" required="" maxlength="20">
																</div>
				                            				</div>
				                            			</div>
				                            			<div class="row">
				                            				<div class="col-sm-12">
				                            				 	<button type="submit" class="btn btn-danger">Simpan</button>
				                            				</div>
				                            			</div>
			                            			</form>
			                            		</div>
			                            	</div>
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