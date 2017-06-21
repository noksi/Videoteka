<?php
session_Start();


    
 unset($_SESSION['username']);
 unset($_SESSION['userid']);
 unset($_SESSION['priv']);
 unset($_SESSION['numrows']);
header('Location: ../index.php');

