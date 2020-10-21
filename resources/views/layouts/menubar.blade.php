<!-- Main Navigation -->
@php
$categories = DB::table('categories')->get();
@endphp
<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">Bo'limlar</div>
								</div>

								<ul class="cat_menu">
									@foreach($categories as $cat)
							<li><a href="{{ url('category' . '/' . $cat->cat_slug . '/' .  $cat->id) }}">{{$cat->category_name}} <i class="fas fa-chevron-right ml-auto"></i></a></li>
									@endforeach
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="{{ url('/') }}">Bosh sahifa<i class="fas fa-chevron-down"></i></a></li>
									
									
									
									<li><a href="#">Biz haqimizda<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">Biron narsa<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">Biron narsa<i class="fas fa-chevron-down"></i></a></li>

									<li><a href="#">Biron narsa<i class="fas fa-chevron-down"></i></a></li>

								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

		

	</header>
	
	<!-- Banner -->

	<div class="banner">
		<div class="banner_background" style="background-image:url({{asset('images/banner_background.jpg')}})"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="{{asset('public/frontend/images/banner_product.png')}}" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text">Tarixiy insonlar haqida barchasi</h1>
					</div>
				</div>
			</div>
		</div>
	</div>