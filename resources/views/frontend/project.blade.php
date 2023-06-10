@extends('frontend.layouts.main')


@section('main-container')

  <div class = "container">
<h2>OUR PROJECTS</h2>

<table class="table table-striped" border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Name</td>
    <td>Description</td>
    <td>Rating</td>
  </tr>

<?php

$con=mysqli_connect('localhost','root','','project') or die(mysqli_error()); 
$records = mysqli_query($con,"select * from projects"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['project_id']; ?></td>
    <td><?php echo $data['project_name']; ?></td>
    <td><?php echo $data['project_description']; ?></td>
    <td><?php echo $data['project_rating']; ?></td>    
    
  </tr>	
<?php
}
?>
</table>
</div>
    <script src="{{url('frontend/js/jquery.min.js')}}"></script>
	  <script src="{{url('frontend/js/popper.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/js/main.js')}}"></script>
@endsection 