<?php

include 'dbcon.php';

if (isset($_POST['registracija']) && !empty($_POST['korisnik']) && !empty($_POST['lozinka'])) {
    $imageavatar=addslashes(file_get_contents($_FILES['profilnaslika']['tmp_name']));
$query="insert into login (username, password, avatar) values ('".$_POST['korisnik']."', '".$_POST['lozinka']."', '".$imageavatar."')";
$result=mysqli_query($conn, $query);
if ($result) {header('Location: ../index.php'); }
else {echo "Korisnik s tim nazivom već postoji";}
}

else {echo "Niste popunili sva obavezna mjesta, pokušajte ponovno";}