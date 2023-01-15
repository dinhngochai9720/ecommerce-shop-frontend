@extends('layouts.master')

@section('title')
Stop&Shop
@endsection

@section('css')
<link href="{{asset('css/home.css')}}" rel="stylesheet">  {{-- e-shop-frontend/css/responsive.css --}}
<link href="{{asset('css/cart.css')}}" rel="stylesheet"> 
@endsection


@section('content')

@include('home.components.header')


<section>
	<div class="cart_wrapper">
		<div class="container">
				<div class="row">
				@include('cart.cartComponent')
				</div>
		</div>
	</div>	
</section>

@include('home.components.footer')
@endsection

@section('js')
<script src="{{asset('js/add_to_cart.js')}}"></script>
<script src="{{asset('js/update_cart.js')}}"></script>
<script src="{{asset('js/delete_cart.js')}}"></script>
@endsection





	
	


