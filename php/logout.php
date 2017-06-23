<?php
session_Start();


    
 unset($_SESSION['username']);
 unset($_SESSION['userid']);
 unset($_SESSION['priv']);
 unset($_SESSION['numrows']);
 unset ($_SESSION['section']);
 unset ($_SESSION['details']);
header('Location: ../index.php');

