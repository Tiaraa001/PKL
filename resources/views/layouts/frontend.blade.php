<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Shop</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">

</head>
<body>

	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">

							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
                         @include('layouts.bagian.nav')
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->
    <!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Sports</p>
								<h1>Great Sports Equipment</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">New Products</p>
								<h1>100% Products Original</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->


	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over $75</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>

			<div class="row">
               @foreach ($produk as $data)
			    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="cover"" alt=""></a>
						</div>
						<h3>{{$data->nama_barang}}</h3>
						<p class="product-price"><span>Stok {{$data->stok}}</span> {{$data->harga}} </p>
						<a href=" {{url('cart')}} " class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>
	<!-- end product section -->
	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            <div class="image-column col-lg-12">
                <div class="image">
                    <center><img src="{{asset('frontend/assets/img/olahraga-4.jpg')}}" alt=""></center>
                </div>
            </div>
                <!--Content Column-->
            </div>
        </div>
    </section>
    <!-- end cart banner section -->
	<!-- testimonail-section -->
	<!-- end testimonail-section -->
	<!-- advertisement section -->
	<!-- end advertisement section -->
	<!-- shop banner -->
	<!-- end shop banner -->
	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Our</span> News</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="{{url('/')}}"><div class="latest-news-bg news-bg-1 "></div></a>
						<div class="news-text-box">
							<h3>New Sport 1</h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem consequatur sapiente asperiores reprehenderit deleniti eius alias
                                doloremque pariatur architecto dicta minima saepe cupiditate nemo dignissimos adipisci officiis dolorum, nesciunt in! </p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="{{url('/')}}"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3>New Sport 2</h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas natus veritatis voluptas necessitatibus, asperiores accusamus mollitia odio
                                ipsa amet laudantium sed laboriosam, nostrum omnis. Consectetur repudiandae necessitatibus exercitationem neque placeat.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href="{{url('/')}}"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3>New Sport 3</h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi deleniti repudiandae blanditiis quas doloribus doloremque? Ut odio
                                porro sit reprehenderit dicta tempore aliquid laudantium rerum earum? Alias incidunt ipsa temporibus.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->
	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="{{asset('frontend/assets/img/company-logos/1.png')}}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{asset('frontend/assets/img/company-logos/2.png')}}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{asset('frontend/assets/img/company-logos/3.png')}}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{asset('frontend/assets/img/company-logos/4.png')}}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{asset('frontend/assets/img/company-logos/5.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->
	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	<!-- jquery -->
	<script src="{{asset('frontend/assets/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('frontend/assets/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('frontend/assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('frontend/assets/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('frontend/assets/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('frontend/assets/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>