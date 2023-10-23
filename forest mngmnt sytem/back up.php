// collect data
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'connect.php';
$username=$_POST['username'];
$phoneNo=$_POST['phoneNo'];
$date of payment=$_POST['date of payment'];
$method of payment=$_POST['method of payment'];
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
      // echo"signup success";
	   $success=1;
	   
}else{
   die(mysqli_error($con));
}
}
}