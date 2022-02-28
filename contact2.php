<?php

// database connection code
if(isset($_POST))
{

	$r = false;

	// Files will be uploaded and then all the names will be inserted into database.
	// $fileName = $_FILES['file_dairy']['name'];
	$Ext = explode('.', $_FILES['file_dairy']['name']);
	$fileName = $Ext[0].rand(0000, 9999).'.'.$Ext[1];
    $fileType = $_FILES['file_dairy']['type'];
    $fileTmp_name = $_FILES['file_dairy']['tmp_name'];
    $fileSize = $_FILES['file_dairy']['size'];


	if(is_uploaded_file($fileTmp_name)){
		if (move_uploaded_file($fileTmp_name, "uploads/$fileName")) {
			// echo "Success.\n";
			$r = true;
		} else {
			// echo "Failure.\n";
			$r = false;
		}
	}
	else{
		echo "No file is selected for Document Dairy.";
	}
	


	// $idfileName = $_FILES['file_idproof']['name'];
	$Ext2 = explode('.', $_FILES['file_idproof']['name']);
	$idfileName = $Ext2[0].rand(0000, 9999).'.'.$Ext2[1];
    $idfileType = $_FILES['file_idproof']['type'];
    $idfileTmp_name = $_FILES['file_idproof']['tmp_name'];
    $idfileSize = $_FILES['file_idproof']['size'];

	if(is_uploaded_file($idfileTmp_name)){
		if (move_uploaded_file($idfileTmp_name, "uploads/$idfileName")) {
			// echo "Success.\n";
			$r = true;
		} else {
			// echo "Failure.\n";
			$r = false;
		}
	}
	else{
		echo "No file is selected for Document ID Proof.";
	}
	

	
	// $offrfileName = $_FILES['file_offerltr']['name'];
	$Ext3 = explode('.', $_FILES['file_offerltr']['name']);
	$offrfileName = $Ext3[0].rand(0000, 9999).'.'.$Ext3[1];
    $offrfileType = $_FILES['file_offerltr']['type'];
    $offrfileTmp_name = $_FILES['file_offerltr']['tmp_name'];
    $offrfileSize = $_FILES['file_offerltr']['size'];

	if(is_uploaded_file($offrfileTmp_name)){
		if (move_uploaded_file($offrfileTmp_name, "uploads/$offrfileName")) {
			// echo "Success.\n";
			$r = true;
		} else {
			// echo "Failure.\n";
			$r = false;
		}
	}
	else{
		echo "No file is selected for Document offerletter.";
	}
	

	// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
	$con = mysqli_connect('localhost', 'bopter', 'Df,y]2_0N9y{', 'bopt');

	// get the post records
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email = $_POST['email'];
	$estabname = $_POST['estabname'];
	$datejoin = $_POST['datejoin'];
	$trainingcom = $_POST['trainingcom'];
	$category= $_POST['category'];
	$branch= $_POST['branch'];
	$cop= $_POST['cop'];
	$remarks= $_POST['remarks'];
	$mobileapp= $_POST['mobileapp'];
	$trainingemp= $_POST['trainingemp'];
	$empname= $_POST['empname'];
	$diary= $fileName;
	$idproof= $idfileName;
	$offerletter= $offrfileName;


	
	// database insert SQL code
	$sql = "INSERT INTO `registration` (`name`, `phone`, `email`, `estabname`, `datejoin`, `trainingcom`, `category`, `branch`, `cop` , `remarks`, `mobileapp`, `trainingemp`, `empname`,`diary`,`idproof`, `offerletter`) VALUES ('$name', '$phone', '$email', '$estabname', '$datejoin', '$trainingcom', '$category' , '$branch' , '$cop' ,'$remarks', '$mobileapp' , '$trainingemp' , '$empname' , '$diary', '$idproof' , '$offerletter')";

	// exit($sql);


	// insert in database 
	$rs = mysqli_query($con, $sql);
	if($rs)
	{
		if($r){
			echo "Records Successfully Inserted Into DataBase";

			// Or wherever you want to redirect the page.
			header("location: index.html");
		}

	}
}
else
{
	echo "Are you a genuine visitor?";
	
}



?>