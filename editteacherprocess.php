<?php
include('connect.php');

	$name=$_POST['name'];
    $age=$_POST['age'];
    $address=$_POST['course'];
	$position=$_POST['address'];
    
   

if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $age = mysqli_real_escape_string($db_con, $_POST["age"]);
    $course = mysqli_real_escape_string($db_con, $_POST["course"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
	
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE teacher SET name = '$name', age = '$age', course = '$course', address = '$address'  WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "teacher Record Updated Successfully!";
        header("Location:viewteacher.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>