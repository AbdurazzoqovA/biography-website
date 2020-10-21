<!DOCTYPE html>
<html lang="en">
<head>

<!-- title -->
<title>{{$single->title}} - {{$single->title}} haqida </title>
<!-- end title -->

<!-- meta description -->
<meta name="description" content="{{ $single->description  }}">
<!-- end meta description -->

<!-- meta tags -->
<meta name="keywords" content="{{ $single->tags }}">
<!-- end meta tags -->

<!-- meta charset -->
<meta charset="utf-8">
<!--  end meta charset -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- meta viewport -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- end meta viewport -->

<meta name="author" content="Mywebsite">



<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('public/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="icon"   type="image/png"   href="{{asset('public/media/favicon-32x32.png')}}">

<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/product_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/product_responsive.css')}}">

</head>

<body>
@php
$category = DB::table('categories')->get();
@endphp

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		

	@include('layouts.menu')

	</header>

	<!-- Single Product -->

	<div class="single_product">
		<div class="container">
			<div class="row">

			<!-- card -->
			<div class="card col-lg-3 order-lg-1 order-2">
				
					<img class="img-thumbnail rounded mx-auto d-block" height="200px;" width="200px;" src="{{URL::to($single->image)}}" alt="{{$single->title}}">
					<div class="">
					  <h4 class="card-title text-center">Qisqacha</h3>
					</div>
					<ul class="list-group list-group-flush">
					  <li class="list-group-item"> <p class="text-center"> <strong> To'liq ismi:</strong></p>  <p class="h6 text-center">{{ $single->fullname}}</p> </li>
					  <li class="list-group-item"> <p class="text-center"><strong>Tug'ilgan sana:</strong></p>  <p class="h6 text-center">  {{ $single->birth_date_maually}}</p> </li>
					  <li class="list-group-item"> <p class="text-center"><strong>Vafot etgan sana:</strong></p>  <p class="h6 text-center">  {{ $single->death_date_maually}}</p> </li>
					  <li class="list-group-item"> <p class="text-center"><strong>Tug'ilgan joyi:</strong></p>  <p class="h6 text-center">  {{ $single->birth_place}}</p> </li>
					  <li class="list-group-item"> <p class="text-center"><strong>Vafot etgan joyi:</strong></p>  <p class="h6 text-center">  {{ $single->death_place}}</p> </li>
					</ul>
				  
				</div>
			<!-- end card -->

			<!-- description -->
			<div class="col-lg-9 order-3">
				<div class="product_description">
                    <h1 class="display-4">{{$single->title}}</h1>
                    {!!$single->full_text!!}
				
					</div>
			</div>

			<!-- end description -->


			</div>
				  
				  

			</div>
		</div>
	</div>

	<!-- Recently Viewed -->



	

	

	<!-- Footer -->

	@include('layouts.footer')

	<!-- Copyright -->

	
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
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
<script src="{{asset('public/frontend/plugins/easing/easing.js')}}"></script>
<script src="{{asset('public/frontend/js/custom.js')}}"></script>
</body>

</html>