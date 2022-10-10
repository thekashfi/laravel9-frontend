<!DOCTYPE html>
<html class="no-js" lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Bliss || Digital Agency Bootstrap 5 Landing Page</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('') }}/assets/img/favicon.svg"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ url('') }}/assets/css/bootstrap-5.0.0-beta2.min.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/css/animate.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/css/main.css" />
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		<!-- preloader end -->


    <!-- ========================= header start ========================= -->
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                  <img src="{{ url('') }}/assets/img/logo/logo.svg" alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav me-auto">
                    <li class="nav-item">
                      <a class="page-scroll active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="" href="#0">Portfolio</a>
                    </li>
                    <li class="nav-item">
                      <a class="" href="#0">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a class="" href="#0">Team</a>
                    </li>
                    <li class="nav-item">
                      <a class="" href="#0">Contact</a>
                    </li>
                  </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->

    <!-- ========================= hero-section start ========================= -->
    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content">
							<span class="wow fadeInLeft" data-wow-delay=".2s">Welcome To Bliss</span>
              <h1 class="wow fadeInUp" data-wow-delay=".4s">
								You are using free lite version of Bliss.
							</h1>
              <p class="wow fadeInUp" data-wow-delay=".6s">
                Please, purchase full version of the template to get all sections, elements and permission to remove footer credits.
              </p>
							<a href="javascript:void(0)" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Buy Now</a>
            </div>
					</div>
					<div class="col-lg-6">
						<div class="hero-img wow fadeInUp" data-wow-delay=".5s">
							<img src="{{ url('') }}/assets/img/hero/hero-img.svg" alt="">
						</div>
					</div>
        </div>
			</div>
    </section>
		<!-- ========================= hero-section end ========================= -->

		<!-- ========================= client-logo-section start ========================= -->
		<section class="client-logo-section pt-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-logo text-center">
							<img src="{{ url('') }}/assets/img/client-logo/lineicons.svg" alt="">
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-logo text-center">
							<img src="{{ url('') }}/assets/img/client-logo/uideck.svg" alt="">
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-logo text-center">
							<img src="{{ url('') }}/assets/img/client-logo/pagebulb.svg" alt="">
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-logo text-center">
							<img src="{{ url('') }}/assets/img/client-logo/graygrids.svg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= client-logo-section end ========================= -->

		<!-- ========================= about-section start ========================= -->
		<section id="about" class="about-section pt-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-img mb-50">
							<img src="{{ url('') }}/assets/img/about/about-img.svg" alt="about">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-content mb-50">
							<div class="section-title mb-50">
								<h1 class="mb-25">Read more about our Digital Agency</h1>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>
							</div>
							<div class="accordion pb-15" id="accordionExample">
								<div class="single-faq">
									<button class="w-100 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Which Service We Provide?
									</button>

									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="faq-content">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
										</div>
									</div>
								</div>
								<div class="single-faq">
									<button class="w-100 text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										What I need to start design?
									</button>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="faq-content">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
										</div>
									</div>
								</div>
								<div class="single-faq">
									<button class="w-100 text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										What  is our design process?
									</button>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="faq-content">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
										</div>
									</div>
								</div>
							</div>
							<a href="javascript:void(0)" class="main-btn btn-hover">View More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= about-section end ========================= -->

		<!-- ========================= service-section start ========================= -->
		<section id="service" class="service-section img-bg pt-100 pb-100 mt-150">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10">
						<div class="section-title text-center mb-50">
							<h1>Our services</h1>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore.</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-1">
								<i class="lni lni-layers"></i>
							</div>
							<div class="content">
								<h3>UI/UX design</h3>
								<p>Lorem ipsum dolor sitsdw consetsad pscing eliewtr, diam nonumy.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-2">
								<i class="lni lni-code-alt"></i>
							</div>
							<div class="content">
								<h3>Web design</h3>
								<p>Lorem ipsum dolor sitsdw consetsad pscing eliewtr, diam nonumy.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-3">
								<i class="lni lni-pallet"></i>
							</div>
							<div class="content">
								<h3>Graphics design</h3>
								<p>Lorem ipsum dolor sitsdw consetsad pscing eliewtr, diam nonumy.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-4">
								<i class="lni lni-vector"></i>
							</div>
							<div class="content">
								<h3>Brand design</h3>
								<p>Lorem ipsum dolor sitsdw consetsad pscing eliewtr, diam nonumy.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="view-all-btn text-center pt-30">
					<a href="javascript:void(0)" class="main-btn btn-hover">View All Services</a>
				</div>

			</div>
		</section>
		<!-- ========================= service-section end ========================= -->

		<!-- ========================= counter-up-section start ========================= -->
		<section class="counter-up-section pt-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="counter-up-content mb-50">
							<div class="section-title mb-40">
								<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s">Why we are the best, Why you hire?</h1>
								<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
							</div>
							<div class="counter-up-wrapper">
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="single-counter">
											<div class="icon color-1">
												<i class="lni lni-emoji-smile"></i>
											</div>
											<div class="content">
												<h1 id="secondo1" class="countup" cup-end="3642" cup-append=" ">3642</h1>
												<span>Happy client</span>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="single-counter">
											<div class="icon color-2">
												<i class="lni lni-checkmark"></i>
											</div>
											<div class="content">
												<h1 id="secondo2" class="countup" cup-end="5436" cup-append=" ">5436</h1>
												<span>Project done</span>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="single-counter">
											<div class="icon color-3">
												<i class="lni lni-world"></i>
											</div>
											<div class="content">
												<h1 id="secondo3" class="countup" cup-end="642" cup-append="K">642</h1>
												<span>Live Design</span>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="single-counter">
											<div class="icon color-4">
												<i class="lni lni-users"></i>
											</div>
											<div class="content">
												<h1 id="secondo4" class="countup" cup-end="42" cup-append=" ">42</h1>
												<span>Creative designer's</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="counter-up-img mb-50">
							<img src="{{ url('') }}/assets/img/counter-up/counter-up-img.svg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= counter-up-section end ========================= -->
        <section id="pricing" class="pricing-section pt-150">
			<div class="container">
				<div class="row">
					<div class="col-xxl-6 col-xl-5 col-lg-8">
						<div class="pricing-content">
							<div class="image">
								<img src="assets/img/pricing/pricing-shape.svg" alt="">
							</div>
							<div class="section-title">
								<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Chose our pricing</h1>
								<p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Avero eos et accusam et justo duo.</p>
							</div>
						</div>
					</div>

					<div class="col-xxl-6 col-xl-7">
						<div class="pricing-active-wrapper">
							<div class="tns-outer" id="tns2-ow"><div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button type="button" data-controls="prev" tabindex="-1" aria-controls="tns2"><i class="lni lni-chevron-left prev"></i></button><button type="button" data-controls="next" tabindex="-1" aria-controls="tns2"><i class="lni lni-chevron-right next"></i></button></div><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">5 to 6</span>  of 3</div><div id="tns2-mw" class="tns-ovh"><div class="tns-inner" id="tns2-iw"><div class="pricing-active  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns2" style="transition-duration: 0s; transform: translate3d(-36.3636%, 0px, 0px);"><div class="pricing-box tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
									<div class="single-pricing">
										<div class="price-header">
											<div class="shape">
												<svg xmlns="http://www.w3.org/2000/svg" width="142.92" height="137" viewBox="0 0 142.92 137">
													<path id="Path_751" data-name="Path 751" d="M17.065-3.312C-5.734,33.7-93.2,35.845-114.171-.154S-89.6-110.3-45.837-111.307C-2.071-112.381,39.864-40.384,17.065-3.312Z" transform="translate(119.436 111.319)" fill="#ffeaea"></path>
												</svg>
											</div>
											<div class="text">
												<h3 class="package-name">Premium</h3>
												<h2 class="price">$69.00</h2>
											</div>
										</div>
										<ul class="content">
											<li>Landing page design</li>
											<li>Web landing page design</li>
											<li>E-commerce website</li>
											<li>Create new business</li>
											<li>Startup business design</li>
											<li>Product design</li>
										</ul>
										<div class="pricing-btn text-center">
											<a href="javascript:void(0)" class="main-btn btn-hover">Purches now</a>
										</div>
									</div>
								</div><div class="pricing-box tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
									<div class="single-pricing">
										<div class="price-header">
											<div class="shape">
												<svg xmlns="http://www.w3.org/2000/svg" width="142.92" height="137" viewBox="0 0 142.92 137">
													<path id="Path_751" data-name="Path 751" d="M17.065-3.312C-5.734,33.7-93.2,35.845-114.171-.154S-89.6-110.3-45.837-111.307C-2.071-112.381,39.864-40.384,17.065-3.312Z" transform="translate(119.436 111.319)" fill="#ced7ff"></path>
												</svg>
											</div>
											<div class="text">
												<h3 class="package-name">Basic</h3>
												<h2 class="price">$19.00</h2>
											</div>
										</div>
										<ul class="content">
											<li>Landing page design</li>
											<li>Web landing page design</li>
											<li>E-commerce website</li>
											<li>Create new business</li>
											<li>Startup business design</li>
											<li>Product design</li>
										</ul>
										<div class="pricing-btn text-center">
											<a href="javascript:void(0)" class="main-btn btn-hover">Purches now</a>
										</div>
									</div>
								</div><div class="pricing-box tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
									<div class="single-pricing">
										<div class="price-header">
											<div class="shape">
												<svg xmlns="http://www.w3.org/2000/svg" width="142.92" height="137" viewBox="0 0 142.92 137">
													<path id="Path_751" data-name="Path 751" d="M17.065-3.312C-5.734,33.7-93.2,35.845-114.171-.154S-89.6-110.3-45.837-111.307C-2.071-112.381,39.864-40.384,17.065-3.312Z" transform="translate(119.436 111.319)" fill="#ffefff"></path>
												</svg>
											</div>
											<div class="text">
												<h3 class="package-name">Standard</h3>
												<h2 class="price">$39.00</h2>
											</div>
										</div>
										<ul class="content">
											<li>Landing page design</li>
											<li>Web landing page design</li>
											<li>E-commerce website</li>
											<li>Create new business</li>
											<li>Startup business design</li>
											<li>Product design</li>
										</ul>
										<div class="pricing-btn text-center">
											<a href="javascript:void(0)" class="main-btn btn-hover">Purches now</a>
										</div>
									</div>
								</div><div class="pricing-box tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
									<div class="single-pricing">
										<div class="price-header">
											<div class="shape">
												<svg xmlns="http://www.w3.org/2000/svg" width="142.92" height="137" viewBox="0 0 142.92 137">
													<path id="Path_751" data-name="Path 751" d="M17.065-3.312C-5.734,33.7-93.2,35.845-114.171-.154S-89.6-110.3-45.837-111.307C-2.071-112.381,39.864-40.384,17.065-3.312Z" transform="translate(119.436 111.319)" fill="#ffeaea"></path>
												</svg>
											</div>
											<div class="text">
												<h3 class="package-name">Premium</h3>
												<h2 class="price">$69.00</h2>
											</div>
										</div>
										<ul class="content">
											<li>Landing page design</li>
											<li>Web landing page design</li>
											<li>E-commerce website</li>
											<li>Create new business</li>
											<li>Startup business design</li>
											<li>Product design</li>
										</ul>
										<div class="pricing-btn text-center">
											<a href="javascript:void(0)" class="main-btn btn-hover">Purches now</a>
										</div>
									</div>
								</div>
								<div class="pricing-box tns-item tns-slide-active" id="tns2-item0">
									<div class="single-pricing">
										<div class="price-header">
											<div class="shape">
												<svg xmlns="http://www.w3.org/2000/svg" width="142.92" height="137" viewBox="0 0 142.92 137">
													<path id="Path_751" data-name="Path 751" d="M17.065-3.312C-5.734,33.7-93.2,35.845-114.171-.154S-89.6-110.3-45.837-111.307C-2.071-112.381,39.864-40.384,17.065-3.312Z" transform="translate(119.436 111.319)" fill="#ced7ff"></path>
												</svg>
											</div>
											<div class="text">
												<h3 class="package-name">Basic</h3>
												<h2 class="price">$19.00</h2>
											</div>
										</div>
										<ul class="content">
											<li>Landing page design</li>
											<li>Web landing page design</li>
											<li>E-commerce website</li>
											<li>Create new business</li>
											<li>Startup business design</li>
											<li>Product design</li>
										</ul>
										<div class="pricing-btn text-center">
											<a href="javascript:void(0)" class="main-btn btn-hover">Purches now</a>
										</div>
									</div>
								</div>
								<div class="pricing-box tns-item tns-slide-active" id="tns2-item1">
									<div class="single-pricing">
										<div class="price-header">
											<div class="shape">
												<svg xmlns="http://www.w3.org/2000/svg" width="142.92" height="137" viewBox="0 0 142.92 137">
													<path id="Path_751" data-name="Path 751" d="M17.065-3.312C-5.734,33.7-93.2,35.845-114.171-.154S-89.6-110.3-45.837-111.307C-2.071-112.381,39.864-40.384,17.065-3.312Z" transform="translate(119.436 111.319)" fill="#ffefff"></path>
												</svg>
											</div>
											<div class="text">
												<h3 class="package-name">Standard</h3>
												<h2 class="price">$39.00</h2>
											</div>
										</div>
										<ul class="content">
											<li>Landing page design</li>
											<li>Web landing page design</li>
											<li>E-commerce website</li>
											<li>Create new business</li>
											<li>Startup business design</li>
											<li>Product design</li>
										</ul>
										<div class="pricing-btn text-center">
											<a href="javascript:void(0)" class="main-btn btn-hover">Purches now</a>
										</div>
									</div>
								</div>
								<div class="pricing-box tns-item" id="tns2-item2" aria-hidden="true" tabindex="-1">
									<div class="single-pricing">
										<div class="price-header">
											<div class="shape">
												<svg xmlns="http://www.w3.org/2000/svg" width="142.92" height="137" viewBox="0 0 142.92 137">
													<path id="Path_751" data-name="Path 751" d="M17.065-3.312C-5.734,33.7-93.2,35.845-114.171-.154S-89.6-110.3-45.837-111.307C-2.071-112.381,39.864-40.384,17.065-3.312Z" transform="translate(119.436 111.319)" fill="#ffeaea"></path>
												</svg>
											</div>
											<div class="text">
												<h3 class="package-name">Premium</h3>
												<h2 class="price">$69.00</h2>
											</div>
										</div>
										<ul class="content">
											<li>Landing page design</li>
											<li>Web landing page design</li>
											<li>E-commerce website</li>
											<li>Create new business</li>
											<li>Startup business design</li>
											<li>Product design</li>
										</ul>
										<div class="pricing-btn text-center">
											<a href="javascript:void(0)" class="main-btn btn-hover">Purches now</a>
										</div>
									</div>
								</div>
							<div class="pricing-box tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
									<div class="single-pricing">
										<div class="price-header">
											<div class="shape">
												<svg xmlns="http://www.w3.org/2000/svg" width="142.92" height="137" viewBox="0 0 142.92 137">
													<path id="Path_751" data-name="Path 751" d="M17.065-3.312C-5.734,33.7-93.2,35.845-114.171-.154S-89.6-110.3-45.837-111.307C-2.071-112.381,39.864-40.384,17.065-3.312Z" transform="translate(119.436 111.319)" fill="#ced7ff"></path>
												</svg>
											</div>
											<div class="text">
												<h3 class="package-name">Basic</h3>
												<h2 class="price">$19.00</h2>
											</div>
										</div>
										<ul class="content">
											<li>Landing page design</li>
											<li>Web landing page design</li>
											<li>E-commerce website</li>
											<li>Create new business</li>
											<li>Startup business design</li>
											<li>Product design</li>
										</ul>
										<div class="pricing-btn text-center">
											<a href="javascript:void(0)" class="main-btn btn-hover">Purches now</a>
										</div>
									</div>
								</div><div class="pricing-box tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
									<div class="single-pricing">
										<div class="price-header">
											<div class="shape">
												<svg xmlns="http://www.w3.org/2000/svg" width="142.92" height="137" viewBox="0 0 142.92 137">
													<path id="Path_751" data-name="Path 751" d="M17.065-3.312C-5.734,33.7-93.2,35.845-114.171-.154S-89.6-110.3-45.837-111.307C-2.071-112.381,39.864-40.384,17.065-3.312Z" transform="translate(119.436 111.319)" fill="#ffefff"></path>
												</svg>
											</div>
											<div class="text">
												<h3 class="package-name">Standard</h3>
												<h2 class="price">$39.00</h2>
											</div>
										</div>
										<ul class="content">
											<li>Landing page design</li>
											<li>Web landing page design</li>
											<li>E-commerce website</li>
											<li>Create new business</li>
											<li>Startup business design</li>
											<li>Product design</li>
										</ul>
										<div class="pricing-btn text-center">
											<a href="javascript:void(0)" class="main-btn btn-hover">Purches now</a>
										</div>
									</div>
								</div><div class="pricing-box tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
									<div class="single-pricing">
										<div class="price-header">
											<div class="shape">
												<svg xmlns="http://www.w3.org/2000/svg" width="142.92" height="137" viewBox="0 0 142.92 137">
													<path id="Path_751" data-name="Path 751" d="M17.065-3.312C-5.734,33.7-93.2,35.845-114.171-.154S-89.6-110.3-45.837-111.307C-2.071-112.381,39.864-40.384,17.065-3.312Z" transform="translate(119.436 111.319)" fill="#ffeaea"></path>
												</svg>
											</div>
											<div class="text">
												<h3 class="package-name">Premium</h3>
												<h2 class="price">$69.00</h2>
											</div>
										</div>
										<ul class="content">
											<li>Landing page design</li>
											<li>Web landing page design</li>
											<li>E-commerce website</li>
											<li>Create new business</li>
											<li>Startup business design</li>
											<li>Product design</li>
										</ul>
										<div class="pricing-btn text-center">
											<a href="javascript:void(0)" class="main-btn btn-hover">Purches now</a>
										</div>
									</div>
								</div><div class="pricing-box tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
									<div class="single-pricing">
										<div class="price-header">
											<div class="shape">
												<svg xmlns="http://www.w3.org/2000/svg" width="142.92" height="137" viewBox="0 0 142.92 137">
													<path id="Path_751" data-name="Path 751" d="M17.065-3.312C-5.734,33.7-93.2,35.845-114.171-.154S-89.6-110.3-45.837-111.307C-2.071-112.381,39.864-40.384,17.065-3.312Z" transform="translate(119.436 111.319)" fill="#ced7ff"></path>
												</svg>
											</div>
											<div class="text">
												<h3 class="package-name">Basic</h3>
												<h2 class="price">$19.00</h2>
											</div>
										</div>
										<ul class="content">
											<li>Landing page design</li>
											<li>Web landing page design</li>
											<li>E-commerce website</li>
											<li>Create new business</li>
											<li>Startup business design</li>
											<li>Product design</li>
										</ul>
										<div class="pricing-btn text-center">
											<a href="javascript:void(0)" class="main-btn btn-hover">Purches now</a>
										</div>
									</div>
								</div></div></div></div></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= cta-section start ========================= -->
		<section class="cta-section img-bg pt-110 pb-60">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-7">
						<div class="section-title mb-50">
							<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s">Have any project in you mind? You can hire</h1>
							<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-5">
						<div class="cta-btn text-lg-end mb-50">
							<a href="javascript:void(0)" class="main-btn btn-hover text-uppercase">LET'S START YOUR PROJECT</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= cta-section end ========================= -->

    <!-- ========================= footer start ========================= -->
		<footer class="footer">
			<div class="container">
				<div class="widget-wrapper">
					<div class="row">
						<div class="col-xl-3 col-md-6">
							<div class="footer-widget">
								<div class="logo mb-35">
									<a href="index.html"> <img src="{{ url('') }}/assets/img/logo/logo.svg" alt=""> </a>
								</div>
								<p class="desc mb-35">We are expert designer team, There have a lot of designer and developer If you have any project you can hire Create a website.</p>
								<ul class="socials">
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-facebook-filled"></i> </a>
									</li>
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-twitter-filled"></i> </a>
									</li>
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-instagram-filled"></i> </a>
									</li>
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-linkedin-original"></i> </a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-xl-2 offset-xl-1 col-md-5 offset-md-1 col-sm-6">
							<div class="footer-widget">
								<h3>Link</h3>
								<ul class="links">
									<li> <a href="javascript:void(0)">Home</a> </li>
									<li> <a href="javascript:void(0)">About</a> </li>
									<li> <a href="javascript:void(0)">Services</a> </li>
									<li> <a href="javascript:void(0)">Portfolio</a> </li>
									<li> <a href="javascript:void(0)">Pricing</a> </li>
									<li> <a href="javascript:void(0)">Team</a> </li>
									<li> <a href="javascript:void(0)">Contact</a> </li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 col-sm-6">
							<div class="footer-widget">
								<h3>Services</h3>
								<ul class="links">
									<li> <a href="javascript:void(0)">Graphic design</a> </li>
									<li> <a href="javascript:void(0)">Web design</a> </li>
									<li> <a href="javascript:void(0)">Visual design</a> </li>
									<li> <a href="javascript:void(0)">Product design</a> </li>
									<li> <a href="javascript:void(0)">UI/UX design</a> </li>
									<li> <a href="javascript:void(0)">Web development</a> </li>
									<li> <a href="javascript:void(0)">Startup business</a> </li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-md-6">
							<div class="footer-widget">
								<h3>Contact</h3>
								<ul>
									<li>+003894372632</li>
									<li>helldesigner@gmail.ccom</li>
									<li>United state of America</li>
								</ul>
								<div class="contact_map" style="width: 100%; height: 150px; margin-top: 25px;">
									<div class="gmap_canvas">
										<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="width: 100%;"></iframe>
									</div>
									</div>
							</div>
						</div>

					</div>
				</div>

				<div class="copy-right">
					<p>Design and Developed by <a href="https://uideck.com" rel="nofollow" target="_blank"> UIdeck </a></p>
				</div>

			</div>
		</footer>
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{ url('') }}/assets/js/bootstrap-5.0.0-beta2.min.js"></script>
    <script src="{{ url('') }}/assets/js/count-up.min.js"></script>
    <script src="{{ url('') }}/assets/js/tiny-slider.js"></script>
    <script src="{{ url('') }}/assets/js/wow.min.js"></script>
    <script src="{{ url('') }}/assets/js/polifill.js"></script>
    <script src="{{ url('') }}/assets/js/main.js"></script>
  </body>
</html>