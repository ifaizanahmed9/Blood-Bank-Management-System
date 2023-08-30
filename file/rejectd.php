<?php
include "connection.php";
    $donoid=$_GET['donoid'];
	$status = "Rejected";
	$sql = "UPDATE blooddonate SET status = '$status' WHERE donoid = '$donoid'";
    if (mysqli_query($conn, $sql)) {
	$msg="You have Rejected the request.";
	header("C:/xampp/htdocs/first/blooddonate.php?msg=".$msg );
    } else {
    $error= "Error changing status: " . mysqli_error($conn);
    header("C:/xampp/htdocs/first/blooddonate.php?error=".$error );
    }
    mysqli_close($conn);
?>