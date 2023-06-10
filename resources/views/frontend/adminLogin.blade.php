
<!doctype html>
<html lang="en">
  <head>
  	<title>AdminLogin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{url('frontend/js/validation.js')}}"></script>
    <style>
    body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
      </style> 
   </head>
	<body>
	<div class="sidenav">
         <div class="login-main-text">
            <h2>Admin<br> Login Page</h2>
            <p>Login from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="/Adlogin" method="post" onsubmit="return ValidationEvent()">
               @csrf 
                  <div class="form-group">
                     <label>User Name</label>
                     <input id="user" type="text" name="user" class="form-control" placeholder="User Name" required>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input id="pass" type="password" name="pass" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                  <input type="submit" class="btn btn-outline-dark" value="login" name="login"/>
                    </div>
               </form>
            </div>
         </div>
      </div>
	</body>
</html>
<?php

/*if(isset($_REQUEST['login'])){
    if(!empty($_REQUEST['user']) && !empty($_REQUEST['pass'])) {  
        $user=$_REQUEST['user'];  
        $pass=$_REQUEST['pass'];
        $con=mysqli_connect('localhost','root','','project') or die(mysqli_error());
        
      
        $query=mysqli_query($con, "SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($query))  
        {  
        $dbusername=$row['username'];  
        $dbpassword=$row['password'];  
        }  
        
        
        if($user==$dbusername && $pass==$dbpassword)  
        {  
        //session_start();  
        //$_SESSION['sess_user']=$user; 
        return redirect('/Admin');
        
        }  
        } else {
            return redirect('/team');  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
    
}
*/
if (empty($error)){}
        else{echo $error; } 
?>