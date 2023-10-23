<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

// collect data
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'connect.php';
$username=$_POST['username'];
$phoneNo=$_POST['phoneNo'];
$date_of_payment=$_POST['date_of_payment'];
$method_of_payment=$_POST['method_of_payment'];
$ward_location=$_POST['ward_location'];
$amount_paid=$_POST['amount_paid'];
$type_of_service=$_POST['type_of_service'];

//querying (request) data from a server/database
$sql="select * from forestusers where username='$username'";
   $result=mysqli_query($con,$sql);
      if($result){
        $num=mysqli_num_rows($result);
      if($num>0){
          //echo"user exist";
		 $user=1;
  }else{
  
 // inserting data into database
$sql="insert into forestusers(username,phoneNo,date of payment,method of payment,ward_location,type_of_service,amount_paid)values('$username','$phoneNo','$date of payment','$method of payment','$ward_location','$type_of_service','$amount_paid')";
   $result=mysqli_query($con,$sql);
     if($result){
      // echo"detail input success";
	   $success=1;
	   
}else{
   die(mysqli_error($con));
}
}
}
}
?>





<DOCTYPE html>
<html>
<head><title>User</title>
<link rel="stylesheet" href="login.php"
</head>
<body >
<fieldset>
  <center>
<h3 style="text-align:center;">Welcome
<?php echo $_SESSION['username'];?>
</h3>

<h4 style="text-align:center;" >User Home Page</h4>



  <div >
	  <form action="userinput.php" method="post">
  <div >
    <label for="usernames">username</label>
    <input type="text"  placeholder="Enter your fullname" name="fullname">
    </div>
	<br>
	<br>
	<div >
    <label for="wardlocation">Ward location</label>
    <input type="text"  placeholder="Enter your location" name="location">
    </div>
	</br>
	
	<div >
    <label for="TelephoneNumber">phoneNo</label>
    <input type="tel"  placeholder="Enter your phoneNumber" name="phoneNo">
    </div>
	<br>
	
	<div >
    <label for="Date">Date of payment</label>
    <input type="Date"  placeholder="Enter your Date" name="Date">
    </div>
	<br>
	<div >
	<label for="Means of Payment">means of payment</label>
	<select>
	<option value="Mpesa" >Mpesa</option>
	<option value="Cash" >Cash</option>
	<option value="Credit" >Credit</option>
	<option value="cheque" >cheque</option>
	</select>
	</div>
	
	<br>
	
	<div>
	<label for="typeofservice">Type Of Service</label>
	<select>
	<option value="Mpesa" >Graazing fees</option>
	<option value="Cash" >Firewood collection fees</option>
	<option value="Credit" >Timber Cutting fees</option>
	</select>
	</div>
	
	<br>
	
	<div >
	<label for="AMOUNT TO PAY">AMOUNT</label>
    <input type="number"placeholder="Enter your amount" name="amount">
    </div>
	<br>
	
	
	
	<div >
  <input type="submit" value="Submit details">
    </div>
	
</form>
	  </div>
	  
	 
</center>
	  


<div class="container" style="text-align:center;color:blue;" >
<a href="logout.php" >log out</a>
</div>
</fieldset>
</body>
</html>