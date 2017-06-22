<?php

include 'dbcon.php';

if (isset($_POST['registracija']) && !empty($_POST['korisnik']) && !empty($_POST['lozinka'])) {
    
    if (strlen($_POST['korisnik'])<=20){
    $imageavatar=addslashes(file_get_contents($_FILES['profilnaslika']['tmp_name']));
$query="insert into login (username, password, avatar) values ('".$_POST['korisnik']."', '".$_POST['lozinka']."', '".$imageavatar."')";
$result=mysqli_query($conn, $query);
if ($result) {header('Location: ../index.php'); }
else {echo "Korisnik s tim nazivom već postoji";}
    } //if strlen
    else {echo "Predugačko korisničko ime, dozvoljeno je maximalno 20 znakova";}
} // if isset registracija i empty

else {echo "Niste popunili sva obavezna mjesta, pokušajte ponovno";}