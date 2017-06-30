<?php session_Start();

include 'dbcon.php';


if (isset($_POST['posaljipm'])) {
    
    $select="select userid from login where username='".$_POST['primateljpm']."'";
    $resultselect=mysqli_query($conn, $select);
    if (mysqli_num_rows($resultselect)==1) {
    while ($rowselect=mysqli_fetch_assoc($resultselect)){
    
    $query="insert into pm (userid, otheruserid, titlemsg, msg) values"
            . " ('".$rowselect['userid']."', '".$_SESSION['userid']."', '".$_POST['naslovpm']."', '".$_POST['textpm']."')";
    $result=mysqli_query($conn, $query);
    $query2="insert into pmsent (userid, otheruserid, titlemsg, msg) values"
            . " ('".$_SESSION['userid']."', '".$rowselect['userid']."', '".$_POST['naslovpm']."', '".$_POST['textpm']."')";
    $result2=mysqli_query($conn, $query2);
    if ($result && $result2) {header('Location: ../pmfolder.php');} 
    else {echo "Došlo je do greške, molimo Vas pokušajte ponovno";}
    } //end while
    } // end num rows
    else {echo "Ne postoji korisnik s tim imenom";}
} // end if
else {header('Location: ../index.php');}