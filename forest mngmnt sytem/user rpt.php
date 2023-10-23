<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html>
	<head><title>user report</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	</head>
	<body bgcolor="green">
		
<center>
<div class="data">
<form action="user rpt.php" method="POST">
<h3> USERS REPORT</h3>
<h3 style="text-align:center;">Welcome! your report 
</h3>
<h4 style="text-align:center;" >User report</h4>


 
<input type="text"  name="name" placeholder="Enter Name">
<input type="submit"  name="search" value="search by Name">	



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
if(isset($_POST['search'])){

$name=$_POST['name'];


 $sql="select * from paymentdetails where name='$name' 

 ";
 

 

$result=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($result)){
$num=mysqli_num_rows($result);


?>
<tr bgcolor="white">

<td><?php echo $rows['name'];?></td>					
<td><?php echo $rows['location'];?></td>
<td><?php echo $rows['ward_location'];?></td>
<td><?php echo $rows['phoneNo'];?></td>
<td><?php echo $rows['method_of_payment'];?></td>
<td><?php echo $rows['date_of_payment'];?></td>
<td><?php echo $rows['type_of_service'];?></td>
<td><?php echo $rows['amount_paid'];?></td>
</tr>

<?php
}
}	
?>

</div>
</center>
</body>
</html>