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
$name = $_POST['name'];
$natsid = $_POST['natsid'];
$manpower1 = $_POST['manpower1'];
$manpower2 = $_POST['manpower2'];
$manpower3 = $_POST['manpower3'];
$manpower4 = $_POST['manpower4'];
$enApp1= $_POST['enApp1'];
$enApp2 = $_POST['enApp2'];
$enApp3 = $_POST['enApp3'];
$enApp4 = $_POST['enApp4'];
$urchars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$urname = substr( str_shuffle( $urchars ), 0, 5 );
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$pass = substr( str_shuffle( $chars ), 0, 8 );


// database insert SQL code
$sql = "INSERT INTO `estabreg` (`name`, `natsid` , `manpower1` , `manpower2`, `manpower3` , `manpower4` , `enApp1` , `enApp2` , `enApp3` , `enApp4` , `urname` , `pass`) VALUES ('$name' , '$natsid' , '$manpower1' , '$manpower2' , '$manpower3' , '$manpower4' , '$enApp1' , '$enApp2' , '$enApp3' , '$enApp4' , '$urname' , '$pass')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Your Profile Has Been Created Sucessfully <br> <br>";

    // header("location: estabreg_details.html");
}
}
else
{
	echo "You are not eligible";
	
}

$sql = "SELECT urname, pass FROM estabreg WHERE natsid='$natsid' ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "USERNAME: " . $row["urname"]. "<br>PASSWORD: " . $row["pass"]. "<br> <h3> Please save your credentials for login. </h3> <br>";
    }
}

?>
</body>
		<a href="login_estabreg.html"><button style="background-color: green;border-radius: 20px; color: white;"> CLICK HERE TO LOGIN</button></a>
	
</html>