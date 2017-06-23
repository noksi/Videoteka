<?php session_Start(); 
$movies='1';
$_SESSION['section']=$movies;

?>
<!DOCTYPE html>
<html>
    <?php include 'headpart.php'; ?>
    
<body>

<?php
if (isset($_SESSION['username']))
    {
include 'flexcontainerpart.php';
include 'mojnavbarpart.php';
include 'sadrzajpart1.php';
include 'sadrzajpart2.php';

}


else {
    
    header('Location: index.php');

   }
    ?>
    

</body>

</html>

