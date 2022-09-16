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
<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link href="{{asset('user/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('user/css/login_overlay.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('user/css/style6.css')}}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="{{asset('user/css/shop.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('user/css/owl.carousel.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('user/css/owl.theme.css')}}" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('user/css/jquery-ui1.css')}}">
<link href="{{asset('user/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="{{asset('user/css/flexslider.css')}}" type="text/css" media="screen" />
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
<!-- single -->
<script src="{{asset('user/js/imagezoom.js')}}"></script>
<!-- single -->
<!-- script for responsive tabs -->
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
<!-- FlexSlider -->
<script src="{{asset('user/js/jquery.flexslider.js')}}"></script>
<script>
   // Can also be used with $(document).ready()
   $(window).load(function () {
   	$('.flexslider1').flexslider({
   		animation: "slide",
   		controlNav: "thumbnails"
   	});
   });
</script>
<!-- //FlexSlider-->
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
<style>
   .collapsible {
   background-color: #777;
   color: white;
   cursor: pointer;
   padding: 18px;
   width: 100%;
   border: none;
   text-align: center;
   outline: none;
   font-size: 15px;
   }
   /* .active, .collapsible:hover {
   background-color: #555;
   } */
   .content {
   padding: 0 18px;
   display: none;
   overflow: hidden;
   background-color: #f1f1f1;
   }
   @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
   .review{
   display: grid;
   height: 100%;
   place-items: center;
   text-align: center;
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: 'Poppins', sans-serif;
   }
   .container1{
   display: inline-block;
   position: relative;
   width: 400px;
   background: #000000;
   padding: 20px 30px;
   border: 1px solid #444;
   border-radius: 5px;
   display: flex;
   align-items: center;
   justify-content: center;
   flex-direction: column;
   box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
   }
   .container1 .post{
   display: none;
   }
   .container1 .text{
   font-size: 25px;
   color: #fe7;
   font-weight: 500;
   }
   .container1 .edit{
   position: absolute;
   right: 10px;
   top: 5px;
   font-size: 16px;
   color: #fe7;
   font-weight: 500;
   cursor: pointer;
   }
   .container1 .edit:hover{
   text-decoration: underline;
   }
   .container1 .star-rating input{
   display: none;
   }
   .star-rating label{
   font-size: 40px;
   color: #444;
   padding: 10px;
   float: right;
   transition: all 0.2s ease;
   }
   input:not(:checked) ~ label:hover,
   input:not(:checked) ~ label:hover ~ label{
   color: #fd4;
   }
   input:checked ~ label{
   color: #fd4;
   }
   input#rate-5:checked ~ label{
   color: #fe7;
   text-shadow: 0 0 20px #952;
   }
   #rate-1:checked ~ form header:before{
   content: "I hate this product ";
   }
   #rate-2:checked ~ form header:before{
   content: "I don't like this product ";
   }
   #rate-3:checked ~ form header:before{
   content: "Normal product ";
   }
   #rate-4:checked ~ form header:before{
   content: "Good product ";
   }
   #rate-5:checked ~ form header:before{
   content: "Great product";
   }
   .container form{
   display: none;
   }
   input:checked ~ form{
   display: block;
   }
   form header{
   width: 100%;
   font-size: 25px;
   color: #fe7;
   font-weight: 500;
   margin: 5px 0 20px 0;
   text-align: center;
   transition: all 0.2s ease;
   }
   form .textarea{
   height: 100px;
   width: 100%;
   overflow: hidden;
   }
   form .textarea textarea{
   height: 100%;
   width: 100%;
   outline: none;
   color: #eee;
   border: 1px solid #333;
   background: #222;
   padding: 10px;
   font-size: 17px;
   resize: none;
   }
   .textarea textarea:focus{
   border-color: #444;
   }
   form .btn{
   height: 45px;
   width: 100%;
   margin: 15px 0;
   }
   form .btn button{
   height: 100%;
   width: 100%;
   border: 1px solid #444;
   outline: none;
   background: #fe7;
   color: #000;
   font-size: 17px;
   font-weight: 500;
   text-transform: uppercase;
   cursor: pointer;
   transition: all 0.3s ease;
   }
   form .btn button:hover{
   background: #FBFF00;
   }
   div.starhays {
  width: 270px;
  display: inline-block;
}
 
input.starhay { display: none; }
 
label.starhay {
  float: right;
  padding: 5px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}
 
input.starhay:checked ~ label.starhay:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}
 
input.starhay-5:checked ~ label.starhay:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}
 
input.starhay-1:checked ~ label.starhay:before { color: #F62; }
 
label.starhay:hover { transform: rotate(-15deg) scale(1.3); }
 
label.starhay:before {
  content: '\f006';
  font-family: FontAwesome;
}
</style>
<script>
   var coll = document.getElementsByClassName("collapsible");
   var i;
   
   for (i = 0; i < coll.length; i++) {
     coll[i].addEventListener("click", function() {
       this.classList.toggle("active");
       var content = this.nextElementSibling;
       if (content.style.display === "block") {
         content.style.display = "none";
       } else {
         content.style.display = "block";
       }
     });
   }
</script>
<script>
   const btn = document.querySelector("button");
   const post = document.querySelector(".post");
   const widget = document.querySelector(".star-rating");
   const editBtn = document.querySelector(".edit");
   btn.onclick = ()=>{
     widget.style.display = "none";
     post.style.display = "block";
     editBtn.onclick = ()=>{
       widget.style.display = "block";
       post.style.display = "none";
     }
     return false;
   }
</script>
<style >
   .sale{
   margin-right:85%;
   }
   .fa-star{
		color: #fff;
   }
</style>
@if(Session::get('success'))
<script>
   window.alert('Thank for your rating.');
</script>
@endif
@endsection()
@section('content')
<section class="banner-bottom-wthreelayouts py-lg-5 py-3 ">
   <div class="container">
      <div class="inner-sec-shop pt-lg-4 pt-3">
         <div class="row">
            <div class="col-lg-4 single-right-left ">
               <div class="grid images_3_of_2">
                  <div class="flexslider1">
                     <ul class="slides">
                        @foreach($imagesIndex as $image)
                        <li data-thumb="{{asset('admin/product')}}/{{$image->name_image}}">
                           <div class="thumb-image"> <img src="{{asset('admin/product')}}/{{$image->name_image}}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                        </li>
                        @endforeach()
                     </ul>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
            <div class="col-lg-8 single-right-left simpleCart_shelfItem">
               <h3>{{$productsIndex->name_product}}</h3>
               @if($productsIndex->sale_product)
               <p>Sale {{$productsIndex->sale_product}}%:<span class="item_price"><strike>{{number_format($productsIndex->price_product,0,',','.')}}đ</strike></span>
                  <span class="item_price">->{{number_format($productsIndex->price_product/100*(100-$productsIndex->sale_product),0,',','.')}}đ</span>
               </p>
               @else
               <p><span class="item_price">{{number_format($productsIndex->price_product,0,',','.')}}đ</span></p>
               @endif
               <div>
			   <div class="starhays">
   
	@for($i=round($rate);$i>0;$i--)
	@if(round($rate)==$i)
	<input class="starhay starhay-{{round($rate)}}" id="starhay-{{round($rate)}}" checked type="radio" name="starhay"/>
   @endif
   <label class="starhay starhay-{{$i}}" for="starhay-{{$i}}"></label>
  
   @endfor
   
  
</div>
               </div>
               <div>
               @if($countRate)<label><h3>{{round($rate,1)}}/{{$countRate}}</h3></label>@else <label><h3>There are no reviews yet</h3></label>  @endif
 
               </div>
               <!-- <div class="description">
                  <h5>Check delivery, payment options and charges at your location</h5>
                  <form action="#" method="post">
                  		<input class="form-control" type="text" name="Email" placeholder="Please enter..." required="">
                  	<input type="submit" value="Check">
                  </form>
                  </div>
                  <div class="color-quality">
                  <div class="color-quality-right">
                  	<h5>Quality :</h5>
                  	<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                  			<option value="null">5 Qty</option>
                  			<option value="null">6 Qty</option> 
                  			<option value="null">7 Qty</option>					
                  			<option value="null">10 Qty</option>								
                  		</select>
                  </div>
                  </div> -->
               <div class="description">
                  @foreach ($properties as $key => $value)
                  @continue ($key=='product_id') 
                  @continue ($key=='id_properties')
                  @continue ($key=='category')
                  <?php $met= array('-','_') ?>
                  {{ucwords(str_replace($met,' ',$key))}}:{{ucwords(str_replace($met,' ',$value))}}
                  <br>
                  @endforeach
                  Category:{{$productsIndex->name_category}}
                  <br>
                  Made in:{{$productsIndex->name_country}}
                  <br>
                  Brand:{{$productsIndex->name_brand}}
               </div>
               <div class="occasional">
                  <h5>Types :</h5>
                  @foreach($imagesColor as $image)
                  <?php $hay='admin/product' ?>
                  <div class="colr">
                     <div class="button-log">						
                        <a class="btn-open" href="#">	
                        <label class="radio" 
                           onclick="changeimg('<?php echo asset('admin/product/'.$image->name_image) ?>')" >
                        <input   type="radio" name="radio"><i></i>{{ucwords($productsIndex->name_product)}} ({{$image->category_image}})</label></a>
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="add-card" style="margin-right:55%">
                  <a href="{{route('cart.add',['id'=>$productsIndex->id_product])}}" class="addtocard">Add to card</i></a>
                  <a href="{{route('carts.adds',['id'=>$productsIndex->id_product])}}" style="color:red;background:none;"><i class="fa-solid fa-heart"></i></a>
                  <button id="btn-export" onclick="exportHTML();">Export to word
                  doc</button>
               </div>
               <ul class="footer-social text-left mt-lg-4 mt-3">
               </ul>
            </div>
            <div class="clearfix"> </div>
            <!--/tabs-->
            <div class="responsive_tabs">
               <div id="horizontalTab">
                  <ul class="resp-tabs-list">
                     <li>Description</li>
                     <li>Reviews</li>
                     <li>Information</li>
                  </ul>
                  <div class="resp-tabs-container">
                     <!--/tab_one-->
                     <div class="tab3">
                        <div class="single_page">
                           <h6>Comment</h6>
                           @forelse($comment as $COMMENT)
                           <p>{{$COMMENT->username_account}} {{$COMMENT->rate}}start :{{$COMMENT->content}}</p>
                           <br>
                           @empty 
                                 no comment
                           @endforelse
                        </div>
                     </div>
                     <!--//tab_one-->
                     <div class="tab2" checked>
                        <div class="single_page">
                           <div class="bootstrap-tab-text-grids review">
                              <!-- <div class="bootstrap-tab-text-grid">
                                 <div class="bootstrap-tab-text-grid-left">
                                 	<img src="{{asset('user/images/team1.jpg')}}" alt=" " class="img-fluid">
                                 </div>
                                 <div class="bootstrap-tab-text-grid-right">
                                 	<ul>
                                 		<li><a href="#">Admin</a></li>
                                 		<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
                                 	</ul>
                                 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
                                 		quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                                 		autem vel eum iure reprehenderit.</p>
                                 </div>
                                 <div class="clearfix"> </div>
                                 </div> -->
                              <!-- <div class="add-review">
                                 <h4>add a review</h4>
                                 <form action="#" method="post">
                                 		<input class="form-control" type="text" name="Name" placeholder="Enter your email..." required="">
                                 	<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
                                 	<textarea name="Message" required=""></textarea>
                                 	<input type="submit" value="SEND">
                                 </form>
                                 </div> -->
                                 @if(!$userComment)
                              <div class="container1">
                                 <div class="post"  id="stat_rating">
                                    <div class="text">Thanks for rating.</div>
                                    <div class="edit"><i class="fas fa-edit"></i></div>
                                 </div>
                                 <div class="star-rating">
                                    <input type="radio" value="1" name="rate"  onclick="rating_product(5)" id="rate-5" class="input">
                                    <label for="rate-5" class="fas fa-star" ></label>
                                    <input type="radio" value="2" name="rate" onclick="rating_product(4)"  id="rate-4" class="input">
                                    <label for="rate-4" class="fas fa-star"></label>
                                    <input type="radio" value="3" name="rate"onclick="rating_product(3)" id="rate-3" class="input">
                                    <label for="rate-3"  class="fas fa-star"></label>
                                    <input type="radio" value="4" name="rate" onclick="rating_product(2)"id="rate-2" class="input">
                                    <label for="rate-2" class="fas fa-star"></label>
                                    <input type="radio" value="5" name="rate" onclick="rating_product(1)"id="rate-1" class="input">
                                    <label for="rate-1" class="fas fa-star"></label>
                                    <form action="{{url('/checkcommand')}}/{{$productsIndex->id_product}}" method="post">
                                       @csrf
                                       <header></header>
                                       <div class="textarea">
										   <input type="text" name="rate"  class="" id="rate">
                                          <textarea cols="30" name="content" placeholder="Please, rate te product."></textarea>
                                       </div>
                                       <div class="btn">
                                          <button type="submit" @if(!Auth::check()) onclick="window.alert('Logging to rating'); return false" @endif> Rating</button class="button">
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              @else 
                              <div class="container1">
                                 <div class="post"  id="stat_rating">
                                    <div class="text">Thanks for rating</div>
                                    <div class="edit"><i class="fas fa-edit"></i></div>
                                 </div>
                                 <div class="star-rating">
                                    <input type="radio" value="1" name="rate" @if($userComment->rate==5) checked @endif  onclick="rating_product(5)" id="rate-5" class="input">
                                    <label for="rate-5" class="fas fa-star" ></label>
                                    <input type="radio" value="2" name="rate"  @if($userComment->rate==4) checked @endif onclick="rating_product(4)"  id="rate-4" class="input">
                                    <label for="rate-4" class="fas fa-star"></label>
                                    <input type="radio" value="3" name="rate"  @if($userComment->rate==3) checked @endif onclick="rating_product(3)" id="rate-3" class="input">
                                    <label for="rate-3"  class="fas fa-star"></label>
                                    <input type="radio" value="4" name="rate"  @if($userComment->rate==2) checked @endif onclick="rating_product(2)"id="rate-2" class="input">
                                    <label for="rate-2" class="fas fa-star"></label>
                                    <input type="radio" value="5" name="rate"  @if($userComment->rate==1) checked @endif onclick="rating_product(1)"id="rate-1" class="input">
                                    <label for="rate-1" class="fas fa-star"></label>
                                    <form action="{{url('/checkcommand')}}/{{$productsIndex->id_product}}" method="post">
                                       @csrf
                                       <header></header>
                                       <div class="textarea">
										   <input type="text" name="rate"  class="" id="rate">
                                          <textarea cols="30" name="content" placeholder="Please, rate the product">{{$userComment->content}}</textarea>
                                       </div>
                                       <div class="btn">
                                          <button type="submit" > Rating</button class="button">
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              @endif
                           </div>
                        </div>
                     </div>
                     <div class="tab1">
                        <div class="single_page">
                           <h6>{{$productsIndex->name_product}}</h6>
                           <p class="para">{{$productsIndex->content_product}}</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--//tabs-->
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <!--/slide-->
      <div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
         <!--//banner-sec-->
         <h3 class="tittle-w3layouts text-left my-lg-4 my-3">Featured Products</h3>
         <div class="mid-slider">
            <div class="owl-carousel owl-theme row">
               @foreach ($product2 as $products)
               <div class="item">
                  <div class="gd-box-info text-center">
                     <div class="product-men women_two bot-gd">
                        <div class="product-googles-info slide-img googles">
                           <div class="men-pro-item">
                              <div class="men-thumb-item">
                                 <img src="{{asset('admin/product')}}/{{$products->name_image}}" class="img-fluid" alt="">
                                 <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                       <a href="{{url('/single')}}/{{$products->id_product}}" class="link-product-add-cart">Quick View</a>
                                    </div>
                                 </div>
                                 <span class="product-new-top">@if($products->featured_product) Hot @endif New</span>
                                 @if($products->sale_product)	<span class="product-new-top sale">  Sale {{$products->sale_product}}%</span> @endif 
                              </div>
                              <div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
                                          <h4>
                                             <a href="{{url('/single')}}/{{$products->id_product}}">{{$products->name_product}} </a>
                                          </h4>
                                          <div class="grid-price mt-2">
                                             @if($products->sale_product)
                                             <span class="money "><strike>{{number_format($products->price_product,0,',','.')}}đ</strike></span>
                                             <span class="money ">->{{number_format($products->price_product/100*(100-$products->sale_product),0,',','.')}}đ</span>
                                             @else
                                             <span class="money ">{{number_format($products->price_product,0,',','.')}}đ</span>
                                             @endif
                                          </div>
                                       </div>
                                      
                                    </div>
                                    <div class="googles single-item hvr-outline-out">
                                       <form action="#" method="post">
                                          <input type="hidden" name="cmd" value="_cart">
                                          <input type="hidden" name="add" value="1">
                                          <input type="hidden" name="googles_item" value="{{$products->name_product}}">
                                          <input type="hidden" name="amount" value="{{$products->price_product}}.00">
                                          <!-- <button type="submit" class="googles-cart pgoogles-cart">
                                             <i class="fas fa-cart-plus"></i>
                                             </button> -->
                                          <a href="{{route('cart.add',['id'=>$products->id_product])}}"><i class="fas fa-cart-plus"></i></a>
                                          <a href="{{route('carts.adds',['id'=>$products->id_product])}}" style="color:red"><i class="fa-solid fa-heart"></i></a>
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
      </div>
      <!--//slider-->
   </div>
   <!-- class="collapse mt-4" -->
   <div class="collapse mt-4">
      <div id="word">
         <div class="container-fluid hayta">
            <!--/slide-->
            <div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
               <!--//banner-sec-->
               <h3 class="tittle-w3layouts text-left my-lg-4 my-3">Product</h3>
               <div class="mid-slider">
                  <div class="">
                     <div class="">
                        <h1>Persol</h1>
                        <h3>{{$productsIndex->name_product}}</h3>
                        @if($productsIndex->sale_product)
                        <p>Sale {{$productsIndex->sale_product}}%:<span class="item_price"><strike>{{number_format($productsIndex->price_product,0,',','.')}}đ</strike></span>
                           <span class="item_price">->{{number_format($productsIndex->price_product/100*(100-$productsIndex->sale_product),0,',','.')}}đ</span>
                        </p>
                        @else
                        <p><span class="item_price">{{number_format($productsIndex->price_product,0,',','.')}}đ</span></p>
                        @endif
                        <br>
                        @foreach ($properties as $key => $value)
                        @continue ($key=='product_id') 
                        @continue ($key=='id_properties')
                        <?php $met= array('-','_') ?>
                        {{ucwords(str_replace($met,' ',$key))}}:{{ucwords(str_replace($met,' ',$value))}}
                        <br>
                        @endforeach
                        Made in:{{$productsIndex->name_country}}
                        <br>
                        Brand:{{$productsIndex->name_brand}}
                     </div>
                     <div class="form-images">
                        @foreach($imagesIndex as $image)
                        {{ucwords($productsIndex->name_product)}} ({{$image->category_image}})
                        <li data-thumb="{{asset('admin/product')}}/{{$image->name_image}}" style="	list-style-type:none;">
                           <div > <img src="{{asset('admin/product')}}/{{$image->name_image}}"   alt=" "> </div>
                        </li>
                        @endforeach()
                        @foreach($imagesColor as $image)
                        {{ucwords($productsIndex->name_product)}} ({{$image->category_image}})
                        <li data-thumb="{{asset('admin/product')}}/{{$image->name_image}}" style="	list-style-type:none;">
                           <div > <img src="{{asset('admin/product')}}/{{$image->name_image}}"   alt=" "> </div>
                        </li>
                        @endforeach()
                     </div>
                     <p class="para">{{$productsIndex->content_product}}</p>
                     <p>
                  </div>
               </div>
            </div>
            <!--//slider-->
         </div>
      </div>
   </div>
</section>
<script>
   function exportHTML(){
      var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
           "xmlns:w='urn:schemas-microsoft-com:office:word' "+
           "xmlns='http://www.w3.org/TR/REC-html40'>"+
           "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
      var footer = "</body></html>";
      var sourceHTML = header+document.getElementById("word").innerHTML+footer;
      
      var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
      var fileDownload = document.createElement("a");
      document.body.appendChild(fileDownload);
      fileDownload.href = source;
      fileDownload.download = 'persol.doc';
      fileDownload.click();
      document.body.removeChild(fileDownload);
   }
//    dùng để lấy giá trị đánh giá 
   function rating_product(rate){
	document.getElementById('rate').value = rate;
   }
</script>
<style type="text/css">
   .responsive_tabs{
   width: 100%;
   }
   .hayta{
   align-items: center;
   text-align: center;
   display: inline-block;
   }
   .form-images{
   display: inline-block;
   color: red;
   }
   .add-card{
   }
   .add-card a{
   background-color: #ccc; /* Green */
   border: none;
   color: white;
   padding: 10px 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   }
   .add-card a:hover{
   color:blue;
   }
</style>
@endsection()