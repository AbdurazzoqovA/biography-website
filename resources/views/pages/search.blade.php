<!DOCTYPE html>
<html lang="en">
<head>

<title>Qidiruv - <?php 
foreach($posts as $post){
    echo "$post->title" . ",";
}
  

?>
</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="description" content=" <?php 
foreach($posts as $post){
    echo "$post->title" . ",";
}
  

?> haqida batafsil malumotlar, biografiya.. ">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content=" tarixiy shaxslar, buyuklar, biografiyalar, hukimdorlar,siyosatchilar, ">


<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/bootstrap4/bootstrap.min.css')}}">
<link rel="icon"   type="image/png"   href="{{asset('public/media/favicon-32x32.png')}}">
<link href="{{asset('public/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
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



    <!-- main part here -->


    <div class="single_product">
		<div class="container">
			<div class="row justify-content-center">
                

            <!-- card -->
          @foreach($posts as $post)
            <div class="col-md-2 col-12 col-sm-2 col-lg-2">
                <div class="card">
                    <a href="{{ url( $post->cat_slug . '/' . $post->slug) }}"> <img class="card-img-top" src="{{ URL::to($post->image) }} " alt="{{$post->title}}" ></a>
                    <div class="card-body">
                            <h6 class="card-title text-center">{{\Carbon\Carbon::parse($post->birth_date)->format('Y')}} - {{\Carbon\Carbon::parse($post->death_date)->format('Y')}}</h6>
                            <h5 class="card-title text-center"> <a href="{{ url( $post->cat_slug . '/' . $post->slug) }}"> {{$post->title}}</a></h5>

                   </div>
                </div>
               
            
            </div>
            @endforeach
            





           
        

			</div>
            
             </div>
                                   
        </div>
    </div>
    


    <!-- end main part here -->

	

	

	<!-- Footer -->

	@include('layouts.footer')

	<!-- Copyright -->

	

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