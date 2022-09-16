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
							<div class="">
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
		/* .container .rounded .bg-white .mt-5 .mb-5 {
    background: rgb(99, 39, 120) */


.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}

        .form-message {
            font-size: 1.2rem;
            line-height: 1.6rem;
            padding: 4px 0 0;
            color: #f33a58
        }
    
</style>
@endsection()
@section('content')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
	
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" 
			src="{{asset((!empty(Auth::user()->image_account)?'admin/user/'.Auth::user()->image_account:'user/images/profile.jpeg'))}}"><span class="font-weight-bold">{{Auth::user()->name_account}}</span><span class="text-black-50">{{Auth::user()->email_account}}</span><span> </span></div>
        </div>
		
        <div class="col-md-5 border-right">
		<form id="form-1" method="post" action="{{url('/savelala')}}/{{Auth::user()->id}}" enctype="multipart/form-data" >
		@csrf
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <!-- <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                </div> -->
                <div class="row mt-3">
				<div class="lala">
                    <div class="col-md-12"><label class="labels">FULLNAME</label><input id="name" name="name_account" type="text" class="form-control" placeholder="Enter fullname" value="{{Auth::user()->name_account}}"></div>
                    <span class="form-message">{{ $errors->first('username_account') }}</span>	
				</div>
				<div class="lala">
					<div class="col-md-12"><label class="labels">USERNAME</label><input id="username" name="username_account" type="text" disabled class="form-control" placeholder="Enter username" value="{{Auth::user()->username_account}}"></div>
					<span class="form-message"></span>	
				</div>
				<div class="lala">
                    <div class="col-md-12"><label class="labels">ADDRESS</label><input id="adress" name="adress_account" type="text" class="form-control" placeholder="Enter address" value="{{Auth::user()->adress_account}}"></div>
				<div class="lala">
                    <div class="col-md-12"><label class="labels">EMAIL</label><input id="email" name="email_account" type="text" class="form-control" placeholder="Enter email" value="{{Auth::user()->email_account}}"></div>
					<span class="form-message">{{$errors->first('email_account')}}</span>	
				</div>
				<div class="lala">
                    <div class="col-md-12"><label class="labels">NUMBER PHONE</label><input id="phone" name="phone_account" type="text" class="form-control" placeholder="Enter number phone" value="{{Auth::user()->phone_account}}"></div>
					<span class="form-message"></span>	
				</div>
				<div class="lala">
					<div class="col-md-12"><label class="labels">Password</label><input id="pass" name="pass_account" type="password" class="form-control" placeholder="Enter Password" ></div>
					<span class="form-message"></span>	
				</div>
				<div class="lala">
					<div class="col-md-12"><label class="labels">Confirm Password</label><input id="repass" type="password" class="form-control" placeholder="Confirm Password" ></div>
					<span class="form-message"></span>	
				</div>
				<div class="lala">
                    <div class="col-md-12"><label class="labels">GENDER</label>
					<input type="radio" id="radioPrimary1" cheked name="gender_account" value="0"  @if (Auth::user()->gender_account == 0 ) checked @endif>Male
					<input type="radio" id="radioPrimary2" name="gender_account" value="1" @if (Auth::user()->gender_account == 1 ) checked @endif >Female
					<input type="radio" id="radioPrimary3" name="gender_account" value="2" @if (Auth::user()->gender_account == 2 ) checked @endif>Other
					</div>
				<span class="form-message"></span>	
				</div>
				<div class="lala">
					<div class="col-md-12"><label class="labels">BIRTHDAY</label><input type="date" class="form-control" name="dob_account" value="{{Auth::user()->dob_account}}"></div>
					<span class="form-message"></span>	
				</div>
				<div class="lala"> 
                    <div class="col-md-12"><label class="labels">CHANGIMAGE</label><input type="file" name="image_account" accept="image/png, image/jpeg" class="form-control" ></div>
					<span class="form-message"></span>	
				</div> 
                </div>
                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div> -->
				<div class="mt-5 text-center"><button class="btn btn-primary profile-button" >Save Profile</button></div>
            </div>
			</form>
        </div>
        <!-- <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div> -->
    </div>
</div>
</div>
</div>
@endsection()
<script src="{{ asset('admin/dist/js/my.js') }}"></script>
<script>
	  document.addEventListener('DOMContentLoaded', function() {
            // Mong muốn của chúng ta
            Validator({
                form: '#form-1',
                formGroupSelector: '.lala',
                errorSelector: '.form-message',
                rules: [
					Validator.isRequired('#name', 'Please Enter Your Name'),
                    Validator.maxLength('#name',40,'Max 40 characters'),
                    Validator.isRequired('#username','Please Enter Username'),
                    Validator.maxLength('#username',40,'Max 40 characters'),
                
                    Validator.isRequired('#email','Please Enter Your Email'),
                    Validator.isEmail('#email','This is not Email'),
                    Validator.maxLength('#email',40,'Max 40 characters'),
                   
                    Validator.minLength('#pass',6,'Password must be at least 6 characters'),
                    
                    Validator.isConfirmed('#repass', function () {
              return document.querySelector('#form-1 #pass').value;
            }, 'Pass is not the same'),
                    
                    Validator.checkNumber('#phone','Phone is not Number'),
                     Validator.minLength('#phone',10,'Phone number must have 10 digits'),
                    Validator.maxLength('#phone',10,'Max 10 number'),
                   
                    


                ],
                onSubmit: function(data) {
                    // Call API

                }
            });



        });
</script>