<?php
include('connect.php');

	$name=$_POST['name'];
    $age=$_POST['age'];
	$address=$_POST['address'];
   $dob=$_POST['dob'];
    

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $age = mysqli_real_escape_string($db_con, $_POST["age"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
	$dob = mysqli_real_escape_string($db_con, $_POST["dob"]);
	 
    $sqlInsert = "INSERT INTO students(name , age , address , dob) VALUES ('$name','$age','$address','$dob')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "students Added Successfully!";
        header("Location:viewstudent.php");
    }else{
        die("Something went wrong");
    }
}


    


?>