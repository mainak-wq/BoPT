<?php
$urname = $_POST['user'];
$pass = $_POST['pass'];

$con = mysqli_connect('localhost', 'bopter', 'Df,y]2_0N9y{', 'bopt');
//to prevent from mysqli injection
$urname = stripcslashes($urname);
$pass = stripcslashes($pass);
$urname = mysqli_real_escape_string($con, $urname);
$pass = mysqli_real_escape_string($con, $pass);

$sql = "select *from estabreg where urname = '$urname' and pass = '$pass'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1)
{
    
    header("location: estabreg_details.html");
}
else
{
    echo "<h1> Login failed. Invalid username or password.</h1>";
}

?>