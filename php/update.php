<?php session_Start();

include 'dbcon.php';

if (isset($_POST['podnesi'])){
$query="UPDATE filmovi SET godina='".$_POST['godina']."', zanr='".$_POST['zanr']."', redatelj='".$_POST['redatelj']."' WHERE filmid='".$_SESSION['details']."'";
$result=mysqli_query($conn, $query);
        if ($result) {header('Location: ../index.php');}
    
    else {echo "Došlo je do greške, molimo pokušajte ponovno.";}
}