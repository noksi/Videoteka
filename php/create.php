<?php
session_Start();

include 'dbcon.php';

if (isset($_POST['add'])) {
$image=addslashes(file_get_contents($_FILES['slika']['tmp_name']));

$query="insert into filmovi (naziv_filma, godina, zanr, redatelj, imdb, wiki, fb, slike, video) values "
        . "('".$_POST['naziv']."',"
        . " '".$_POST['godina']."',"
        . " '".$_POST['zanrovi']."',"
        . " '".$_POST['redatelj']."',"
        . " '".$_POST['imdb']."',"
        . " '".$_POST['wiki']."',"
        . " '".$_POST['fb']."',"
        . " '".$image."',"
        . " '".$_POST['video']."')";

$result=mysqli_query($conn, $query);
if ($result){header('Location: ../movies.php');}
else {echo "Došlo je do greške, molimo pokušajte ponovno";}
}


elseif (isset($_POST['dodajfav'])){
    
    $query2="Select * from filmovi where naziv_filma='".$_POST['favoriti']."'";
    $result2=mysqli_query($conn, $query2);
    $row2=mysqli_fetch_assoc($result2);
    $filmid=$row2['filmid'];
       
    $query3="insert into userkolekcija (film_id, user_id) values ('".$filmid."', '".$_SESSION['userid']."')";
    $result3=mysqli_query($conn, $query3);
    if ($result3) {header('Location: ../movies.php');}
    else {echo "Došlo je do greške, molimo pokušajte ponovno";}
    
}



 

