<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>PERSOL</title>
	<link rel="shortcut icon" type="image/png" href="{{asset('admin/dist/img/persol.png')}}"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	@yield('css')

	<script src="https://kit.fontawesome.com/f17e5fb4d2.js" crossorigin="anonymous"></script>
<style type="text/css">
	ul li.ative{
		color: #ff4e00;
        border-radius: 0px;
	}
	.logout{
		display: inline-block;
		position: inline-block;
	}
</style>

</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Need Help</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Call</li>
						<li class="number-phone mt-3">098 8907 9987</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="{{url('/')}}">
							PERSOL </a>
					</h1>
				</div>
				<div width="15%" style="color:red; position:absolute; left: 96%; margin-top: -20px">User:{{$nowIp}}</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4" >
					<ul class="cart-inner-info" >
						<li>
							@if(!Auth::check())
							<a class="btn-open" href="{{route('login')}}">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
							@else
								@if (Auth::user()->image_account == null)
								<a class="btn-open logout" href="{{url('profile')}}">
									<img src="{{asset('user/images/profile.jpeg')}}" style="width: 30px; height: 30px; border-radius: 50%"> {{Auth::user()->name_account}} 
									<a href="{{route('logout')}}" class="nav-link">Logout</a>
								</a>
								@else
								<a class="btn-open logout" href="{{url('profile')}}">
								<img src="{{asset('admin/user/'.Auth::user()->image_account)}}" style="width: 30px; height: 30px;">   {{Auth::user()->name_account}} 
								<a href="{{route('logout')}}" class="nav-link">Logout</a>
								</a>
								@endif
							
							@endif
						</li>
						@if(Auth::check())
							@if(Auth::user()->rank_account<=2)
								<div style="position: absolute; right: 390%; margin-top: -25%">
								<a class="btn-open" href="{{route('admin.home')}}">
								<span  class="fas fa-house-chimney fa-fw"  aria-hidden="true">Admin</span>
								</a>
								</div>
							@endif
						@endif
						<li class="galssescart galssescart2 cart cart box_1">
							<a href="{{route('cart.view')}}"><i class="fas fa-cart-arrow-down" > ({{$cart->total_quantity}}
							)
							</i></a>
						<!-- </li>
						<li class="galssescart galssescart2 cart cart box_1"> -->
							<a href="{{route('carts.views')}}"><i class="fa-solid fa-heart" style="color:red">({{$carts->total_quantitys}}
							)</i>
							
							</i></a>
						</li>
					</ul>
					<!---->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4"></h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="#" method="post">
									<div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
									<div class="form-check mb-2">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">Check me out</label>
									</div>
									<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>

								</form>
							</div>
							
						</div>
					</div>
					<!---->
				</div>
			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form action="{{url('/search')}}" method="post" class="d-flex">
					@csrf
						<input class="form-control" type="search" name="name" placeholder="Search here...">
						<button type="submit" class="btn btn-primary submit">
							<i class="fas fa-search"></i>
						</button>
					</form>

				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto" id="navbar">
						<li class="nav-item">
							<a class="nav-link ml-lg-0" href="{{url('/')}}">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('/about')}}">About us</a>
						</li>
						<li class="nav-item dropdown">
							<!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Features
							</a> -->
							<!-- <ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="{{url('/shop')}}">Designer Glasses</a>
												</li>
												<li class="">
													<a href="{{url('/shop')}}"> Ray-Ban</a>
												</li>
												<li>
													<a href="{{url('/shop')}}">Prescription Glasses</a>
												</li>
												<li class="mt-3">
													<h5>View more pages</h5>
												</li>
												<li class="mt-2">
													<a href="{{url('/about')}}">About</a>
												</li>
												<li>
													<a href="{{url('/customer')}}">Customers</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="{{url('/shop')}}">
													<img src="{{asset('user/images/g2.jpg')}}" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub">Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="{{url('/shop')}}">
													<img src="{{asset('user/images/g3.jpg')}}" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul> -->
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Shop
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h3 class="tittle-w3layouts-sub"> Brand </h3>
											<ul>
												<li class="media-mini mt-3 ">
													<h5><a href="{{url('/shop')}}">Frame</a></h5>
													<h6 class="h6"><a href="{{url('/frame/brand/Prada/page=1')}}">Prada</a>|</h6>
													<h6 class="h6"><a href="{{url('/frame/brand/Burberry/page=1')}}">Burberry</a>|</h6>
													<h6 class="h6"><a href="{{url('/frame/brand/Charriol/page=1')}}">Charriol</a>|</h6>
													<h6 class="h6"><a href="{{url('/frame/brand/Michael Kors/page=1')}}">Michael Kors</a>|</h6>
													<h6 class="h6"><a href="{{url('/frame/brand/Rayban/page=1')}}">Rayban</a>|</h6>
													<h6 class="h6"><a href="{{url('/frame/brand/Invu/page=1')}}">Invu</a>|</h6>
													<h6 class="h6"><a href="{{url('/frame/brand/Parim/page=1')}}">Parim</a>|</h6>
													<h6 class="h6"><a href="{{url('/frame/brand/Armani Exchange/page=1')}}">Armani Exchange</a></h6>
												</li>
												<li class="media-mini mt-3">
													<h5><a href="{{url('/shop')}}">Lenses</a></h5>
													<h6 class="h6"><a href="{{url('/lenses/brand/V-idol/page=1')}}">V-idol</a>|</h6>
													<h6 class="h6"><a href="{{url('/lenses/brand/Chemi/page=1')}}">Chemi</a>|</h6>
													<h6 class="h6"><a href="{{url('/lenses/brand/Hoya/page=1')}}">Hoya</a>|</h6>
													<h6 class="h6"><a href="{{url('/lenses/brand/Essilor/page=1')}}">Essilor</a>|</h6>
													<h6 class="h6"><a href="{{url('/lenses/brand/VX/page=1')}}">VX</a></h6>
												</li>
												<li class="media-mini mt-3">
													<h5><a href="{{url('/shop')}}">Contact lens</a></h5>
													<h6 class="h6"><a href="{{url('/lenses/brand/Acros/page=1')}}">Acros</a>|</h6>
													<h6 class="h6"><a href="{{url('/lenses/brand/Caras/page=1')}}">Caras</a></h6>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h3 class="tittle-w3layouts-sub"> Material </h3>
											<ul>
											<li class="media-mini mt-3">
													<h5><a href="#">Frame</a></h5>
													
												</li>
											<ul>
											<li class="media-mini mt-3">
													<h6><a href="{{url('/frame/material/metal/page=1')}}">Metal</a></h6>
												</li>
											<li class="media-mini mt-3">
													<h6><a href="{{url('/frame/material/plastic/page=1')}}">Plastic</a></h6>
												</li>
												
											</ul>
											<ul class="sub-in text-left">

												
											</ul>

										</div>
										<div class="col-md-4 media-list span4 text-left">

											<h3 class="tittle-w3layouts-sub-nav">Category </h3>
											<ul>
											<li class="media-mini mt-3 ">
													<h5><a href="{{url('/frame/category/properties/page=1')}}">Frame</a></h5>
													
												</li>
												<li class="media-mini mt-3">
													<h5><a href="{{url('/lenses/category/properties/page=1')}}">Lenses</a></h5>
													
												</li>
												
											</ul>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('/contact')}}">Contact</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
		<!-- banner -->
		
			@yield('content')
	
	<!-- about -->
	<!--footer -->
	<footer class="py-lg-5 py-3" id="footer">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>PERSOLKELLY company, a joint venture between PERSOL Holdings and Kelly Services, is one of the largest recruitment companies in APAC with its headquarters in Singapore.</p>
						<ul class="footer-social text-left mt-lg-4 mt-3">

							<li class="mx-2">
								<a href="#">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-google-plus-g"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-linkedin-in"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fas fa-rss"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-vk"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Get in touch</h3>
					</div>
					<div class="contact-info">
						<h4>Location :</h4>
						<p>35/6, D5, Binh Thanh District, Ho Chi Minh City.</p>
						<div class="phone">
							<h4>Contact :</h4>
							<p>Phone :098 8907 9987</p>
							<p>Email :
								<a href="mailto:thaitoan553@gmail.com">thaitoan553@gmail.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Quick Links</h3>
					</div>
					<ul class="links">
						<li>
							<a href="{{url('/')}}">Home</a>
						</li>
						<li>
							<a href="{{url('/about')}}">About us</a>
						</li>
						<li>
							<a href="{{url('/shop/page=1')}}">Shop</a>
						</li>
						<li>
							<a href="{{url('/contact')}}">Contact Us</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Sign up for your offers</h3>
					</div>
					<div class="footer-text">
						<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
						<form action="{{url('/contact')}}" method="get">
							<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
							<button class="btn1">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
				
			</div>
			
			<!-- <div class="copyright-w3layouts mt-4">
				<p class="copy-right text-center ">&copy; 2018 Goggles. All Rights Reserved | Design by
					<a href="http://w3layouts.com/"> W3layouts </a>
				</p>
			</div> -->
		</div>
		
	</footer>
	<!-- //footer -->

	<footer class="py-lg-55 py-3" id="footer1">
		<table >
			<tr >
				<td width="30%"style="color:red"><?php echo date('d-m-Y H:i:s');?></td> </td>
				<td width="80%"></td>
			</tr>
		</table>
	</footer>
	<!--jQuery-->
	@yield('js')
	<script>
		function changeimg(place){
			document.querySelector('.login').innerHTML='<img src="'+place+'">'	;
			console.log(document.querySelector('.login'))
		}
	</script>
</body>
<style type="text/css">
	.h6{
		display: inline-block;
	}
	
</style>
</html>