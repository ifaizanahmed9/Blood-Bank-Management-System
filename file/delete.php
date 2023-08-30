<?php
include "connection.php";
    $bid=$_GET['bid'];
	$sql = "delete from bloodinfo where bid='$bid'";
	if (mysqli_query($conn, $sql)) {
	$msg="You have deleted one blood sample.";
	header("C:/xampp/htdocs/first/bloodinfo.php?msg=".$msg );
    } else {
    $error="Error deleting record: " . mysqli_error($conn);
    header("C:/xampp/htdocs/first/bloodinfo.php?error=".$error );
    }
    mysqli_close($conn);
?>