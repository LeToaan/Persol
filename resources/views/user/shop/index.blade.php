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
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<link href="{{asset('user/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('user/css/panig.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('user/css/login_overlay.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('user/css/style6.css')}}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{{asset('user/css/shop.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('user/css/owl.carousel.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('user/css/owl.theme.css')}}" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="{{asset('user/css/jquery-ui1.css')}}">
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
		<!-- price range (top products) -->
		<script src="{{asset('user/js/jquery-ui.js')}}"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

		<script src="{{asset('user/js/owl.carousel.js')}}"></script>
		<script>
			$(document).ready(function () {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1,
							nav: true
						},
						600: {
							items: 2,
							nav: false
						},
						900: {
							items: 3,
							nav: false
						},
						1000: {
							items: 4,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>

		<!-- //end-smooth-scrolling -->


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
		<style type="text/css">
		.btn2{
			width: 600;
		}
		</style>
		<style >
		.sale{
			margin-right:85%;
		}
	</style>
@endsection()
@section('content')
@if ($error = Session::get('error'))
<script>window.alert('<?php echo $error ?>')</script>

@endif
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 mt-3">Shopping</h3>
					<div class="row">
						<!-- product left -->
						<div class="side-bar col-lg-3">
							<div class="search-hotel">
								<h3 class="agileits-sear-head">Search Here..</h3>
								<form action="{{url('/search')}}" method="post">
								@csrf
										<input class="form-control" type="search" name="name" placeholder="Search here..." >
										<button class="btn1">
												<i class="fas fa-search"></i>
										</button>
										<div class="clearfix"> </div>
									
							</div>
							<!-- price range -->
							
							<div class="range">
								<h3 class="agileits-sear-head">Price range</h3>
								<ul>
									<li style="list-style-type:none;">

										<input type="number" name="min" style="border: 1;  font-weight: normal;" placeholder="min" />
										<br>
									
										<br>
										<input type="number" name="max"style="border: 1;  font-weight: normal;" placeholder="max" />


									</li>
								</ul>
							
							</div>
							
							<!-- //price range -->
							<!--preference -->
							<div class="left-side">
								<h3 class="agileits-sear-head">Featured</h3>
								<ul>
									<li>
										<input type="radio" class="radio" name="featured" value="hot">
										<span class="span">HOT</span>
									</li>
									<li>
										<input type="radio" class="radio" name="featured" value="new">
										<span class="span">NEW</span>
									</li>
									<li>
										<input type="checkbox" class="radio" name="sale" value="1">
										<span class="span">Sale</span>
									</li>

								</ul>
							</div>
							
							<!-- // preference -->
							<!-- discounts -->
							<div class="left-side">
								<h3 class="agileits-sear-head">Category</h3>
								<ul>
									<li>
										<input type="radio" class="checked" name="category" value="lenses">
										<span class="span">Lenses</span>
									</li>
									<li>
										<input type="radio" class="checked" name="category" value="frame">
										<span class="span">Frame</span>
									</li>
									
								</ul>
							</div>
							<!-- //discounts -->
							<!-- reviews -->
							<!-- <div class="customer-rev left-side">
								<h3 class="agileits-sear-head">Customer Review</h3>
								<ul>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<span>5.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>4.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>3.5</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>3.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>2.5</span>
										</a>
									</li>
								</ul>
							</div> -->
							<!-- //reviews -->
							<!-- deals -->
						</form>
							<div class="deal-leftmk left-side">
								<h3 class="agileits-sear-head">Special Deals</h3>
								<div class="special-sec1">
									@foreach($product3 as $product)
									<div class="img-deals">
										<img src="{{asset('admin/product')}}/{{$product->name_image}}" alt="">
									</div>
									<div class="img-deal1">
										<h3> @if($product->name_category=='contact lens') (Contact Lens) @else {{ucwords($product->category_brand)}}:@endif{{$product->name_product}}</h3>
										@if($product->sale_product)
										<strike><a href="{{url('/single')}}/{{$product->id_product}}">{{number_format($product->price_product,0,',','.')}}đ</a></strike>
										-><a href="{{url('/single')}}/{{$product->id_product}}">{{number_format($product->price_product/100*(100-$product->sale_product),0,',','.')}}đ</a>
										@else
										<a href="{{url('/single')}}/{{$product->id_product}}">{{number_format($product->price_product,0,',','.')}}đ</a>
										@endif
									</div>
						
									<div class="clearfix"></div>
									@endforeach()
								</div>
							</div>
							<!-- //deals -->
						</div>
						<!-- //product left -->
						<!--/product right-->
						<div class="left-ads-display col-lg-9">
							<div class="wrapper_top_shop">
								<div class="row">
										<div class="col-md-6 shop_left">
												<img src="{{asset('user/images/banner3.jpg')}}" alt="">
												<h6>40% off</h6>
											</div>
											<div class="col-md-6 shop_right">
												<img src="{{asset('user/images/banner4.jpg')}}" alt="">
												<h6>50% off</h6>
											</div>
						
								</div>
								<div class="row">
									<!-- /womens -->
									@forelse($products as $product)
									<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item" style="height: 400px">
												<div class="men-thumb-item">
													<img src="{{asset('admin/product')}}/{{$product->name_image}}" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="{{url('/single')}}/{{$product->id_product}}" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
												@if($product->featured_product==1 || $product->created_product>=$timestart)	<span class="product-new-top">@if($product->featured_product==1) Hot @endif @if($product->created_product>=$timestart) New @endif</span> @endif
									
									@if($product->sale_product)	<span class="product-new-top sale">  Sale {{$product->sale_product}}%</span> @endif 
												</div>
												<div class="item-info-product">
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="{{url('/single')}}/{{$product->id_product}}">@if($product->name_category=='contact lens') (Contact Lens) @else {{'('.ucwords($product->category_brand).')'}}@endif{{$product->name_product}}</a>
																</h4>
																<div class="grid-price mt-2">
																@if($product->sale_product)
													<span class="money "><strike>{{number_format($product->price_product,0,',','.')}}đ</strike></span>
													<span class="money ">->{{number_format($product->price_product/100*(100-$product->sale_product),0,',','.')}}đ</span>
													@else
													<span class="money ">{{number_format($product->price_product,0,',','.')}}đ</span>
													@endif
																</div>
															</div>
															
														</div>
														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item" value="{{$product->name_product}}">
																<input type="hidden" name="amount" value="{{$product->price_product}}">
																<!-- <button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button> -->
																<a href="{{route('cart.add',['id'=>$product->id_product])}}"><i class="fas fa-cart-plus"></i></a>
																<a href="{{route('carts.adds',['id'=>$product->id_product])}}" style="color:red"><i class="fa-solid fa-heart"></i></a>
															</form>

														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
									@empty
									<h1 style="margin-left: 42%; color:red;">NO DATA</h1>
									@endforelse()
								</div>
								<div class="pagination">
    							<ul> 
      								<li><span><i class="fas fa-angle-left"></i>Prev</span></li>
									<li class="numb"><span>1</span></li>
									<li class="numb"><span>2</a></li>
									<li class="numb"><span>3</span></li>
									<li class="dots"><span>...</span></li>
									<li class="numb"><span>8</span></li>
									<li class="numb"><span>9</span></li>
									<li><span>Next<i class="fas fa-angle-right"></i></span></li>
								</ul>
							</div>
							</div>
						</div>
						<!--//product right-->
					</div>
					<!--/slide-->
				<div class="slider-img mid-sec mt-lg-5 mt-2">
						<!--//banner-sec-->
						<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Featured Products</h3>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">
								@foreach($products as $product)
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item" style="height:400px">
													<div class="men-thumb-item">
														<img src="{{asset('admin/product')}}/{{$product->name_image}}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{url('/single')}}/{{$product->id_product}}" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														@if($product->featured_product==1 || $product->created_product>=$timestart)	<span class="product-new-top">@if($product->featured_product) Hot @endif New</span>@endif
									
									@if($product->sale_product)	<span class="product-new-top sale">  Sale {{$product->sale_product}}%</span> @endif 
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{url('/single')}}/{{$product->id_product}}">{{$product->name_product}} </a>
																	</h4>
																	<div class="grid-price mt-2">
																	@if($product->sale_product)
													<span class="money "><strike>{{number_format($product->price_product,0,',','.')}}đ</strike></span>
													<span class="money ">->{{number_format($product->price_product/100*(100-$product->sale_product),0,',','.')}}đ</span>
													@else
													<span class="money ">{{number_format($product->price_product,0,',','.')}}đ</span>
													@endif
																	</div>
																</div>
																
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="{{$product->name_product}}">
																	<input type="hidden" name="amount" value="{{number_format($product->price_product,0,',','.')}}">
																	<!-- <button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button> -->
																	<a href="{{route('cart.add',['id'=>$product->id_product])}}"><i class="fas fa-cart-plus"></i></a>
																	<a href="{{route('carts.adds',['id'=>$product->id_product])}}" style="color:red"><i class="fa-solid fa-heart"></i></a>
																</form>
	
															</div>
														</div>
	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach()
							</div>
					</div>
					<!--//slider-->
				</div>
			</div>
		</section>
		<style type="text/css">
		</style>
		<script type="text/javascript">
			// selecting required element
const element = document.querySelector(".pagination ul");
let totalPages = <?php if($totalPage<4) {echo '5';} else {echo $totalPage;} ?>;
let page = <?php echo $page ?>;
//calling function with passing parameters and adding inside element which is ul tag
element.innerHTML = createPagination(totalPages, page);
function createPagination(totalPages, page){
	<?php $link =str_replace($page,'',$_SERVER['PATH_INFO']) ?>
  let liTag = '';
  let active;
  let beforePage = page - 1;
  let afterPage = page + 1;
  if(page > 1){ //show the next button if the page value is greater than 1
    liTag += `<a href="<?php url($link) ?>page=${page-1}"><li class="btn prev" onclick="createPagination(totalPages, ${page - 1})"><span><i class="fas fa-angle-left"></i> Prev</span></li></a>`;
  }
  if(page > 2){ //if page value is less than 2 then add 1 after the previous button
    liTag += `<a href="<?php url($link) ?>page=1"><li class="first numb" onclick="createPagination(totalPages, 1)"><span>1</span></li></a>`;
    if(page > 3){ //if page value is greater than 3 then add this (...) after the first li or page
      liTag += `<li class="dots"><span>...</span></li>`;
    }
  }
  // how many pages or li show before the current li
  if (page == totalPages) {
    beforePage = beforePage - 2;
  } else if (page == totalPages - 1) {
    beforePage = beforePage - 1;
  }
  // how many pages or li show after the current li
  if (page == 1) {
    afterPage = afterPage + 2;
  } else if (page == 2) {
    afterPage  = afterPage + 1;
  }
  for (var plength = beforePage; plength <= afterPage; plength++) {
    if (plength > totalPages) { //if plength is greater than totalPage length then continue
      continue;
    }
    if (plength == 0) { //if plength is 0 than add +1 in plength value
      plength = plength + 1;
    }
    if(page == plength){ //if page is equal to plength than assign active string in the active variable
      active = "active";
    }else{ //else leave empty to the active variable
      active = "";
    }
    liTag += `<a href="<?php url($link) ?>page=${plength}"><li class="numb ${active}" onclick="createPagination(totalPages, ${plength})"><span>${plength}</span></li></a>`;
  }
  if(page < totalPages - 1){ //if page value is less than totalPage value by -1 then show the last li or page
    if(page < totalPages - 2){ //if page value is less than totalPage value by -2 then add this (...) before the last li or page
      liTag += `<li class="dots"><span>...</span></li>`;
    }
    liTag += `<a href="<?php url($link) ?>page=${totalPages}"><li class="last numb" onclick="createPagination(totalPages, ${totalPages})"><span>${totalPages}</span></li></a>`;
  }
  if (page < totalPages) { //show the next button if the page value is less than totalPage(20)
    liTag += `<a href="<?php url($link) ?>page=${page+1}"><li class="btn next" onclick="createPagination(totalPages, ${page + 1})"><span>Next <i class="fas fa-angle-right"></i></span></li></a>`;
  }
  element.innerHTML = liTag; //add li tag inside ul tag
  return liTag; //reurn the li tag
}
		</script>
		
@endsection()