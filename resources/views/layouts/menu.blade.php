<!-- Header Main -->
@php
$categories = DB::table('categories')->get();
@endphp

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

					
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

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

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="{{route('search.inson')}}" method="post">
								@csrf
									<input type="search" required="required" class="page_menu_search_input" placeholder="Insonlarni qidirish" name="search">
								</form>
                            </div>
                            
							
                            @foreach($categories as $cat)
								<li class="page_menu_item"><a href="{{ url('category' . '/' . $cat->cat_slug . '/' .  $cat->id) }}">{{$cat->category_name}}<i class="fa fa-angle-down"></i></a></li>
                            @endforeach
                            
							
							
						</div>
					</div>
				</div>
			</div>
		</div>