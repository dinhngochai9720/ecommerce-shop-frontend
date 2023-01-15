@extends('layouts.master')

@section('title')
Stop&Shop
@endsection

@section('css')
<link href="{{asset('css/home.css')}}" rel="stylesheet">  {{-- e-shop-frontend/css/responsive.css --}}
@endsection


@section('content')

@include('home.components.header')



<section>
    <div class="container">
        <div class="row">
            @include('home.components.sidebar')
            
            <div class="col-sm-9 padding-right">
                <div class="features_items "><!--features_items-->
                    <h2 class="title text-center">Products</h2>
                    
                    @foreach ($products as  $product)

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                  <img src="{{config('app.base_url').$product->feature_image_path}}" alt="{{config('app.base_url').$product->feature_image_path}}" class="product-item-image" />
                                    <h2>${{ $product->price}}</h2>
                                    <p>{{ $product->name}}</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>${{ $product->price}}</h2>
                                        <p>{{ $product->name}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>

                    @endforeach
                   

{{--                     
                    <div class="col-sm-12 text-center">
                        <ul class=" pagination">
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">&raquo;</a></li>
                        </ul>
                    </div> --}}

                    
                    <div class="col-md-12 text-center">
                        {{-- Phan trang --}}
                        {{ $products->links() }}
                    </div>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>



@include('home.components.footer')
@endsection

@section('js')
@endsection





	
	
  
