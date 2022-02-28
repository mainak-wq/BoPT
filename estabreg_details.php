<?php
// database connection code
if(isset($_POST))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'bopter', 'Df,y]2_0N9y{', 'bopt');

// get the post records
$address = $_POST['address'];
$ceo_name = $_POST['ceo_name'];
$ceo_email = $_POST['ceo_email'];
$hr_name = $_POST['hr_name'];
$hr_email = $_POST['hr_email'];
$total_manpower = $_POST['total_manpower'];
$training_slots = $_POST['training_slots'];
$training_completed = $_POST['training_completed'];
$cop = $_POST['cop'];

// $nodal_name = $_POST['nodal_name'];
// $nodal_name = $_POST['nodal_name'];
// $nodal_name = $_POST['nodal_name'];
// $nodal_name = $_POST['nodal_name'];
// $nodal_name = $_POST['nodal_name'];






// database insert SQL code
$sql = "INSERT INTO `estabreg_details` (`address`, `ceo_name`, `ceo_email` , `hr_name` , `hr_email` , 
`total_manpower` , `training_slots` , `training_completed` , `cop`) VALUES ('$address', '$ceo_name', 
   '$ceo_email' , '$hr_name' , '$hr_email' , '$total_manpower' , '$training_slots' , '$training_completed' , 
   '$cop')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Your request has been submitted succesfully";
	header("location: success.html");
}
}

else
{
	echo '<script>alert("Failed to update your request")</script>';
	
}
