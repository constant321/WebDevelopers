@extends('frontend.layouts.main')


@section('main-container')

    <div class = "container">
        <h1 style="text-align: center;">Contact US</h1>
	    <div>
            <img src="{{url('frontend/images/img1.jpeg')}}" alt="Avatar" style="margin-left:42%;width:200px;height:200px;border-radius:50%"/>
            <h2 style="text-align: center;">Contact Number: 03169220092</h2>
            <h3 style="text-align: center;">Email: shaniofficial212@gmail.com</h3>
        </div>
    </div>
    <script src="{{url('frontend/js/jquery.min.js')}}"></script>
	  <script src="{{url('frontend/js/popper.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/js/main.js')}}"></script>
 
@endsection