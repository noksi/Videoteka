    <?php
    
    session_Start();
    
    
     
    header('Location: login.php');
    
    //spajanje na bazu
include 'php/dbcon.php';

    if (isset($_POST['submit']))
        
    {$_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    
    
    $query="select * from login where username='".$_SESSION['username']."' and password='".$_SESSION['password']."'";
    $result=mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($result);
    $resulttest=mysqli_num_rows($result);
        
        $_SESSION['userid']=$row['userid'];
        $_SESSION['priv']=$row['privilege'];
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        $_SESSION['username']=$row['username'];
        $_SESSION['numrows']=$resulttest;
        
    
    
    }
     
    
     
    ?>
