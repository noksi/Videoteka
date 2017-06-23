<?php


include 'dbcon.php';




  if ($_GET['idremove']) {
        
        $id=$_GET['idremove'];
    
    $query="DELETE from userkolekcija where film_id='".$id."'";
    $ispis=mysqli_query($conn, $query);
    
    if ($ispis) {header('Location: ../movies.php');}
    
    else {echo "Došlo je do greške, molimo pokušajte ponovno.";}
          
}