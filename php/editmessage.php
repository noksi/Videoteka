<?php session_Start();

include 'dbcon.php';
$idses=$_SESSION['details'];

if (isset($_POST['editkomentar'])){
$query="UPDATE forum SET post='".$_POST['edittext']."' WHERE forumid='".$_SESSION['forumidedit']."'";
$result=mysqli_query($conn, $query);
        if ($result) {
            unset ($_SESSION['forumidedit']);
            header("Location: ../details.php?details=$idses");}
    
    else {echo "Došlo je do greške, molimo pokušajte ponovno.";}
}