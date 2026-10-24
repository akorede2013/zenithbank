<?php
include('connect.php');

	$fname=$_POST['name'];
    $age=$_POST['age'];
    $address=$_POST['address'];
	$balance=$_POST['dob'];
   
    




if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $age = mysqli_real_escape_string($db_con, $_POST["age"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
    $dob = mysqli_real_escape_string($db_con, $_POST["dob"]);
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE students SET name = '$name', age = '$age', address = '$address', dob = '$dob' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "student Record Updated Successfully!";
        header("Location: viewstudent.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>