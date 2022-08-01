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
								<li class="active"><span>Gallery</span></li>
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
	<!-- Content Section -->
	<div class="section section-contents section-pad">
		<div class="container">
			<div class="content row">
				<!-- Gallery  -->
				<div class="gallery gallery-col3 gallery-grids gallery-lightbox hover-fade">
					<ul class="gallery-list">
						<li>
							<a href="image/gallery/g1-lg.jpg">
							<div class="gallery-item"><img src="website/image/gallery/g1-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g2-lg.jpg">
							<div class="gallery-item"><img src="website/image/gallery/g2-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g1-lg.jpg">
							<div class="gallery-item"><img src="website/image/gallery/g1-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g2-lg.jpg">
							<div class="gallery-item"><img src="website/image/gallery/g2-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g1-lg.jpg">
							<div class="gallery-item"><img src="website/image/gallery/g1-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g2-lg.jpg">
							<div class="gallery-item"><img src="website/image/gallery/g2-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g1-lg.jpg">
							<div class="gallery-item"><img src="website/image/gallery/g1-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g2-lg.jpg">
							<div class="gallery-item"><img src="website/image/gallery/g2-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g1-lg.jpg">
							<div class="gallery-item"><img src="website/image/gallery/g1-lg.jpg" alt="Nature"></div>
							</a>
						</li>
					</ul>
				</div>
				<!-- Gallery #end -->
			</div>
		</div>		
	</div>
	@endsection