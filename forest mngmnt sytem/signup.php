<?php
$success=0;
$user=0;

// collect data
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'connect.php';

$name=$_POST['name'];
$password=$_POST['password'];
$location=$_POST['location'];
$national_id=$_POST['national_id'];

//querying (request) data from a server/database
$sql="select * from users where name='$name'";
   $result=mysqli_query($con,$sql);
      if($result){
        $num=mysqli_num_rows($result);
      if($num>0){
          //echo"user exist";
		 $user=1;
  }else{
  
 // inserting data into database
$sql="insert into users(name,password,national_id,location)values('$name','$password','$national_id','$location')";
   $result=mysqli_query($con,$sql);
     if($result){
      // echo"signup success";
	   $success=1;
	   
}else{
   die(mysqli_error($con));
}
}
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="signup.css">
   
    <title> SIGN UP PAGE</title>
  </head>
  <body bgcolor="green">
 
<?php 
if($user){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>sorry try again</strong> user exists.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  ?>
  

    <?php 
if($success){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> success</strong> signed up.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  ?>
  <fieldset>
  <center>
  <h1 ="text-align:center;">Magwano SignUpPage</h1>
 
	  <div >
	  <form action="signup.php" method="post">
  
	
	<div >
    <label for="name">Name</label>
    <input type="text"  placeholder="Enter your name" name="name">
    </div>
	<br>
	
  <div class="center">
    <label for="InputPassword">Password</label>
    <input type="password"   placeholder="enter your password" name="password" required>
  </div>
  <br>
  <div >
    <label for="Inputlocation">Location</label>
    <input type="text"  placeholder="Enter your location" name="location"required>
     </div>
  <br>
  <div >
    <label for="InputnationalID">NationalID</label>
    <input type="id" placeholder="Enter your national ID" name="national_id"required>
    </div>
	<br>
     <div>
  <button type="submit" >SIGN UP</button>
  <button type="button"> <a href="login.php">LOGIN</a> </button>
  </div>
</form>
	  </div>
	  </center>
	  </fieldset>
  </body>
</html>








