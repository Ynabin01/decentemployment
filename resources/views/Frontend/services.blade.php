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
								<li class="active"><span>Our Services</span></li>
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

	<div class="section section-contents section-pad image-on-right bg-light">
		<div class="container">
			<div class="feature-intro">
				<div class="row">
					<div class="col-sm-4">
						<div class="service-box">
						<div class="icon-box style-s1 photo-plx-full">
							<em class="fa fa-plane" aria-hidden="true"></em>
						</div>
						<h4>Ticketing & Travels Arrrangement</h4>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="service-box">
						<div class="icon-box style-s1">
							<em class="fa fa-hotel" aria-hidden="true"></em>
						</div>
						<h4>Hotel Booking</h4>
					    </div>
					</div>
					<div class="col-sm-4">
						<div class="service-box">
						<div class="icon-box style-s1">
							<em class="fa fa-credit-card" aria-hidden="true"></em>
						</div>
						<h4>Immigration Services</h4>
					    </div>
					</div>
					<div class="col-sm-4">
						<div class="service-box">
						<div class="icon-box style-s1">
							<em class="fa fa-headphones" aria-hidden="true"></em>
						</div>
						<h4>Online Application & Sourcing</h4>
					    </div>
					</div>
					<div class="col-sm-4">
						<div class="service-box">
						<div class="icon-box style-s1 photo-plx-full">
							<em class="fa fa-newspaper-o" aria-hidden="true"></em>
						</div>
						<h4>Advertisement in Newspaper</h4>
					    </div>
					</div>
					<div class="col-sm-4">
						<div class="service-box">
						<div class="icon-box style-s1">
							<em class="fa fa-users" aria-hidden="true"></em>
						</div>
						<h4>Training Services as required</h4>
					    </div>
					</div>
					<div class="col-sm-4">
						<div class="service-box">
						<div class="icon-box style-s1">
							<em class="fa fa-table" aria-hidden="true"></em>
						</div>
						<h4>Inhouse / Field Interviw Selection</h4>
					    </div>
					</div>
				</div>
			</div>		
		</div>
	</div>

	@endsection
	