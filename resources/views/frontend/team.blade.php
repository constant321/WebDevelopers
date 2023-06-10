<!doctype html>
<html lang="en">
  <head>
  	<title>Who we are?</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

	</head>
	<body>
  <style>
   

  .wrapper {
    display: flex;
    justify-content: center;
    margin-top: 50px;
  }

  .item {
    width: 100px;
    height: 50px;
    margin: 10px;
    position: relative;
  } 

  button {
    border-width:0;
    background: #33353d;
    width: 120%;
    padding: 10px;
    border-radius: 5px;
    color: white;
    transition: background 0.5s ease;
  }

  button:hover {
    background: #3f414a;
    color: white;
    font-weight: normal;
  }

  button:hover i {
    color: orange;
  }

  i {
    color: orange;

  }

  .arrow1 {
    animation: slide1 1s ease-in-out infinite;
    margin-left: 5px; 
  }

@keyframes slide1 {
  0%,
  100% {
    transform: translate(0, 0);
  }

  50% {
    transform: translate(10px, 0);
  }
}

  </style>
	<section class="ftco-section">
		<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col">
							<p class="mb-0 phone"><span class="fa fa-phone"></span> <a href="#">+923169220092</a></p>
						</div>
						<div class="col d-flex justify-content-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
				    		</p>
			        </div>
						</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="{{url('/home')}}">Web <span>Developers

			</span></a>
	    	<form action="#" class="searchform order-sm-start order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="{{url('/home')}}" class="nav-link">Home</a></li>
	        	<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="#">Page 1</a>
                <a class="dropdown-item" href="#">Page 2</a>
                <a class="dropdown-item" href="#">Page 3</a>
                <a class="dropdown-item" href="#">Page 4</a>
              </div>
            </li>
	        	<li class="nav-item"><a href="{{url('/project')}}" class="nav-link">Projects</a></li>
	        	<li class="nav-item"><a href="{{url('/blog')}}" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

	</section>
    <h1 style="text-align: center;">OUR TEAM</h1>
	<div><img src="{{url('frontend/images/profile.png')}}" alt="Avatar" style="margin-left:43%;width:200px;height:200px;"/>
    <h3 style="text-align: center;">Zeeshani Murtaza</h3>
  </div>
  <h1></h1>
  <div><img src="{{url('frontend/images/profile.png')}}" alt="Avatar" style="width:200px;height:200px;margin-left:43%;"/>
    <h3 style="text-align: center;">Umer Abbasi</h3>
    

    <div class="wrapper">
      <div class="item"><a href="{{url('/Adlogin')}}">
        <button>Admin 
        <i class="fa fa-long-arrow-right arrow1" aria-hidden="true"></i>  
        </button>
      </a>  
      </div>
    </div>

  <footer class="site-footer" style = "background-color:#26272b;margin-bottom:-110px;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>
          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="team.html">About Us</a></li>
              <li><a href="{{url('/contact')}}">Contact Us</a></li>
              <li><a href="/contribute">Contribute</a></li>
              <li><a href="/privacy-policy">Privacy Policy</a></li>
              <li><a href="/sitemap">Sitemap</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
          <h6>Social Media</h6>
            <ul class="social-icons">
            
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
        </div>
        <hr>
      </div>
      <div class="container" style="margin-top:40px">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
         <a href="#">OurSite</a>.
            </p>
          </div>
      </div>
</footer>
	</body>
</html>

