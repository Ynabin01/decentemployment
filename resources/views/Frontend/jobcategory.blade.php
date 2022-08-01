    @extends("layouts.master")
    @section('topbar')
    @include("Frontend.hometopbar")
    @endsection
    @section('navbar')
    @include("Frontend.homenavbar")
    @endsection
	@section('content')

	<div class="banner banner-static">
			<div class="banner-cpn bg-light">
				<div class="container">
					<div class="content row">
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="index.html">Home</a></li>
								<li class="active"><span>Job</span></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="website/image/subheader.jpg" alt="" />
			</div>
		</div>
		<!-- #end Banner/Static -->
	</header>
	<!-- End Header -->

	<!-- Content -->
	<div class="section-pad job-sec">
	    <div class="container">
	        <div class="content row">
				<!-- job Row  -->
				<div class="feature-row feature-service-row row feature-s4 off-text boxed-filled boxed-w">
					<div class="col-md-3 col-sm-4 col-xs-6 even">
						<!-- job box -->
						<div class="feature">
							<a href="job-list.html">
								<div class="fbox-photo">
									<img src="website/image/photo-pt-b.jpg" alt="">
								</div>
								<div class="fbox-over">
									<h3 class="title">Hospitality</h3>
									<div class="fbox-content">
										<p>The latest job vacancy in Hospitality Sector. Click on “View Job” button for get hospitality Job list.</p>
										<span class="btn">View Job</span>
									</div>
								</div>
							</a>
						</div>
						<!-- End job box -->
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 odd">
						<!-- job box -->
						<div class="feature">
							<a href="job-list.html">
								<div class="fbox-photo">
									<img src="website/image/photo-pt-e.jpg" alt="">
								</div>
								<div class="fbox-over">
									<h3 class="title">warehouse distribution</h3>
									<div class="fbox-content">
										<p>The latest job vacancy in warehouse distribution. Click on “View Job” button for get warehouse Job list.</p>
										<span class="btn">View Job</span>
									</div>
								</div>
							</a>
						</div>
						<!-- End job box -->
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 even">
						<!-- job box -->
						<div class="feature">
							<a href="job-list.html">
								<div class="fbox-photo">
									<img src="website/image/photo-pt-c.jpg" alt="">
								</div>
								<div class="fbox-over">
									<h3 class="title">Facility Manager</h3>
									<div class="fbox-content">
										<p>The latest job vacancy in Facility Manager. Click on “View Job” button for get Facility Manager Job list.</p>
										<span class="btn">View Job</span>
									</div>
								</div>
							</a>
						</div>
						<!-- End job box -->
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 odd">
						<!-- job box -->
						<div class="feature">
							<a href="#">
								<div class="fbox-photo">
									<img src="website/image/photo-pt-d.jpg" alt="">
								</div>
								<div class="fbox-over">
									<h3 class="title">Health Care</h3>
									<div class="fbox-content">
										<p>The latest job vacancy in Health Care. Click on “View Job” button for get Health Care field Job list.</p>
										<span class="btn">View Job</span>
									</div>
								</div>
							</a>
						</div>
						<!-- End job box -->
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 odd">
						<!-- job box -->
						<div class="feature">
							<a href="#">
								<div class="fbox-photo">
									<img src="website/image/photo-pt-a.jpg" alt="">
								</div>
								<div class="fbox-over">
									<h3 class="title">Construction</h3>
									<div class="fbox-content">
										<p>The latest job vacancy in Construction field. Click on “View Job” button for get Construction field Job list.</p>
										<span class="btn">View Job</span>
									</div>
								</div>
							</a>
						</div>
						<!-- End job box -->
					</div>	
				</div>
				<!-- job Row  #end -->

	        </div>
	    </div>
	</div>
	<!-- End content -->

	@endsection