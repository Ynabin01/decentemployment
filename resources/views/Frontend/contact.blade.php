@extends("layouts.master")
    @section('topbar')
    @include("Frontend.hometopbar")
    @endsection
    @section('navbar')
    @include("Frontend.homenavbar")
    @endsection
	
    @section('content')

		<div class="banner banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="index.html">Home</a></li>
								<li class="active"><span>Contact Us</span></li>
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
	<div class="section section-contents section-contact bg-light section-pad">
		<div class="container">
			<div class="content row">

				<h2 class="heading-lg">Get in Touch</h2>
				<div class="contact-content row">
					<div class="drop-message col-md-7 res-m-bttm">
						<form id="quote-request" class="form-quote" action="form/quote-request.php" method="post">
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="quote-request-name" type="text" placeholder="Name *" class="form-control required">
									</div>
									<div class="form-field col-md-6">
										<input name="quote-request-subject" type="text" placeholder="Subject" class="form-control">
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="quote-request-email" type="email" placeholder="Email *" class="form-control required email">
									</div>
									<div class="form-field col-md-6">
										<input name="quote-request-phone" type="text" placeholder="Phone *" class="form-control required">
									</div>
								</div>

								<div class="form-group row">
									<div class="form-field col-md-12">
										<textarea name="quote-request-message" placeholder="Do you have any Queries?" class="txtarea form-control required"></textarea>
									</div>
								</div>
								<input type="text" class="hidden" name="form-anti-honeypot" value="">
								<button type="submit" class="btn">Submit</button>
								<div class="form-results"></div>
							</form>
					</div>
					<div class="contact-details col-md-4 col-md-offset-1">
						<ul class="contact-list">
							<li><strong class="color-primary ucap">Address</strong><br>
								<strong>Sunder Nagar Marg-3</strong><br>
								Basundhara, Kathmandu
							</li>
							<li><strong class="color-primary ucap">Phone</strong><br>
								<a href="tel:97714385804">+977-14385804</a><br>
								<a href="tel:9779857089191">+977-9857089191</a>
							</li>
							<li><strong class="color-primary ucap">Email</strong><br>
								<a href="mailto:info@decentemployment.com.np">info@decentemployment.com.np</a>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->

	<div class="location-map">
	<iframe src="<iframe website/https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.2683975985483!2d85.3295958154825!3d27.739866430668002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190065334937%3A0x1d6f41b5c693830b!2sDecent%20employment%20pvt.ltd!5e0!3m2!1sen!2snp!4v1657270849434!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
    
	@endsection
		
		