<?php

session_Start();
include 'dbcon.php';
header ('Location: ../pmfolder.php');
$checkarray=$_POST['checkdelete'];



if (isset($_POST['deletepm'])){

    foreach ($checkarray as $check) {
        
        $query="delete from pm where pmid='".$check."'";
        $result=mysqli_query($conn, $query);
        
    }
    
    
} //
?>