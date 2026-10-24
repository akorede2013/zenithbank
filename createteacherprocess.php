<?php
include('connect.php');

	$name=$_POST['name'];
    $age=$_POST['age'];
    $course=$_POST['course'];
	$address=$_POST['address'];
    
    

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $age = mysqli_real_escape_string($db_con, $_POST["age"]);
    $course = mysqli_real_escape_string($db_con, $_POST["course"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
	
    $sqlInsert = "INSERT INTO teacher(name , age , course , address) VALUES ('$name','$age','$course', '$address')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "teacher Added Successfully!";
        header("Location:viewteacher.php");
    }else{
        die("Something went wrong");
    }
}


    


?>