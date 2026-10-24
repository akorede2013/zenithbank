<?php

session_start();

include("connect.php");


/* -----------------------------------------
   CHECK ID
----------------------------------------- */

if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {

    $_SESSION["error"] = "Invalid principal record.";

    header("Location: viewprincipal.php");
    exit;
}


$id = (int) $_GET["id"];


/* -----------------------------------------
   DELETE RECORD
----------------------------------------- */

$stmt = mysqli_prepare(
    $db_con,
    "DELETE FROM principal WHERE id = ?"
);


if (!$stmt) {

    $_SESSION["error"] = "Unable to process the deletion.";

    header("Location: viewprincipal.php");
    exit;
}


mysqli_stmt_bind_param(
    $stmt,
    "i",
    $id
);


if (mysqli_stmt_execute($stmt)) {

    if (mysqli_stmt_affected_rows($stmt) > 0) {

        $_SESSION["delete"] =
            "principal record deleted successfully.";

    } else {

        $_SESSION["error"] =
            "principal record does not exist.";
    }

} else {

    $_SESSION["error"] =
        "Unable to delete principal record.";
}


mysqli_stmt_close($stmt);

mysqli_close($db_con);


header("Location: viewprincipal.php");
exit;

?>