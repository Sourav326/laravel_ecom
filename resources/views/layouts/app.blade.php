<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png')}}">
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Furniture - {{$title}}</title>

		<!-- Bootstrap CSS -->
		<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{asset('assets/css/tiny-slider.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="{{route('home')}}">Furniture<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                        @php
                        	$currenturl = Route::current()->getName();
                        @endphp
                        
                        @foreach ($menuItems as $item)
						    <li class="{{($currenturl == $item->slug) ? 'active':' '}}"><a class="nav-link" href="{{route($item->slug)}}">{{$item->title}}</a></li>
                        @endforeach
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li>
						<!-- <img src="{{asset('assets/images/user.svg')}}"> -->
						@if(Auth::user())
										<a class="nav-link loginLogoutIcon" href="{{route('profile.edit')}}">Profile</a>
							
							@endif
						</li>
						<li>
							<!-- <img src="{{asset('assets/images/user.svg')}}"> -->
							@if(Auth::user())
							<form method="POST" action="{{ route('logout') }}"id="logoutForm">
								@csrf
								<!-- <input style="
												background: none;
												border: none;
											" type="submit" class="nav-link" value="{{ __('Log Out') }}">	 -->
											<a class="nav-link loginLogoutIcon" href="javascript:void(0);" onclick="handleLogoutForm()">Logout</a>
								</form>
								@else
								<a class="nav-link loginLogoutIcon" href="{{route('login')}}">Login</a>
								@endif
							</li>
							<li>
								<a class="nav-link" href="cart.html">
									<img src="{{asset('assets/images/cart.svg')}}">
									<span class="cartItem badge badge-light">4</span>
								</a>
							</li>
					</ul>
				</div>
			</div>
				
		</nav>
        @if (session('success'))
            <div class="toster alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('danger'))
             <div class="toster alert-danger">
                {{ session('danger') }}
            </div>
        @endif
        
		<!-- End Header/Navigation -->


		@if(session('success'))
			<div class="message message-success">
				{{ session('success') }} 😍
			</div>
		@elseif(session('danger'))
			<div class="message message-danger">
				{{ session('danger') }} 🥺
			</div>
		@endif

        @yield('content')



        <!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="{{asset('assets/images/sofa.png')}}" alt="Image" class="img-fluid">
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="{{asset('assets/images/envelope-outline.svg')}}" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

							<form class="row g-3" id="newsletterForm">
                                
								<div class="col-auto">
									<input type="text" name="name" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" name="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto" id="submit-btn" >
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>
                            <span class="subscription-success"></span>
						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="{{route('home')}}" class="footer-logo">Furniture<span>.</span></a></div>
						<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Support</a></li>
									<li><a href="#">Knowledge base</a></li>
									<li><a href="#">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Leadership</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Nordic Chair</a></li>
									<li><a href="#">Kruzo Aero</a></li>
									<li><a href="#">Ergonomic Chair</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('assets/js/tiny-slider.js')}}"></script>
		<script src="{{asset('assets/js/custom.js')}}"></script>
        <script>
			 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
          document.getElementById('submit-btn').addEventListener('click', 
				function(event) {
			
					// Handle the form data
					event.preventDefault();
					$('.subscription-success').text('Loading.........');
					var name = $("input[name=name]").val();
					var email = $("input[name=email]").val();
					if(name == ""){
						$('.subscription-success').text('Name is required');
						return false;
					}
					if(email == ""){
						$('.subscription-success').text("Email is required");
						return false;
					}
			
					$.ajax({
						type:'POST',
						url:"{{ route('home.store') }}",
						data:{name:name, email:email},
						success:function(data){
							if(data.success){
								$('.subscription-success').text(data.success);
								$('.subscription-success').css('color','green');
							} else{
								$('.subscription-success').text(data.fail);
							}
							$('#newsletterForm').trigger("reset")
						}
					});
			});

			function handleLogoutForm(){
				console.log("Clicked");
				document.getElementById("logoutForm").submit();
			}

            setTimeout(myGreeting, 3000);
            function myGreeting(){
                const toster = document.querySelector(".toster");
                toster.style.display = "none"; 
                toster.style.opacity = 0; 
            }
        </script>
	</body>

</html>