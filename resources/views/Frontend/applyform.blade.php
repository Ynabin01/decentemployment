
@extends("layouts.master")
    @section('topbar')
    @include("Frontend.hometopbar")
    @endsection
    @section('navbar')
    @include("Frontend.homenavbar")
    @endsection
@section('content')

<div class="section-pad mar-t150 bg-light">
		<div class="container">
			<div class="apply-form">
				<h3 class="heading-lg">Apply Form</h3>
				<form id="quote-request" class="form-quote" action="form/quote-request.php" method="post">
						<div class="form-group row">
							<div class="form-field col-md-6 form-m-bttm">
								<input name="quote-request-name" type="text" placeholder="Name *" class="form-control required">
							</div>
							<div class="form-field col-md-6">
								<input name="quote-request-company" type="text" placeholder="Apply for..." class="form-control">
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
							<div class="form-field col-md-6">
								<label>Upload Your Cv</label>
								<input type="file" class="form-control file-upload">
							</div>
						</div>
						<div class="form-group row">
							<div class="form-field col-md-12">
								<textarea name="quote-request-message" placeholder="Messages *" class="txtarea form-control required"></textarea>
							</div>
						</div>
						<input type="text" class="hidden" name="form-anti-honeypot" value="">
						<button type="submit" class="btn">Submit</button>
						<div class="form-results"></div>
					</form>
			</div>
		</div>
	</div>
@endsection