<?php
session_start();

include 'dbcon.php';

if (isset($_POST['add'])) {
$image=addslashes(file_get_contents($_FILES['slika']['tmp_name']));

$query="insert into filmovi (naziv_filma, godina, zanr, redatelj, slike) values ('".$_POST['naziv']."', '".$_POST['godina']."', '".$_POST['zanrovi']."', '".$_POST['redatelj']."', '".$image."')";
$result=mysqli_query($conn, $query);
if ($result){header('Location: ../index.php');}



else {echo "Došlo je do greške, molimo pokušajte ponovno";}

} //end if isset post add

