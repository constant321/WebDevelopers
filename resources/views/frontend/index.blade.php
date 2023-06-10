@extends('frontend.layouts.main')


@section('main-container')
<div class = "homePage">
		<br>
		<br>
		<br>
		<br>
		<h1 style="text-align: center;color: #fff;"><b>Welcome!</b></h1>
		<h3 style="text-align: center;color: #fff;"><b>Our Team Provides The Best Services</b></h3>
		<button class="button-77" role="button" ><a href="{{url('/team')}}">Our Team</a></button>
	</div>
	<script src="{{url('frontend/js/jquery.min.js')}}"></script>
	<script src="{{url('frontend/js/popper.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/js/main.js')}}"></script>

@endsection