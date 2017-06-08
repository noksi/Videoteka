<?php


include 'dbcon.php';




  if ($_GET['idremove']) {
        
        $id=$_GET['idremove'];
    
    $query="DELETE from filmovi where id='".$id."'";
    $ispis=mysqli_query($conn, $query);
    
    if ($ispis) {header('Location: ../index.php');}
    
    else {echo "Došlo je do greške, molimo pokušajte ponovno.";}
          
}