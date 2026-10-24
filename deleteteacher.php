<?php

session_start();

include("connect.php");


/* -----------------------------------------
   CHECK ID
----------------------------------------- */

if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {

    $_SESSION["error"] = "Invalid teacher record.";

    header("Location: viewteacher.php");
    exit;
}


$id = (int) $_GET["id"];


/* -----------------------------------------
   DELETE RECORD
----------------------------------------- */

$stmt = mysqli_prepare(
    $db_con,
    "DELETE FROM teacher WHERE id = ?"
);


if (!$stmt) {

    $_SESSION["error"] = "Unable to process the deletion.";

    header("Location: viewteacher.php");
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
            "teacher record deleted successfully.";

    } else {

        $_SESSION["error"] =
            "teacher record does not exist.";
    }

} else {

    $_SESSION["error"] =
        "Unable to delete teacher record.";
}


mysqli_stmt_close($stmt);

mysqli_close($db_con);


header("Location: viewteacher.php");
exit;

?>