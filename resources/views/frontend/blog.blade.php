@extends('frontend.layouts.main')


@section('main-container')

      <h1 style="text-align: center;color: #000;"><b>OUR BLOGS</b></h1>
      <br>
      <hr>
      <hr>
      <?php

        $con=mysqli_connect('localhost','root','','project') or die(mysqli_error()); 

        $records = mysqli_query($con,"select * from blogs"); // fetch data from database

        while($data = mysqli_fetch_array($records))
        {
        ?>
    <diV class = "container"><h3 style="text-align:center;color:#000;"><?php echo $data['blog_name']; ?></h3>

    <h5 style="text-align: center;color: #000;"><?php echo $data['blog_description']; ?></h5> <br>
    
      <hr>
      <hr>
    </diV>   	
    
<?php
}
?>
    <!-- END nav -->
    <script src="{{url('frontend/js/jquery.min.js')}}"></script>
	  <script src="{{url('frontend/js/popper.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/js/main.js')}}"></script>
@endsection 