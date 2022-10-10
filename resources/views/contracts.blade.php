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
    <link rel="stylesheet" href="{{ url('') }}/assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-Variable-font-face.css" rel="stylesheet" type="text/css" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous"> --}}
  </head>
  <body>
    <style>
        * {
            font-family: Vazirmatn !important;
        }
    </style>
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

    <!-- ========================= about-section start ========================= -->
    <section id="about" class="about-section pt-100">
        <div class="container">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item px-0"><a href="#">خانه</a></li>
                  <li class="breadcrumb-item px-0"><a href="#">قرارداد ها</a></li>
                  <li class="breadcrumb-item px-0 active" aria-current="page">قرارداد های مشاوره</li>
                </ol>
              </nav>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content mb-50">
                        <div class="section-title mb-50 ps-lg-5">
                            <h1 class="mb-25">قرارداد های مشاوره</h1>

                            <div class="row">
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3" class="mb-3">قرارداد یک</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد دو</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد سه</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد چهار</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد پنج</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد شش</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد شش</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد شش</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد شش</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد شش</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد شش</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد شش</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد شش</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد شش</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد شش</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 px-sm-2 px-1 mb-3">
                                    <a href="#">
                                    <div class="single-service h-100">
                                        <div class="content position-relative">
                                            <h3 class="mb-3">قرارداد شش</h3>
                                            <p class="mb-3 text-secondary ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <h2 class="price price-badge">190,000<span class="toman">تومان</span></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="accordion pb-15" id="accordionExample">
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
                        </div> --}}
                        <a href="javascript:void(0)" class="main-btn btn-hover">pagination buttons here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= about-section end ========================= -->

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
