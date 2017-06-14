<?php session_start(); 


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
?>
    
    <form method="POST" action="process.php">
        username:
    <input type="text" name="username">
    password:
    <input type="password" name="password">
    <input type="submit" name="submit">
    
</form> 
    
    <?php } ?>


</body>

</html>