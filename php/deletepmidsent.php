<?php

session_Start();
    
    include 'dbcon.php';

    if (isset($_POST['deletepmidsent'])) {
$query="delete from pmsent where pmid='".$_POST['hiddenpmid']."'";
$result=mysqli_query($conn, $query);
if ($result) {header('Location: ../sentfolder.php');}
else {echo "Došlo je do greške, molimo Vas da pokušate ponovno";}
    }
    else {header('Location: ../index.php');}