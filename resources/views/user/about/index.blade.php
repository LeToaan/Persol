@extends('user.layout.index')
@section('css')
<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="{{asset('user/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('user/css/login_overlay.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('user/css/style6.css')}}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{{asset('user/css/shop.css')}}" type="text/css" />
	<link href="{{asset('user/css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('user/css/fontawesome-all.css')}}" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">

@endsection
@section('js')
<script src="{{asset('user/js/jquery-2.2.3.min.js')}}"></script>
	<!-- newsletter modal -->
	<!--search jQuery-->
	<script src="{{asset('user/js/modernizr-2.6.2.min.js')}}"></script>
	<script src="{{asset('user/js/classie-search.js')}}"></script>
	<script src="{{asset('user/js/demo1-search.js')}}"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="{{asset('user/js/minicart.js')}}"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!-- Count-down -->
	<script src="{{asset('user/js/simplyCountdown.js')}}"></script>
	<link href="{{asset('user/css/simplyCountdown.css')}}" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--// Count-down -->
	<script src="{{asset('user/js/move-top.js')}}"></script>
    <script src="{{asset('user/js/easing.js')}}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


	<script src="{{asset('user/js/bootstrap.js')}}"></script>
	<!-- js file -->
@endsection()
@section('content')
<!--//banner -->
</div>
<!--// header_top -->
<!-- top Products -->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
    <div class="container-fluid">

        <div class="inner-sec-shop px-lg-4 px-3">
            <div class="about-content py-lg-5 py-3">
                <div class="row">

                    <div class="col-lg-6 p-0">
                        <img  src="{{asset('user/images/person.jpeg')}}" alt="Goggles" class="img-fluid">
                    </div>
                    <div class="col-lg-6 about-info">
                        <h3 class="tittle-w3layouts text-left mb-lg-5 mb-3">About Us</h3>
                        <p class="my-xl-4 my-lg-3 my-md-4 my-3">PERSOL, formerly known as Intelligence, is one of the largest and fastest growing HR services providers in the Asia Pacific region. With a presence in 10 key APAC markets, PERSOL leverages its strong database of Japanese natives and Japanese-speaking Vietnamese candidates to deliver tailored workforce solutions primarily for Japanese companies in this region. Solutions include hiring permanent and contract staff, outsourcing the hiring process, and outsourcing payroll.

PERSOLKELLY, a joint venture between PERSOL Holdings and Kelly Services, is one of the largest recruitment agencies in Asia Pacific with headquarters in Singapore.

In Vietnam, PERSOL is introduced as Japan Desk under PERSOLKELLY Vietnam Co., Ltd - the largest recruitment agency in Vietnam. Our Japan Desk specializes in serving Japanese companies operating in Vietnam.
                        </p>

                        <a href="{{url('/shop/page=1')}}" class="btn btn-sm animated-button1 gibson-three mt-4">Shop Now</a>

                    </div>
                </div>
            </div>
            <div class="about-content py-lg-5 py-3">
                <div class="row">
                <div class="col-lg-6 about-info">
                        <h3 class="tittle-w3layouts text-left mb-lg-5 mb-3">Store</h3>
                        <p class="my-xl-4 my-lg-3 my-md-4 my-3">Our Stores
Visit us in store and explore all the services in store for you.
                        </p>

                        <a href="{{url('/shop/page=1')}}" class="btn btn-sm animated-button1 gibson-three mt-4">Shop Now</a>

                    </div>
                    <div class="col-lg-6 p-0">
                        <img  src="{{asset('user/images/shoppersol.jpeg')}}" alt="Goggles" class="img-fluid">
                    </div>
                   
                </div>
            </div>
            <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Partners</h3>
            <div class="partners-info">
                <div class="row mt-lg-5 mt-3">
                    <div class="col-md-3 team-main-gd">
                        <div class="team-grid text-center">
                            <div class="team-img">
                                <img class="img-fluid rounded" src="{{asset('img/nghi.jpg')}}" alt="">
                            </div>
                            <div class="team-info">
                                <h4>NGHI PHAN TRUNG</h4>
                                <span>Description </span>
                                <ul class="d-flex justify-content-center py-3 social-icons">
                                    <li>
                                        <a href="https://www.facebook.com/phantrungnghi0" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 team-main-gd">
                        <div class="team-grid text-center">
                            <div class="team-img">
                                <img class="img-fluid rounded" src="{{asset('img/toan.jpg')}}" alt="">
                            </div>
                            <div class="team-info">
                                <h4>TOAN LE THAI</h4>
                                <span>Description </span>
                                <ul class="d-flex justify-content-center py-3 social-icons">
                                    <li>
                                        <a href="https://www.facebook.com/long.nang.3551" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 team-main-gd">
                        <div class="team-grid text-center">
                            <div class="team-img">
                                <img class="img-fluid rounded" src="{{asset('img/thang.jpg')}}" alt="">
                            </div>
                            <div class="team-info">
                                <h4>THANG HUYNH TIEN</h4>
                                <span>Description </span>
                                <ul class="d-flex justify-content-center py-3 social-icons">
                                    <li>
                                        <a href="https://www.facebook.com/huynh.tienthang.3" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 team-main-gd">
                        <div class="team-grid text-center">
                            <div class="team-img">
                                <img class="img-fluid rounded" src="{{asset('img/MAN.jpg')}}" alt="">
                            </div>
                            <div class="team-info">
                                <h4>MAN NGO MINH</h4>
                                <span>Description </span>
                                <ul class="d-flex justify-content-center py-3 social-icons">
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100070280559959" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                       
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /grids -->
            <div class="bottom-sub-grid-content py-lg-5 py-3">
                <div class="row">
                    <div class="col-lg-4 bottom-sub-grid text-center">
                        <div class="bt-icon">

                            <span class="far fa-hand-paper"></span>
                        </div>

                        <h4 class="sub-tittle-w3layouts my-lg-4 my-3">Satisfaction Guaranteed</h4>
                        <p>Money back guarantee <br>
						Best price guarantee<br>
						Lifetime guarantee<br>
						Guaranteed free trial<br>
						Guaranteed free samples<br>
						Guaranteed genuine product
						</p><br>
                        <p>
                            <a href="{{url('/shop/page=1')}}" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                        </p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4 bottom-sub-grid text-center">
                        <div class="bt-icon">
                            <span class="fas fa-rocket"></span>
                        </div>

                        <h4 class="sub-tittle-w3layouts my-lg-4 my-3">Fast Shipping</h4>
                        <p>Goods are sent quickly through the Economic Delivery service provider
You will receive your order within 2 to 4 days.
Orders placed on Saturday and Sunday, your goods will be shipped on Monday of the following week.</p>
                        <p>
                            <a href="{{url('/shop/page=1')}}" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                        </p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4 bottom-sub-grid text-center">
                        <div class="bt-icon">
                            <span class="far fa-sun"></span>
                        </div>

                        <h4 class="sub-tittle-w3layouts my-lg-4 my-3">UV Protection</h4>
                        <p>Light Scan™ intelligent light filtering technology blocks harmful blue light while allowing beneficial turquoise light to pass through, ensuring optimal health for you. At the same time, the visor has an optical transmittance as high as 99%
</p>
                        <p>
                            <a href="{{url('/shop/page=1')}}" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                        </p>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
            </div>
            <!-- //grids -->
            <!--/meddle-->
            <div class="row">
                <div class="col-md-12 middle-slider my-4">
                    <div class="middle-text-info ">

                        <h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Summer Flash sale</h3>
                        <div class="simply-countdown-custom" id="simply-countdown-custom"></div>

                    </div>
                </div>
            </div>
            <!--//meddle-->

            <!-- /testimonials -->
            <div class="testimonials py-lg-4 py-3 mt-4">
                <div class="testimonials-inner py-lg-4 py-3">
                    <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Warranty Policy</h3>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="testimonials_grid text-center">
                                    <h3>Warranty accepted defects
                                        <!-- <span>Customer</span> -->
                                    </h3>
                                    <label>1 year warranty</label>
                                    <p>Loss of welds, peeling, damaged springs, peeling of the scum layer.
Stone beads, beads, glued logo or decorative jewelry on the glass are glued, dropped.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonials_grid text-center">
                                    <h3>Cases not covered by warranty
                                        <!-- <span>Customer</span> -->
                                    </h3>
                                    <!-- <label>United States</label> -->
                                    <p>Stone beads, beads, glued logo or decorative jewelry on the glass are glued, dropped.</p>
                                </div>
                            </div>
                            <!-- <div class="carousel-item">
                                <div class="testimonials_grid text-center">
                                    <h3>Gretchen
                                        <span>Customer</span>
                                    </h3>
                                    <label>United States</label>
                                    <p>Goods with technical defects due to manufacturer's fault, only receive repair, change parts, if not, we will exchange new goods.</p>
                                </div>
                            </div> -->
                            <a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="fas fa-long-arrow-alt-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>

                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /clients-sec -->
            <div class="testimonials p-lg-5 p-3 mt-4">
                <div class="row last-section">
                    <div class="col-lg-3 footer-top-w3layouts-grid-sec">
                        <div class="mail-grid-icon text-center">
                            <i class="fas fa-gift"></i>
                        </div>
                        <div class="mail-grid-text-info">
								<h3>Genuine Product</h3>
								<p>Commitment shop only sell 100%  genuine imported goods</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-shield-alt"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Secure Products</h3>
								<p>Ensure safety for the user's eyes</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Cash on Delivery</h3>
								<p>
Quick payment against</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-truck"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Easy Delivery</h3>
								<p>Guaranteed delivery time</p>
							</div>
                    </div>
                </div>
            </div>
            <!-- //clients-sec -->

        </div>
    </div>
</section>
@endsection()