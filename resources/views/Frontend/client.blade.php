		
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
								<li class="active"><span>Our Client</span></li>
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
			<div class="content row">
				<div class="col-sm-3">
					<div class="logo-item space-bottom"><img alt="" width="190" height="82" src="website/image/client/Cemix-Ready-mix.png"></div>
				</div>
				<div class="col-sm-3">
					<div class="logo-item space-bottom"><img alt="" width="190" height="82" src="website/image/client/Emirgan_Sutis_Logo-1-1.png"></div>
				</div>
				<div class="col-sm-3">
					<div class="logo-item space-bottom"><img alt="" width="190" height="82" src="website/image/client/Essamente-Illy-1-1.png"></div>
				</div>
				<div class="col-sm-3">
					<div class="logo-item space-bottom"><img alt="" width="190" height="82" src="website/image/client/Haagen-Dazs-Logo-1.png"></div>
				</div>
				<div class="col-sm-3">
					<div class="logo-item space-bottom"><img alt="" width="190" height="82" src="website/image/client/KFM-logo-1.png"></div>
				</div>
				<div class="col-sm-3">
					<div class="logo-item space-bottom"><img alt="" width="190" height="82" src="website/image/client/La-reve-kuwait-1.png"></div>
				</div>
				<div class="col-sm-3">
					<div class="logo-item space-bottom"><img alt="" width="190" height="82" src="website/image/client/logo.png"></div>
				</div>
				<div class="col-sm-3">
					<div class="logo-item space-bottom"><img alt="" width="190" height="82" src="website/image/client/mais-alhanim-rest.-1.png"></div>
				</div>
				<div class="col-sm-3">
					<div class="logo-item space-bottom"><img alt="" width="190" height="82" src="website/image/client/MN-al-hajery-1-1.png"></div>
				</div>
				<div class="col-sm-3">
					<div class="logo-item space-bottom"><img alt="" width="190" height="82" src="website/image/client/Nara-W-rest..png"></div>
				</div>
				<div class="col-sm-3">
					<div class="logo-item space-bottom"><img alt="" width="190" height="82" src="website/image/client/senorita-bananas-by-Sabel-International-Group-1.png"></div>
				</div>
				<div class="col-sm-3">
					<div class="logo-item space-bottom"><img alt="" width="190" height="82" src="website/image/client/t_lounge_Dilmah-1.png"></div>
				</div>
			</div>
		</div>
	</div>
	@endsection