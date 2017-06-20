<?php
session_Start();


    
 unset($_SESSION['username']);
 unset($_SESSION['userid']);
header('Location: ../index.php');

