
<!DOCTYPE html>
<html>
<head>
	<title>Display all records from Database</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('frontend/css1/style.css')}}">

<style>
	a.c1{
		color:white;
	}	
	div.c1{
		margin-right:15px;
		margin-top:.75%;
	}
</style>
</head>
<body>
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="{{url('/Admin')}}" class="logo">Admin Panel</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="{{url('/Admin')}}"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="{{url('/addProject')}}"><span class="fa fa-user mr-3"></span> Add Projects</a>
	          </li>
	          <li>
              <a href="{{url('/addBlog')}}"><span class="fa fa-sticky-note mr-3"></span> Blog</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contact</a>
	          </li>
	        </ul>

	        <!--<div class="mb-5">
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>-->

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->

<div class="container">
	<div class="row">
		<div class="col">
			<h2>BLOGS</h2>
		</div>
		<div class="c1">
			<button type="button" class="btn btn-danger" name="Log Out" value="Log Out">
				<a href="{{url('/')}}" class="c1">Log Out</a>
		</div>
	</row>
</div>
<table class="table table-striped" border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Name</td>
    <td>Description</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>


  @foreach($blogs as $ent)
  <tr>
    <td>{{$ent->blog_id}}</td>
    <td>{{$ent->blog_name}}</td>
    <td>{{$ent->blog_description}}</td>    
    <td><button class = 'bg-warning '><a href="{{url('/edit', $ent->blog_id)}}" style="color:black">Edit</a></button></td>
    <td><button class = 'bg-danger '><a href="{{url('/delete', $ent->blog_id)}}">Delete</a></button></td>
  </tr>	
  @endforeach
  

</table>
</div>
    </div>
	</div>

	<script src="{{url('frontend/js1/popper.js')}}"></script>
    <script src="{{url('frontend/js1/jquery.min.js')}}"></script>
    <script src="{{url('frontend/js1/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/js1/main.js')}}"></script>
</body>
</html>
