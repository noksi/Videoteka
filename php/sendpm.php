<?php session_Start();

include 'dbcon.php';


if (isset($_POST['posaljipm'])) {
    
    $select="select userid from login where username='".$_POST['primateljpm']."'";
    $resultselect=mysqli_query($conn, $select);
    while ($rowselect=mysqli_fetch_assoc($resultselect)){
    
    $query="insert into pm (userid, otheruserid, titlemsg, msg) values"
            . " ('".$rowselect['userid']."', '".$_SESSION['userid']."', '".$_POST['naslovpm']."', '".$_POST['textpm']."')";
    $result=mysqli_query($conn, $query);
    if ($result) {header('Location: ../pmfolder.php');} 
    else {echo "Došlo je do greške, molimo Vas pokušajte ponovno";}
    } //end while
    
} // end if
else {header('Location: ../index.php');}