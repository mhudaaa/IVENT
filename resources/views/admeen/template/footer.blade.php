			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>
							<li>
								<a href="#">
									Home
								</a>
							</li>
							<li>
								<a href="#">
									Company
								</a>
							</li>
							<li>
								<a href="#">
									Portfolio
								</a>
							</li>
							<li>
								<a href="#">
								   Blog
								</a>
							</li>
						</ul>
					</nav>
					<p class="copyright pull-right">
						&copy; <script>document.write(new Date().getFullYear())</script> <a href="/">Ivent</a> - Some Rights Reserved
					</p>
				</div>
			</footer>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script type="text/javascript" src="{{ URL::asset('assets/dashboard/js/jquery-3.1.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/dashboard/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/dashboard/js/material.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/dashboard/js/bootstrap-notify.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/dashboard/js/material-dashboard.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/dashboard/js/demo.js') }}"></script>
	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
