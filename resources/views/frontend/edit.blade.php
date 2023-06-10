

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

<h2>Edit Blogs</h2>
<div class="container">
  <form action=""method = "POST">
  @csrf  
    <div class="row">
      <div class="col-25">
        <label for="name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" name="name" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="description">Description</label>
      </div>
      <div class="col-75">
        <textarea  name="description" placeholder="Write Blog Here" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name = "submit">
    </div>
  </form>
</div>

</body>
</html>
<?php

/*$con=mysqli_connect('localhost','root','','project');

//$id = $_GET['$id']; 

if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $description = $_REQUEST['description'];
    $edit = mysqli_query($con, "update blogs set blog_name='$name', blog_description='$description' WHERE blog_id='$id'");

    if($edit)
    {
        mysqli_close($con); // Close connection
        redirect('/Admin'); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error Editing record"; // display error message if not delete
    }
}
*/
if (empty($error)){}
        else{echo $error; } 

?>
