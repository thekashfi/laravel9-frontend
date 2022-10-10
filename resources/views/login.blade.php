<!DOCTYPE html>
<html class="no-js" lang="fa" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Bliss || Digital Agency Bootstrap 5 Landing Page</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('') }}/assets/img/favicon.svg" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ url('') }}/assets/css/bootstrap-5.0.0-beta2.min.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/css/animate.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/css/main.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-Variable-font-face.css" rel="stylesheet"
        type="text/css" />
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
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav me-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#home">خانه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">قرارداد ها</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#service">قرارداد های پیمانکاری</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="#0">درخواست قرارداد</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="#0">تماس با ما</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="#0">درباره ما</a>
                                    </li>
                                    {{-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            منوی کاربری
                                        </a>
                                        <ul class="dropdown-menu px-3 shadow rounded-3 border-0 text-end" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="">قرارداد ها</a></li>
                                            <li><a class="dropdown-item" href="">تاریخچه پرداخت</a></li>
                                            <li><a class="dropdown-item" href="">تنظیمات</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="">خروج</a></li>
                                        </ul>
                                    </li> --}}

                                    <li class="nav-item">
                                        <div class="navbar-btn d-none d-sm-inline-block">
                                            <a href="" class="ud-main-btn ud-login-btn">
                                            ورود
                                            </a>
                                            /
                                            <a href="" class="ud-main-btn ud-white-btn">
                                            ثبت نام
                                            </a>
                                        </div>
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

    <div class="pt-100"></div>

    <section class="bg-image">
        <div class="d-flex align-items-center h-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div>
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-2">ثبت نام</h2>
                                <form>
                                    <div class="form-outline mb-3">
                                        <label class="form-label mb-1" for="form3Example1cg">نام</label>
                                        <input type="text" id="form3Example1cg" class="form-control form-control"/>
                                    </div>

                                    <div class="form-outline mb-3">
                                        <label class="form-label mb-1" for="form3Example3cg">ایمیل</label>
                                        <input type="email" id="form3Example3cg" class="form-control form-control"/>
                                    </div>

                                    <div class="form-outline mb-3">
                                        <label class="form-label mb-1" for="form3Example4cg">رمز عبور</label>
                                        <input type="password" id="form3Example4cg" class="form-control form-control"/>
                                    </div>

                                    <div class="form-outline mb-3">
                                        <label class="form-label mb-1" for="form3Example4cdg">تکرار رمز عبور</label>
                                        <input type="password" id="form3Example4cdg" class="form-control form-control"/>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-3">
                                        <input class="form-check-input ms-2" type="checkbox" value="" id="form2Example3cg"/>
                                        <label class="form-check-label" for="form2Example3g">
                                            <a href="#" class="text-body"><u>قوانین و مقرارت</u></a> را میپذیرم
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                    <button type="button" class="btn main-btn btn-hover px-5 py-3">ثبت نام</button>
                                    </div>

                                    <p class="text-center text-muted mt-3 mb-0">حساب کاربری دارید؟? <a href="#" class="fw-bold text-body"><u>وارد شوید</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
