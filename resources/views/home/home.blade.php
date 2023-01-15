    @extends('layouts.master')

    @section('title')
    Stop&Shop
    @endsection

    @section('css')
    <link href="{{asset('css/home.css')}}" rel="stylesheet">  {{-- e-shop-frontend/css/responsive.css --}}
    @endsection


    @section('content')
 
    @include('home.components.header')
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">

							@foreach ($sliders as $key=> $slider)
								<div class="item {{$key==0 ? 'active' : ''}} ">
									<div class="col-sm-6">
										<h1>Stop&Shop</h1>
										<h2>{{$slider->name}}</h2>
										<p>{{$slider->description}}</p>
										<button type="button" class="btn btn-default get">
											<a href="{{route('index')}}" style="color: white">Get it now</a>
										</button>
									</div>
									<div class="col-sm-6">
											<img src="{{config('app.base_url').$slider->image_path}}" class="girl img-responsive" alt="" />
									</div>
								</div>
							@endforeach
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				@include('home.components.sidebar')

				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Products</h2>

						@foreach ($products as $product )
						<div class="col-sm-4 product-item">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{config('app.base_url').$product->feature_image_path}}" alt="{{config('app.base_url').$product->feature_image_path}}" class="product-item-image" />
											
											<h2>${{$product->price}}</h2>
											<p>{{$product->name}}</p>
											<a data-url="{{route('product.addToCart',['id'=>$product->id])}}" href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										{{-- <div class="product-overlay">
											<div class="overlay-content">
												<h2>${{$product->price}}</h2>
												<p>{{$product->name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div> --}}
								</div>
								{{-- <div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div> --}}
							</div>
						</div>
						@endforeach
						
						
						
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								@foreach ($categorys as $index=>$category)
								<li class="{{$index == 0 ? 'active' : ''}}">
									<a href="#category_tab_{{$category->id}}" data-toggle="tab">{{$category->name}}
									</a>
								</li>
								@endforeach
							</ul>
						</div>

						<div class="tab-content">
							@foreach ($categorys as $index=>$category)
								<div class="tab-pane fade {{$index==0 ? 'active in' : ''}} " id="category_tab_{{$category->id}}" >
									@foreach ($category->products as $product)
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{config('app.base_url').$product->feature_image_path}}" alt="{{$product->feature_image_path}}" class="product-item-image"/>
													<h2>${{$product->price}}</h2>
													<p>{{$product->name}}</p>
													<a  href="#" class="btn btn-default add-to-cart">
														<i class="fa fa-shopping-cart"></i>
														Add to cart
													</a>
												</div>
												
											</div>
										</div>
									</div>
									@endforeach
									
								</div>
							@endforeach
							
						</div>
					</div><!--/category-tab-->
				</div>
			</div>
		</div>
	</section>

    @include('home.components.footer')
    @endsection

    @section('js')
	<script src="{{asset('js/add_to_cart.js')}}"></script>
    @endsection
  
