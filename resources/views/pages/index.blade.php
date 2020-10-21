@extends('layouts.app')
@section('content')
@include('layouts.menubar')
<!-- Popular Categories -->

	

	<!-- Banner -->



	<!-- Hot New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Mashhur bo'limlardan</div>
							<ul class="clearfix">
								<li class="active">Hukumdorlar</li>
								<li>Qahramonlar</li>
								<li>Dinshunos va marifatparlar</li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-12" >

								<!-- Hukumdorlar -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">
                                             
										<?php 

										$top_post = DB::table('posts')->join('categories', 'posts.category_id', 'categories.id')->where('category_id', 4)->where('status', 1)->where('top_slider', 1)->get();
										$top_qahramon = DB::table('posts')->where('category_id', 6)->where('status', 1)->where('top_slider', 1)->get();
										$top_din = DB::table('posts')->where('category_id', 8)->where('status', 1)->where('top_slider', 1)->get();

										?>
                                          
										<!-- Slider Item -->
										@foreach($top_post as $top)
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="{{ $top->cat_slug . '/' . $top->slug }}"><img src="{{URL::to($top->image)}}" alt="" style="height: 160px; width:150px"></a></div>
												<div class="product_content">
													<br>
													<div class="product_price">{{\Carbon\Carbon::parse($top->birth_date)->format('Y')}} - {{\Carbon\Carbon::parse($top->death_date)->format('Y')}} </div>
													<div class="product_name"><div><a href="{{ url( $top->cat_slug . '/' . $top->slug) }}">{{ $top->title }}</a></div></div>
													<div class="product_extras">
														
														<a href="{{ url( $top->cat_slug . '/' . $top->slug) }}"><button class="product_cart_button active">Batafsil</button></a>
													</div>
												</div>
												
											</div>
										</div>
										@endforeach
										

										
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

								<!-- Din -->
								<div class="product_panel panel">
									<div class="arrivals_slider slider">

										
										@foreach($top_qahramon as $top)
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{URL::to($top->image)}}" alt="" style="height: 160px; width:150px"></div>
												<div class="product_content">
													<br>
													<div class="product_price">{{\Carbon\Carbon::parse($top->birth_date)->format('Y')}} - {{\Carbon\Carbon::parse($top->death_date)->format('Y')}} </div>
													<div class="product_name"><div><a href="product.html">{{ $top->title }}</a></div></div>
													<div class="product_extras">
														
														<button class="product_cart_button active">Batafsil</button>
													</div>
												</div>
												
											</div>
										</div>
										@endforeach

										

										
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

								<!-- Qahramonlar -->
								<div class="product_panel panel">
									<div class="arrivals_slider slider">

									@foreach($top_din as $top)
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{URL::to($top->image)}}" alt="" style="height: 160px; width:150px"></div>
												<div class="product_content">
													<br>
													<div class="product_price">{{\Carbon\Carbon::parse($top->birth_date)->format('Y')}} - {{\Carbon\Carbon::parse($top->death_date)->format('Y')}} </div>
													<div class="product_name"><div><a href="product.html">{{ $top->title }}</a></div></div>
													<div class="product_extras">
														
														<button class="product_cart_button active">Batafsil</button>
													</div>
												</div>
												
											</div>
										</div>
										@endforeach

										

									
									</div>
									
								</div>

							</div>

							

						</div>
								
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Best Sellers -->

	

	<!-- Adverts -->

	

	<!-- Trends -->

	

	<!-- Reviews -->

	

	<!-- Recently Viewed -->

	

	<!-- Brands -->

	

	<!-- Newsletter -->

	

@endsection