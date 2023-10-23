<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
	<head><title>report</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	</head>
	<body bgcolor="green">
		
<center>
<div class="data">
<form action="report.php" method="POST">
<h3>REPORT</h3>
						





<?php
if(isset($_POST['submit'])){
 $sql="select * from users";
 
 $result=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($result)){
$num=mysqli_num_rows($result);
$userid=$rows['id'];
$rowsdata=$rows['name'];
?>
<option  value="<?php echo $userid;?>"> <?php echo $rowsdata;?> </option>
<?php
}
}	
?>


						
<table border="1" name="table" class="table">
<tr>
<th colspan="8">PAYMENT USER DETAILS </th>
</tr>
						
<tr >
<th >Name </th>
<th >Location </th>
<th >Ward location</th>
<th >Telephone number </th>
<th>Pay method</th>
<th >Date of pay </th>
<th >Service type </th>
<th >Amount paid </th>
</tr>
						
<?php	

				  
$sql="select users.id,users.name,
users.location,
paymentdetails.ward_location,
paymentdetails.phoneNo,
paymentdetails.method_of_payment,
paymentdetails.date_of_payment,
paymentdetails.type_of_service,
paymentdetails.amount_paid
FROM users,paymentdetails
where users.id=paymentdetails.payment_id";

$result=mysqli_query($con,$sql);
while($rows1=mysqli_fetch_array($result)){
$num=mysqli_num_rows($result);

$name=$rows1['name'];					   
$location=$rows1['location'];
$ward_location=$rows1['ward_location'];
$phoneNo=$rows1['phoneNo'];
$method_of_payment=$rows1['method_of_payment'];
$date_of_payment=$rows1['date_of_payment'];
$type_of_service=$rows1['type_of_service'];
$amount_paid=$rows1['amount_paid'];
?>
<tr bgcolor="white">

<td><?php echo $name;?></td>					
<td><?php echo $location;?></td>
<td><?php echo $ward_location;?></td>
<td><?php echo $phoneNo;?></td>
<td><?php echo $method_of_payment;?></td>
<td><?php echo $date_of_payment;?></td>
<td><?php echo $type_of_service;?></td>
<td><?php echo $amount_paid;?></td>
</tr>
<?php
}
	
?>

						
</table>
				
				
<br>

				
</form>
<button type="button"> <a href="admin.php">go back</a> </button>
</div>
</center>
</body>
</html>