@extend('user.layout.index')
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
@endsection()
@section('js')

	<!--jQuery-->
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
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">

			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts text-center my-lg-4 my-3">Customer says</h3>
				<div class="row">
					<div class="col-lg-3 customer-main">
						<div class="card">
							<div class="card-body">
								<div class="customer-img">
									<img src="{{asset('user/images/team1.jpg')}}" alt=" " class="img-fluid rounded">
								</div>
								<div class="customer-info text-left py-lg-4 py-2">
									<h4>Customer 1</h4>
									<h6>Lorem ipsum dolor sit</h6>
									<p>Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
									<div class="row  pt-3 mt-3 team-social border-top">
										<h5 class="col-md-4 text-left">Contact</h5>
										<ul class="col-md-8 d-flex justify-content-right social-icons">


											<li>
												<a href="#">
													<i class="fab fa-facebook-f"></i>
												</a>
											</li>
											<li class="mx-3">
												<a href="#">
													<i class="fab fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-google-plus-g"></i>
												</a>
											</li>

										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 customer-main">
						<div class="card">
							<div class="card-body">
								<div class="customer-img">
									<img src="{{asset('user/images/team2.jpg')}}" alt=" " class="img-fluid rounded">
								</div>
								<div class="customer-info text-left py-lg-4 py-2">
									<h4>Customer 2</h4>
									<h6>Lorem ipsum dolor sit</h6>
									<p>Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros..

									</p>
									<div class="row  pt-3 mt-3 team-social border-top">
										<h5 class="col-md-4 text-left">Contact</h5>
										<ul class="col-md-8 d-flex justify-content-right social-icons">


											<li>
												<a href="#">
													<i class="fab fa-facebook-f"></i>
												</a>
											</li>
											<li class="mx-3">
												<a href="#">
													<i class="fab fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-google-plus-g"></i>
												</a>
											</li>

										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 customer-main">
						<div class="card">
							<div class="card-body">
								<div class="customer-img">
									<img src="{{asset('user/images/team3.jpg')}}" alt=" " class="img-fluid rounded">
								</div>
								<div class="customer-info text-left py-lg-4 py-2">
									<h4>Customer 3</h4>
									<h6>Lorem ipsum dolor sit</h6>
									<p>Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
									<div class="row  pt-3 mt-3 team-social border-top">
										<h5 class="col-md-4 text-left">Contact</h5>
										<ul class="col-md-8 d-flex justify-content-right social-icons">


											<li>
												<a href="#">
													<i class="fab fa-facebook-f"></i>
												</a>
											</li>
											<li class="mx-3">
												<a href="#">
													<i class="fab fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-google-plus-g"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 customer-main">
						<div class="card">
							<div class="card-body">
								<div class="customer-img">
									<img src="{{asset('user/images/team4.jpg')}}" alt=" " class="img-fluid rounded">
								</div>
								<div class="customer-info text-left py-lg-4 py-2">
									<h4>Customer 4</h4>
									<h6>Lorem ipsum dolor sit</h6>
									<p>Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
									<div class="row  pt-3 mt-3 team-social border-top">
										<h5 class="col-md-4 text-left">Contact</h5>
										<ul class="col-md-8 d-flex justify-content-right social-icons">


											<li>
												<a href="#">
													<i class="fab fa-facebook-f"></i>
												</a>
											</li>
											<li class="mx-3">
												<a href="#">
													<i class="fab fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-google-plus-g"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 customer-main mt-lg-4">
						<div class="card">
							<div class="card-body">
								<div class="customer-img">
									<img src="{{asset('user/images/team3.jpg')}}" alt=" " class="img-fluid rounded">
								</div>
								<div class="customer-info text-left py-lg-4 py-2">
									<h4>Customer 5</h4>
									<h6>Lorem ipsum dolor sit</h6>
									<p>Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros..</p>
									<div class="row  pt-3 mt-3 team-social border-top">
										<h5 class="col-md-4 text-left">Contact</h5>
										<ul class="col-md-8 d-flex justify-content-right social-icons">


											<li>
												<a href="#">
													<i class="fab fa-facebook-f"></i>
												</a>
											</li>
											<li class="mx-3">
												<a href="#">
													<i class="fab fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-google-plus-g"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 customer-main mt-lg-4 mt-2">
						<div class="card">
							<div class="card-body">
								<div class="customer-img">
									<img src="{{asset('user/images/team1.jpg')}}" alt=" " class="img-fluid rounded">
								</div>
								<div class="customer-info text-left py-lg-4 py-2">
									<h4>Customer 6</h4>
									<h6>Lorem ipsum dolor sit</h6>
									<p>Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros..</p>
									<div class="row  pt-3 mt-3 team-social border-top">
										<h5 class="col-md-4 text-left">Contact</h5>
										<ul class="col-md-8 d-flex justify-content-right social-icons">


											<li>
												<a href="#">
													<i class="fab fa-facebook-f"></i>
												</a>
											</li>
											<li class="mx-3">
												<a href="#">
													<i class="fab fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-google-plus-g"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection()