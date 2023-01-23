<?php
include 'koneksi.php';
$projectname=$_GET['projectname'];
$sqldelete="DELETE FROM project WHERE projectname='$projectname'";
mysqli_query($conn, $sqldelete);
header("location:index.php");
?>


