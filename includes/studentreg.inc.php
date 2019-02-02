<?php

 include_once 'dbh.inc.php';

 $studentname= $_POST['studentname'];
 $studentpassword= $_POST['studentpassword'];
 $studentage= $_POST['studentage'];
 $studentgender= $_POST['studentgender'];
 $studentmajor= $_POST['studentmajor'];


$sql = "INSERT INTO student (studentname, studentpassword,studentage,studentgender,studentmajor) VALUES ('$studentname', '$studentpassword', '$studentage','$studentgender','$studentmajor');";

mysqli_query($conn, $sql);


header("Location:../studentRegistration.php?signup=success");



?>

