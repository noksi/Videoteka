<?php session_Start(); 


if (isset($_SESSION['username']))
    
{
?>




<!DOCTYPE html>
<html>
<?php include 'headpart.php'; ?>

<body>

<?php

include 'flexcontainerpart.php';
include 'mojnavbarpart.php';
include 'sadrzajpart1.php';
include 'sadrzajpart2.php';

}

else {
    include 'headpart.php';
    include 'flexlogin.php';
    
   
    
   }
    
   
    ?>


</body>

</html>