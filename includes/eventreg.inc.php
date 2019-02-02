<?php

 include_once 'dbh.inc.php';

 $eventname= $_POST['eventname'];
 $eventtype= $_POST['last'];
 $eventdate= $_POST['eventdate'];


$sql = "INSERT INTO eventj (eventname, eventtype, eventdate) VALUES ('$eventname', '$eventtype', '$eventdate');";

mysqli_query($conn, $sql);


header("Location: ../eventRegistration.php?signup=success");





?>