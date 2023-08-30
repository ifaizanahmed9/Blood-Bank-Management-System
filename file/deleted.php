<?php
include "connection.php";
    $bdid=$_GET['bdid'];
	$sql = "delete from blooddinfo where bdid='$bdid'";
	if (mysqli_query($conn, $sql)) {
	$msg="You have deleted one blood sample.";
	header("C:/xampp/htdocs/first/bloodinfo.php?msg=".$msg );
    } else {
    $error="Error deleting record: " . mysqli_error($conn);
    header("C:/xampp/htdocs/first/bloodinfo.php?error=".$error );
    }
    mysqli_close($conn);
?>