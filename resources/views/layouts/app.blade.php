<!DOCTYPE html>
<html lang="en">
<head>
<title>Insonlar- tarixiy shaxslar haqida</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="insonlar.uz tarixiy shaxslar haqida batafsil va to'liq malumotlar">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="tarixiy shaxslar, buyuklar,biograsifa,qahramonlar">
<link rel="icon"   type="image/png"   href="{{asset('public/media/favicon-32x32.png')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('public/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/slick-1.8.0/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/responsive.css')}}">

</head>
@php
$categories = DB::table('categories')->get();
@endphp
<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="#">Insonlar</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									
								<form method="post" action="{{route('search.inson')}}" class="header_search_form clearfix">
									@csrf
										<input type="search" required="required" class="header_search_input" placeholder="Insonlarni qidirish" name="search">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">Hamma bo'limlar</span>
												<i class="fas fa-chevron-down"></i>
												
												<ul class="custom_list clc">
													@foreach($categories as $category)
													<li><a class="clc" href="#">{{$category->category_name}}</a></li>
													@endforeach
													
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{asset('public/frontend/images/search.png')}}" alt=""></button>
									</form>
									
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					
				</div>
			</div>
		</div>
		
		

	

	

	@yield('content')

	<!-- Footer -->

	@include('layouts.footer')

	<!-- Copyright -->

	
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="{{('public/frontend/images/logos_1.png')}}" alt=""></a></li>
								<li><a href="#"><img src="{{('public/frontend/images/logos_2.png')}}" alt=""></a></li>
								<li><a href="#"><img src="{{('public/frontend/images/logos_3.png')}}" alt=""></a></li>
								<li><a href="#"><img src="{{('public/frontend/images/logos_4.png')}}" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="{{asset('public/frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('public/frontend/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('public/frontend/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('public/frontend/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('public/frontend/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('public/frontend/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('public/frontend/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('public/frontend/plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{asset('public/frontend/plugins/easing/easing.js')}}"></script>
<script src="{{asset('public/frontend/js/custom.js')}}"></script>
</body>

</html>