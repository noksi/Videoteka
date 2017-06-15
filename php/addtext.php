<?php

session_Start();

$idses=$_SESSION['details'];

include 'dbcon.php';

if (isset($_POST['komentar'])) {


$query="insert into forum (filmid, userid, post) values ('".$_SESSION['details']."', '".$_SESSION['userid']."', '".$_POST['text']."') ";

$result=mysqli_query($conn, $query);
if ($result){header("Location: ../details.php?details=$idses");}
else {echo "Došlo je do greške, molimo pokušajte ponovno";}
}