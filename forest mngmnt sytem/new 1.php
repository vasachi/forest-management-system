<
<td><?php echo $row['name'];?></td>					
<td><?php echo $row['location'];?></td>
<td><?php echo $row['ward_location'];?></td>
<td><?php echo $row['phoneNo'];?></td>
<td><?php echo $row['method_of_payment'];?></td>
<td><?php echo $row['date_of_payment'];?></td>
<td><?php echo $row['type_of_service'];?></td>
<td><?php echo $row['amount_paid'];?></td>
</tr>

 $sql="select * from paymentdetails where name='$name'

 ";

$location=$_POST['location'];
$ward_location=$_POST['$ward_location'];
$phoneNo=$_POST['phoneNo'];
$method_of_payment=$_POST['method_of_payment'];
$date_of_payment=$_POST['date_of_payment'];
$type_of_service=$_POST['type_of_service'];
$amount_paid=$_POST['amount_paid'];



 location='$location'
 Ward location='$$ward_location'
 phoneNo='$phoneNo'
 method_of_payment ='$method_of_payment'
 date_of_payment='$date_of_payment'
 type_of_service='$type_of_service'
 amount_paid='$amount_paid'

<?php
if(isset($_POST['search'])){

$name=$_POST['name'];

 $sql="select * from users,paymentdetails where name='$name'";
 
?>

<input type="text"  name="name" placeholder="Enter Name">
<input type="submit"  name="search" value="search by Name">



<?php


 $sql="select users.id,
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
while($rows=mysqli_fetch_array($result)){
$num=mysqli_num_rows($result);

?>


<table border="1">
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
}
?>


</table>

while($rows=mysqli_fetch_array($result)){
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

$result=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($result)){
$num=mysqli_num_rows($result);
}
}