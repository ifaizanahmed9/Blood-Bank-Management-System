<?php
include "connection.php";
    $donoid=$_GET['donoid'];
	$sql = "DELETE from blooddonate where donoid='$donoid'";
	if (mysqli_query($conn, $sql)) {
	$msg="You have cancelled request for the blood.";
	header("C:/xampp/htdocs/first/sentrequestd.php?msg=".$msg );
    } else {
    $error="Error deleting record: " . mysqli_error($conn);
    header("C:/xampp/htdocs/first/sentrequestd.php?error=".$error );
    }
    mysqli_close($conn);
?>