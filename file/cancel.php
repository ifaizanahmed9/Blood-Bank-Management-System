<?php
include "connection.php";
    $reqid=$_GET['reqid'];
	$sql = "delete from bloodrequest where reqid='$reqid'";
	if (mysqli_query($conn, $sql)) {
	$msg="You have cancelled request for the blood.";
	header("C:/xampp/htdocs/first/sentrequest.php?msg=".$msg );
    } else {
    $error="Error deleting record: " . mysqli_error($conn);
    header("C:/xampp/htdocs/first/sentrequest.php?error=".$error );
    }
    mysqli_close($conn);
?>