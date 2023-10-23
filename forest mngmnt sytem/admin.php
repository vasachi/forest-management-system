<?php
session_start();
if(!isset($_SESSION['name'])){
header('location:login.php');
}
?>



<DOCTYPE html>
<html>
<head><title>adminhome</title>
<link rel="stylesheet" href="login.php">
<link rel="stylesheet" href="admin.css">
</head>
<body bgcolor="green">

<h3 style="text-align:center;">Welcome!
<?php echo $_SESSION['name'];?>
</h3>

<h4 style="text-align:center;">Admin Home Page</h4>

<div class="container"style="text-align:center;" >


<button type="button"> <a href="report.php">Reports General View</a> </button>

<br>
&nbsp
<button class="btn2" type="button"> <a href="logout.php">log out</a> </button>
</div>



</body>
</html>