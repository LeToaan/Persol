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
<link rel="stylesheet" href="{{asset('user/css/owl.carousel.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('user/css/owl.theme.css')}}" type="text/css" media="all">
<link href="{{asset('user/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('user/css/fontawesome-all.css')}}" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
   rel="stylesheet">
@endsection()
@section('js')
<script src="{{asset('user/js/jquery-2.2.3.min.js')}}"></script>
<!-- newsletter modal -->
<!-- Modal -->
<!-- Modal -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog" role="document">
   	<div class="modal-content">
   		<div class="modal-header">
   
   			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
   				<span aria-hidden="true">&times;</span>
   			</button>
   		</div>
   		<div class="modal-body text-center p-5 mx-auto mw-100">
   			<h6>Join our newsletter and get</h6>
   			<h3>50% Off for your first Pair of Eye wear</h3>
   			<div class="login newsletter">
   				<form action="#" method="post">
   					<div class="form-group">
   						<label class="mb-2">Email address</label>
   						<input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="" required="">
   					</div>
   					<button type="submit" class="btn btn-primary submit mb-4">Get 50% Off</button>
   				</form>
   				<p class="text-center">
   					<a href="#">No thanks I want to pay full Price</a>
   				</p>
   			</div>
   		</div>
   
   	</div>
   </div>
   </div> 
   <script>
   $(document).ready(function () {
   	$("#myModal").modal();
   });
   </script> -->
<!-- // modal -->
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
<!-- js file -->
<!-- js file -->
<script>
   function addcart(id){
   	$.ajax({
   		url: 'addcart/'+id,
   		type:'GET',
   	}).done(function(response){
   		console.log(response);
   		$("#change-item-cart").empty();
   		$("#change-item-cart").html(response);
   	});
   }
</script>
<style >
   .sale{
   margin-right:85%;
   }
   .shop{
   display:block;
   }
   .buttonlala {
   background-color: #4CAF50; /* Green */
   border: none;
   color: white;
   padding: 15px 32px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   cursor: pointer;
   }
   .buttonlala2 {background-color: #008CBA;} /* Blue */
</style>
@endsection()
@section('content')
<div class="banner">
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
         <div class="carousel-item active">
            <div class="carousel-caption text-center">
               <h3>Men’s eyewear
                  <span>Cool summer sale off</span>
               </h3>
               <a href="{{url('/shop/page=1')}}" class="btn btn-sm animated-button1 gibson-three mt-4">Shop Now</a>
            </div>
         </div>
         <div class="carousel-item item2">
            <div class="carousel-caption text-center">
               <h3>Women’s eyewear
                  <span>Want to Look Your Best?</span>
               </h3>
               <a href="{{url('/shop/page=1')}}" class="btn btn-sm animated-button1 gibson-three mt-4">Shop Now</a>
            </div>
         </div>
         <div class="carousel-item item3">
            <div class="carousel-caption text-center">
               <h3>Men’s eyewear
                  <span>Cool summer sale off</span>
               </h3>
               <a href="{{url('/shop/page=1')}}" class="btn btn-sm animated-button1 gibson-three mt-4">Shop Now</a>
            </div>
         </div>
         <div class="carousel-item item4">
            <div class="carousel-caption text-center">
               <h3>Women’s eyewear
                  <span>Want to Look Your Best?</span>
               </h3>
               <a href="{{url('/shop/page=1')}}" class="btn btn-sm animated-button1 gibson-three mt-4">Shop Now</a>
            </div>
         </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
   </div>
   <!--//banner -->
</div>
</div>
<!--//banner-sec-->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
   <div class="container-fluid">
      <div class="inner-sec-shop px-lg-4 px-3">
         <h3 class="tittle-w3layouts my-lg-4 my-4">Shopping</h3>
         <h3>Frame</h3>
         <div class="row">
            <!-- /womens -->
            @foreach($frame as $product)
            <div class="col-md-3 product-men women_two">
               <div class="product-googles-info googles">
                  <div class="men-pro-item" style="height: 400px">
                     <div class="men-thumb-item">
                        <img src="{{asset('admin/product')}}/{{$product->name_image}}" class="img-fluid" alt="">
                        <div class="men-cart-pro">
                           <div class="inner-men-cart-pro">
                              <a href="{{url('/single')}}/{{$product->id_product}}" class="link-product-add-cart">Quick View</a>
                           </div>
                        </div>
                        <span class="product-new-top">New</span>
                       
                     </div>
                     <div class="item-info-product">
                        <div class="info-product-price">
                           <div class="grid_meta">
                              <div class="product_price">
                                 <h4>
                                    <a href="{{url('/single')}}/{{$product->id_product}}">@if($product->name_category=='contact lens') (Contact Lens) @else {{'('.ucwords($product->category_brand).')'}}@endif{{$product->name_product}}</a>
                                 </h4>
                                 <div class="grid-price mt-2">
                                   
                                    <span class="money ">{{number_format($product->price_product,0,',','.')}}đ</span>
                                  
                                 </div>
                              </div>
                              
                           </div>
                           <div class="googles single-item hvr-outline-out">
                              <form action="#" method="post">
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="add" value="1">
                                 <input type="hidden" name="googles_item" value="{{$product->name_product}}">
                                 <input type="hidden" name="amount" value="{{number_format($product->price_product/2,0,',','.')}}">
                                 <!-- <a onclick="addcart({{$product->id_product}})" href="javascript:"><i class="fas fa-cart-plus"></i></a> -->
                                 <a href="{{route('cart.add',['id'=>$product->id_product])}}"><i class="fas fa-cart-plus"></i></a>
                                 <a href="{{route('carts.adds',['id'=>$product->id_product])}}" style="color:red"><i class="fa-solid fa-heart"></i></a>
                                 <!-- <button type="submit" class="googles-cart pgoogles-cart">
                                    <i class="fas fa-cart-plus"></i>
                                    </button>
                                    -->
                              </form>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
            </div>
            <br>
            @endforeach()
          
           
            <!-- /mens -->
         </div>
		 <form  align="center" action="{{url('/search')}}" method="post">
		   @csrf
   		<input type="text" class="collapse" name="category" value="frame" >
		   <input type="text" class="collapse" name="featured" value="new" >
		   <br>
		   <button align="center"  class="buttonlala buttonlala2">See more</button>
		</form>





   		<br>
		   <h3>Lenses</h3>
		 <div class="row">
            <!-- /womens -->
            @foreach($lenses as $product)
            <div class="col-md-3 product-men women_two">
               <div class="product-googles-info googles">
                  <div class="men-pro-item" style="height: 400px">
                     <div class="men-thumb-item">
                        <img src="{{asset('admin/product')}}/{{$product->name_image}}" class="img-fluid" alt="">
                        <div class="men-cart-pro">
                           <div class="inner-men-cart-pro">
                              <a href="{{url('/single')}}/{{$product->id_product}}" class="link-product-add-cart">Quick View</a>
                           </div>
                        </div>
                        <span class="product-new-top">New</span>
                     
                     </div>
                     <div class="item-info-product">
                        <div class="info-product-price">
                           <div class="grid_meta">
                              <div class="product_price">
                                 <h4>
                                    <a href="{{url('/single')}}/{{$product->id_product}}">@if($product->name_category=='contact lens') (Contact Lens) @else {{'('.ucwords($product->category_brand).')'}}@endif{{$product->name_product}}</a>
                                 </h4>
                                 <div class="grid-price mt-2">
                                 
                                    <span class="money ">{{number_format($product->price_product,0,',','.')}}đ</span>
                                
                                 </div>
                              </div>
                              
                           </div>
                           <div class="googles single-item hvr-outline-out">
                              <form action="#" method="post">
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="add" value="1">
                                 <input type="hidden" name="googles_item" value="{{$product->name_product}}">
                                 <input type="hidden" name="amount" value="{{number_format($product->price_product/2,0,',','.')}}">
                                 <!-- <a onclick="addcart({{$product->id_product}})" href="javascript:"><i class="fas fa-cart-plus"></i></a> -->
                                 <a href="{{route('cart.add',['id'=>$product->id_product])}}"><i class="fas fa-cart-plus"></i></a>
                                 <a href="{{route('carts.adds',['id'=>$product->id_product])}}" style="color:red"><i class="fa-solid fa-heart"></i></a>
                                 <!-- <button type="submit" class="googles-cart pgoogles-cart">
                                    <i class="fas fa-cart-plus"></i>
                                    </button>
                                    -->
                              </form>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
            </div>
            <br>
            @endforeach()
           
         
            <!-- /mens -->
         </div>
   		
   		<form  align="center" action="{{url('/search')}}" method="post">
		   @csrf
   		<input type="text" class="collapse" name="category" value="lenses" >
		   <input type="text" class="collapse" name="featured" value="new" >
		   <br>
		   <button align="center"  class="buttonlala buttonlala2">See more</button>
		</form>



		 
		 
         <!--//row-->
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
         <!--/slide-->
         <div class="slider-img mid-sec">
            <!--//banner-sec-->
            <div class="mid-slider">
               <div class="owl-carousel owl-theme row">
                  @foreach ($featuredframe as $product)
                  <div class="item">
                     <div class="gd-box-info text-center">
                        <div class="product-men women_two bot-gd">
                           <div class="product-googles-info slide-img googles">
                              <div class="men-pro-item" style="height: 400px" >
                                 <div class="men-thumb-item">
                                    <img src="{{asset('admin/product')}}/{{$product->name_image}}" class="img-fluid" alt="">
                                    <div class="men-cart-pro">
                                       <div class="inner-men-cart-pro">
                                          <a href="{{url('/single')}}/{{$product->id_product}}" class="link-product-add-cart">Quick View</a>
                                       </div>
                                    </div>
                                    <span class="product-new-top">@if($product->featured_product) Hot @endif </span>
                                    @if($product->sale_product)	<span class="product-new-top sale">  Sale {{$product->sale_product}}%</span> @endif 
                                 </div>
                                 <div class="item-info-product">
                                    <div class="info-product-price">
                                       <div class="grid_meta">
                                          <div class="product_price">
                                             <h4>
                                                <a href="{{url('/single')}}/{{$product->id_product}}">@if($product->name_category=='contact lens') (Contact Lens) @else {{'('.ucwords($product->category_brand).')'}}@endif{{$product->name_product}} </a>
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
                                             <a href="{{route('carts.adds',['id'=>$product->id_product])}} " style="color:red"><i class="fa-solid fa-heart"></i></a>
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
                  @foreach ($featuredlenses as $product)
                  <div class="item">
                     <div class="gd-box-info text-center">
                        <div class="product-men women_two bot-gd">
                           <div class="product-googles-info slide-img googles">
                              <div class="men-pro-item" style="height: 400px">
                                 <div class="men-thumb-item">
                                    <img src="{{asset('admin/product')}}/{{$product->name_image}}" class="img-fluid" alt="">
                                    <div class="men-cart-pro">
                                       <div class="inner-men-cart-pro">
                                          <a href="{{url('/single')}}/{{$product->id_product}}" class="link-product-add-cart">Quick View</a>
                                       </div>
                                    </div>
                                    <span class="product-new-top">@if($product->featured_product) Hot @endif </span>
                                    @if($product->sale_product)	<span class="product-new-top sale">  Sale {{$product->sale_product}}%</span> @endif 
                                 </div>
                                 <div class="item-info-product">
                                    <div class="info-product-price">
                                       <div class="grid_meta">
                                          <div class="product_price">
                                             <h4>
                                                <a href="{{url('/single')}}/{{$product->id_product}}">@if($product->name_category=='contact lens') (Contact Lens) @else {{'('.ucwords($product->category_brand).')'}}@endif{{$product->name_product}} </a>
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
                                             <input type="hidden" name="amount" value="{{$product->price_product}}.00">
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
				  <form   align="center" style="height:430px" action="{{url('/search')}}" method="post">
		   @csrf
   				<input type="text" class="collapse" name="sale" value='1'>

		   <br>
		   <button align="center" class="buttonlala buttonlala2" style="align-items: center;justify-content: center; margin-top: 45% ;">See more</button>
		</form>
               </div>
            </div>
         </div>
         <!-- /testimonials -->
         <div class="testimonials py-lg-4 py-3 mt-4">
            <div class="testimonials-inner py-lg-4 py-3">
               <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Warranty Policy</h3>
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                     <div class="carousel-item active">
                        <div class="testimonials_grid text-center">
                           <h3>
                              Warranty accepted defects
                              <!-- <span>Customer</span> -->
                           </h3>
                           <label>1 year warranty</label>
                           <p>Loss of welds, peeling, damaged springs, peeling of the scum layer.
                              Stone beads, beads, glued logo or decorative jewelry on the glass are glued, dropped.
                           </p>
                        </div>
                     </div>
                     <!-- <div class="carousel-item"> -->
                     <!-- <div class="testimonials_grid text-center"> -->
                     <!-- <h3>Cases not covered by warranty -->
                     <!-- <span>Customer</span> -->
                     <!-- </h3> -->
                     <!-- <label>United States</label> -->
                     <!-- <p>Stone beads, beads, glued logo or decorative jewelry on the glass are glued, dropped.</p>
                        </div> -->
                     <!-- </div> -->
                     <div class="carousel-item">
                        <div class="testimonials_grid text-center">
                           <div class="testimonials_grid text-center">
                              <h3>
                                 Cases not covered by warranty
                                 <!-- <span>Customer</span> -->
                              </h3>
                              <!-- <label>United States</label> -->
                              <p>Stone beads, beads, glued logo or decorative jewelry on the glass are glued, dropped.</p>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="carousel-item">
                        <div class="testimonials_grid text-center">
                        	<h3>Gretchen
                        		<span>Customer</span>
                        	</h3>
                        	<label>United States</label>
                        	<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                        		Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
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
         <!-- //testimonials -->
   
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
						Guaranteed genuine product</p>
						<br>
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
                     Orders placed on Saturday and Sunday, your goods will be shipped on Monday of the following week
                  </p>
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
                        Quick payment against
                     </p>
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