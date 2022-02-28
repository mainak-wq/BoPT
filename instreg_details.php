<?php
// database connection code
if(isset($_POST))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'bopter', 'Df,y]2_0N9y{', 'bopt');

// get the post records
$board_name = $_POST['board_name'];
$city = $_POST['city'];
$pin = $_POST['pin'];
$locality = $_POST['locality'];
$state = $_POST['state'];
$director_name = $_POST['director_name'];
$director_contactNo = $_POST['director_contactNo'];
$director_email = $_POST['director_email'];
$trainOff_name = $_POST['trainOff_name'];
$trainOff_contactNo= $_POST['trainOff_contactNo'];
$trainOff_email = $_POST['trainOff_email'];
$nodal_name = $_POST['nodal_name'];
$nodal_contactNo = $_POST['nodal_contactNo'];
$nodal_email = $_POST['nodal_email'];
$website = $_POST['website'];
$pursuing_course = $_POST['pursuing_course'];
$passed_out = $_POST['passed_out'];
$gadp = $_POST['gadp'];
$fiap = $_POST['fiap'];
$select = $_POST['select'];
$job_placement = $_POST['job_placement'];
$mark1 = $_POST['mark1'];
$mark2 = $_POST['mark2'];
$mark3 = $_POST['mark3'];
$mark4 = $_POST['mark4'];
$date = $_POST['date'];
// $nodal_name = $_POST['nodal_name'];
// $nodal_name = $_POST['nodal_name'];
// $nodal_name = $_POST['nodal_name'];
// $nodal_name = $_POST['nodal_name'];
// $nodal_name = $_POST['nodal_name'];






// database insert SQL code
$sql = "INSERT INTO `instreg_details` (`board_name`, `city`, `pin` , `locality` , `state` , 
`director_name` , `director_contactNo` , `director_email` , `trainOff_name` , `trainOff_contactNo` ,
 `trainOff_email` , `nodal_name` , `nodal_contactNo` , `nodal_email` , `website` , `pursuing_course` ,
  `passed_out` , `gadp` , `fiap` , `select`, `job_placement`, `mark1`,  `mark2` ,
     `mark3` , `mark4` , `date`) VALUES ('$board_name', '$city', 
   '$pin' , '$locality' , '$state' , '$director_name' , '$director_contactNo' , '$director_email' , 
   '$trainOff_name' , '$trainOff_contactNo' , '$trainOff_email' , '$nodal_name' , '$nodal_contactNo' , 
    '$nodal_email' , '$website' , '$pursuing_course' , '$passed_out' , '$gadp' , '$fiap' , 
   '$select' , '$job_placement' , '$mark1' , '$mark2'  , '$mark3' , '$mark4' , '$date')";

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
