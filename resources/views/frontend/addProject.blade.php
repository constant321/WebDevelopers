<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{url('frontend/css1/style.css')}}">
  <title>Manage Projects</title>
  <style>
      * {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
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
      <div id="content">
      <div class = "container">
<h2>Add Projects</h2>

<table class="table table-striped" border="2">
  <div class="container">
  <form action="" method = "get">
    @csrf
    <div class="row">
      <div class="col-25">
        <label for="fname">Project Name</label>
      </div>
      <div class="col-75">
        <input type="text" name="project_name" placeholder="Your Project Name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Project Description</label>
      </div>
      <div class="col-75">
        <input type="text" name="project_description" placeholder="Your project Description..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Project Rating</label>
      </div>
      <div class="col-75">
        <input type="text" name="project_rating" placeholder="Your Project Rating..">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name = "submit">
    </div>
  </form>
</div>

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
<?php


if(isset($_REQUEST['submit'])){
  $link = mysqli_connect("localhost", "root", "", "project");
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
    $name = $_REQUEST['project_name'];
    $description =$_REQUEST['project_description'];
    $rating = $_REQUEST['project_rating'];
   

    $sql = "INSERT INTO projects (project_name, project_description, project_rating) VALUES ('$name', '$description', '$rating')";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
        return redirect('/Admin');
  
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
  }
?>
