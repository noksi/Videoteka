<?php

session_Start();
include 'dbcon.php';
header ('Location: ../sentfolder.php');
$checkarray=$_POST['checkdelete'];



if (isset($_POST['deletepmsent'])){

    foreach ($checkarray as $check) {
        
        $query="delete from pmsent where pmid='".$check."'";
        $result=mysqli_query($conn, $query);
        
    }
    
    
} //isset
?>