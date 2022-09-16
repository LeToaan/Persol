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
	<link rel="stylesheet" type="text/css" href="{{asset('user/css/checkout.css')}}">
	<link href="{{asset('user/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('user/css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('user/css/fontawesome-all.css')}}" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">

@endsection()
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
	<!-- easy-responsive-tabs -->
	<script src="{{asset('user/js/easy-responsive-tabs.js')}}"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<!--close-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<!--//close-->

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
		<div class="container">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 mt-3">Checkout </h3>
				<div class="checkout-right"><?php $n=1; ?>
					<form method="post" action="{{url('/checkout')}}">
				
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Name</th>
								
								@foreach($products as $product) 
									<td class="invert">{{$product->name_product}}</td>
								
								@endforeach
								
								
								
								
								
							</tr>
							<tr>
								<th>Images</th>
								<?php $count = 0; ?>
								@foreach($products as $product) 
								<td class="invert-image">
										<img width="100" src="{{asset('admin/product')}}/{{$product->name_image}}" alt=" " class="img-responsive">
								</td>
								
								@endforeach()
								</tr>
								<tr>
								<th>Property</th>

								@foreach($propertieses as $properties) 
									<td>
									@foreach ($properties as $key => $value)
                 					 @continue ($key=='product_id') 
                 					 @continue ($key=='id_properties')
									  @continue ($key=='category')
                 					 <?php $met= array('-','_') ?>
                  					{{ucwords(str_replace($met,' ',$key))}}:{{ucwords(str_replace($met,' ',$value))}}
                  					<br>
                  					@endforeach
								</td>
								
								@endforeach
								</tr>
								<tr>
								<th>Brand</th>
								@foreach($products as $product) 
									<td class="invert">{{$product->name_brand}}</td>
								
								@endforeach
								
								</tr>
								<tr>
								<th>Country</th>
								@foreach($products as $product) 
									<td class="invert">{{$product->name_country}}</td>
								
								@endforeach
								
								</tr>
								<tr>
								<th>Category</th>
								@foreach($products as $product) 
									<td class="invert">{{$product->name_category}}</td>
								
								@endforeach
								
								</tr>
								<tr>
								<th>Price</th>
								@foreach($products as $product) 
									<td class="invert">{{number_format($product->price_product,0,',','.')}}đ</td>
								
								@endforeach
								
								</tr>
								<tr>
								<th>Intro</th>
								@foreach($products as $product) 
									<td class="invert">{{$product->content_product}}đ</td>
								
								@endforeach
								</tr>
								<th>Option</th>
								@foreach($products as $product) 
									<td class="invert">		<a href="{{route('carts.remove',['id'=>$product->id_product])}}">Remove</a></td>
									
								@endforeach
								</tr>
							
								
							</tr>
						</thead>
						<tbody>
						
						</tbody>
					</table>
				</div>
				<div class="checkout-left row">
					
	</form>
					<div class="col-md-8 address_form">
						
					</div>

					<div class="clearfix"> </div>

				</div>

			</div>

		</div>
	</section>
@endsection()