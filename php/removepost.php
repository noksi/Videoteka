<?php session_Start();

include 'dbcon.php';

$idses=$_SESSION['details'];

if ($_GET['forumidremove']) {
        
        $id=$_GET['forumidremove'];
    
    $query="DELETE from forum where forumid='".$id."'";
    $ispis=mysqli_query($conn, $query);
    
    if ($ispis) {header("Location: ../details.php?details=$idses");}
    
    else {echo "Došlo je do greške, molimo pokušajte ponovno.";}
          
}