<!DOCTYPE html>
<html lang="en">

<head>
    <title>Establishment Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: wheat;font-weight: bold;align-items: center;">

<?php
// database connection code
if(isset($_POST))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'bopter', 'Df,y]2_0N9y{', 'bopt');

// get the post records
$instname = $_POST['instname'];
$natsid = $_POST['natsid'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5= $_POST['n5'];
$nat1 = $_POST['nat1'];
$nat2 = $_POST['nat2'];
$nat3 = $_POST['nat3'];
$nat4 = $_POST['nat4'];
$nat5 = $_POST['nat5'];
$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
$c5 = $_POST['c5'];
$urchars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$urname = substr( str_shuffle( $urchars ), 0, 5 );
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$pass = substr( str_shuffle( $chars ), 0, 8 );

// database insert SQL code
$sql = "INSERT INTO `instreg` (`instname`, `natsid`, `n1`, `n2`, `n3`, `n4`, `n5`, `nat1`, `nat2` , `nat3`, `nat4`, `nat5`, `c1` , `c2` , `c3` , `c4` , `c5` , `urname` , `pass`) VALUES ('$instname', '$natsid', '$n1', '$n2', '$n3', '$n4', '$n5' , '$nat1' , '$nat2' ,'$nat3', '$nat4', '$nat5' , '$c1' , '$c2' , '$c3' , '$c4' , '$c5' , '$urname' , '$pass')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Your Profile Has Been Created Sucessfully <br> <br>";

    // header("location: instreg_details.html");
}
}
else
{
	echo "You are not eligible";
	
}
$sql = "SELECT urname, pass FROM instreg WHERE natsid='$natsid' ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "USERNAME: " . $row["urname"]. "<br>PASSWORD: " . $row["pass"]. "<br> <h3> Please save your credentials for login. </h3> <br>";
    }
}

?>
</body>
		<a href="login_instreg.html"><button style="background-color: green;border-radius: 20px; color: white;"> CLICK HERE TO LOGIN</button></a>
	
</html>