	
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
								<li class="active"><span>About Us</span></li>
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
	<div class="section section-contents section-pad about-sec">
		<div class="container">
			<div class="content row row-vm">

				<div class="col-sm-7 pad-r res-m-bttm">
					<h2 class="heading-lg">About Us</h2>
					
					<p><strong>Decent Employment (P) Ltd.</strong> is a venture started by professionals having decade of experience in the field. Our mission is to provide smooth recruitment service experience for the Employer Company and the Employee. We have designed best processes and policies to avoid malpractices and serve to the best satisfaction of client and candidates.</p>
					<p>We are registered and approved recruiting company by Nepal Government having <strong>Recruitment License Number 904/067/68.</strong></p>
					<p>We have a team of best experienced peoples at varies sectors and fields which makes us capable for handling recruitment process for different sector.</p>
					<p><strong>We provide full range of recruitment service to our customers:</strong></p>
					<ul>
						<li>Vacancy announcement through various appropriate means.</li>
						<li>Sourcing right Candidates</li>
						<li>Selecting the right Candidates for the jobs</li>
						<li>Training Services as required through our associates</li>
						<li>All government related immigration services</li>
						<li>Travel Arrangements</li>
						<li>Hotel Booking and other travels services as and when required.</li>
					</ul>
				</div>
				<div class="col-sm-5">
					<img alt="" src="website/image/photo-sm-a.jpg">
				</div>

			</div>
		</div>
	</div>
	<!-- End content -->

	<!-- Testimonials -->
	<div class="section section-quotes section-pad bg-light">
		<div class="container">
			<div class="content row">
			
				<div class="col-md-offset-2 col-md-8 center">
					<h2 class="heading-lg">Message From Chairman</h2>
				</div>
				<div class="gaps"></div>
				<div class="testimonials">
					<div class="quotes-slider quotes-boxed col-md-8 col-md-offset-2">

							<div class="item">
								<!-- Each Quotes -->
								<div class="quotes">
									<div class="quotes-text center">
										<p>Decent Employment (P) Ltd. is a venture started by professionals having decade of experience in the field. Our mission is to provide smooth recruitment service experience for the Employer Company and the Employee.</p>
									</div>
									<div class="profile">
										<img src="website/image/profile-img.jpg" alt="">
										<h5>Full Name</h5>
										<h6>Chairman, Decent Empolyment PVT. LTD.</h6>
									</div>
								</div>
								<!-- End Quotes -->
							</div>
							<!-- End Slide -->
						<!-- End Slide -->
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Section -->

	@endsection