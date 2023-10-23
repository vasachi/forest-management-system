<?php
session_start();
if(!isset($_SESSION['name'])){
header('location:login.php');
}

// collect data
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'connect.php';
$name=$_POST['name'];
$location=$_POST['location'];
$ward_location=$_POST['ward_location'];
$phoneNo=$_POST['phoneNo'];
$method_of_payment=$_POST['method_of_payment'];
$date_of_payment=$_POST['date_of_payment'];
$type_of_service=$_POST['type_of_service'];
$amount_paid=$_POST['amount_paid'];

//querying (request) data from a server/database
$sql="select * from paymentdetails where name='$name'";

   $result=mysqli_query($con,$sql);
      if($result){
        $num=mysqli_num_rows($result);
      if($num>0){
          //echo"user exist";
		 $user=1;
  }else{
  
 // inserting data into database
$sql="insert into paymentdetails(name,location, phoneNo,date_of_payment,method_of_payment,ward_location,type_of_service,amount_paid)values('$name','$location','$phoneNo','$date_of_payment','$method_of_payment','$ward_location','$type_of_service','$amount_paid')";
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
<body bgcolor="green">
<fieldset>
  <center>
<h3 style="text-align:center;">Welcome home user <?php echo $_SESSION['name'];?>
</h3>

<h4 style="text-align:center;" >User Home Page</h4>

<div >
	  <form action="userinput.php" method="post">
  <div >
    <label for="name">name</label>
    <input type="text"  placeholder="Enter your name" name="name">
    </div>
	<br>
	<br>
	
	
	<div >
    <label for="location">Location</label>
    <input type="text"  placeholder="Enter your location" name="location"required>
    </div>
    <br>
	
	
	
	
	<div >
    <label for="wardlocation">Wardlocation</label>
    <input type="text"  placeholder="Enter your wardlocation" name="ward_location">
    </div>
	</br>
	
	<div >
    <label for="phoneNo">phoneNo</label>
    <input type="tel" placeholder="Enter your phoneNumber" name="phoneNo">
    </div>
	<br>
	
	<div >
    <label for="Date">date of payment</label>
    <input type="Date"  placeholder="Enter your Date" name="date_of_payment">
    </div>
	<br>
	<div >
	<label for="method of Payment">method of payment</label>
	<select value="method of Payment" name="method_of_payment">
	<option value="Mpesa" >Mpesa</option>
	<option value="Cash" >Cash</option>
	<option value="Credit" >Credit</option>
	<option value="cheque" >cheque</option>
	</select>
	</div>
	
	<br>
	
	<div>
	<label for="type of service">Type Of Service</label>
	<select value="type of service" name="type_of_service">
	<option value="Grazing fees" >Grazing fees</option>
	<option value="Firewood fees" >Firewood fees</option>
	<option value="Timber sourcing" >Timber sourcing </option>
	
	</select>
	</div>
	
	<br>
	
	<div >
	<label for="AMOUNT TO PAY">AMOUNT</label>
    <input type="number" placeholder="Enter your amount" name="amount_paid">
    </div>
	<br>
	
	
	
	<div >
  <input type="submit" value="Submit details">
    </div>
	
</form>
	  </div>
</center>
	  
<div class="container" style="text-align:center;color:blue;" >

<button type="button"> <a href="logout.php">log out</a> </button>

</div>
</fieldset>
</body>
</html>