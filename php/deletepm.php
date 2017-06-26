<?php

session_Start();

include 'dbcon.php';


$query="select * from pm where pmid='".$_GET['checkdelete']."'";
$result=mysqli_query($conn, $query);
while($row= mysqli_fetch_assoc($result)){
    
    $querydel="delete from pm where pmid='".$row['pmid']."'";
    $reslutdel=mysqli_query($conn, $querydel);
    if ($resultdel) {header('Location: ../pmfolder.php');}
    else {echo "Došlo je do greške, pokušajte ponovno";}
    
    
} // end while

?>