<?php
$valid=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
include 'connect.php';
$name=$_POST['name'];
$password=$_POST['password'];


		 
$sql="select * from users where name='$name' and password='$password' ";

   $result=mysqli_query($con,$sql);
   
   $row=mysqli_fetch_array($result);

   session_start();
    
    if ($row["usertype"]=="user"){
	 $_SESSION['name']=$name;
	 header("location:userinput.php");
	 }
	 
     elseif ($row["usertype"]=="admin"){
	  $_SESSION['name']=$name;
	header("location:admin.php");
	 }
     else {
	    echo"username or password incorrect";
		
	 }
   
	
  }
 
   
	 
?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="login.css">
    
    
    <title>LOGIN TO MAGWANO</title>
  </head>
  <body bgcolor="green">
  
<?php 
if($valid){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>user exist </strong> user exists.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  ?>
  

    <?php 
if($invalid){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>does not exist</strong> signed up.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  ?>
  
<fieldset >
 <center>
 <h1 class="text-center">Magwano Login Page</h1>
	  <div class="container mt-5">
	  <form action="login.php" method="POST">
  <div >
    <label for="name">Name</label>
    <input type="text" placeholder="Enter your name" name="name" required>
    </div>
	<br>
  <div >
    <label for="Password">Password</label>
    <input type="password"   placeholder="enter your password" name="password" required>
  </div>
   <br>
  <button type="LOG IN">LOG IN</button>
  <button type="button"> <a href="signup.php">SIGNUP</a> </button>
</form>
	  </div>
	  </center>
	  </fieldset> 
  </body>
</html>	   