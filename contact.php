<?php
// database connection code
if(isset($_POST))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'bopter', 'Df,y]2_0N9y{', 'bopt');

// get the post records
$natsid=$_POST['natsid'];
$sellMyList=$_POST['sellMyList'];
$comSk = $_POST['comSk'];
$leadSk = $_POST['leadSk'];
$mulSk = $_POST['mulSk'];
$timeSk = $_POST['timeSk'];
$analSk= $_POST['analSk'];
$posiSk= $_POST['posiSk'];
$att= $_POST['att'];
$batch= $_POST['batch'];
// $urname=$_urname['urname'];
// $pass=$_pass['pass'];
$urchars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$urname = substr( str_shuffle( $urchars ), 0, 5 );
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$pass = substr( str_shuffle( $chars ), 0, 8 );
// database insert SQL code
$sql = "INSERT INTO `student_registration` (`natsid`, `sellMyList`, `comSk`, `leadSk`, `mulSk`, `timeSk`, `analSk`, `posiSk`, `att` , `batch`, `urname`, `pass`) VALUES ('$natsid', '$sellMyList', '$comSk', '$leadSk', '$mulSk', '$timeSk', '$analSk' , '$posiSk' , '$att' ,'$batch', '$urname', '$pass')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Your Profile Has Been Created Sucessfully <br> <br>";
}
}
else
{
	echo "You are not eligible";
	
}

$sql = "SELECT urname, pass FROM student_registration WHERE natsid='$natsid' ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "USERNAME: " . $row["urname"]. "<br>PASSWORD: " . $row["pass"]. "<br> <h3> Please save your credentials for login. </h3> <br>";
    }
}

?>

<html>
	<body>
		<a href="login.html"><button>CLICK HERE TO LOGIN</button></a>
	</body>
</html>