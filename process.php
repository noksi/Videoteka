    <?php
    
    session_Start();
    
    
     
    header('Location: login.php');
    
    //spajanje na bazu
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'videoteka';


$conn = mysqli_connect($server, $username, $password) or die (mysqli_error($conn));
mysqli_set_charset($conn, "utf8");
$baza=mysqli_select_db($conn, $database);

    if (isset($_POST['submit']))
        
    {$_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    
    
    $query="select * from login where username='".$_SESSION['username']."' and password='".$_SESSION['password']."'";
    $result=mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($result);
        
        $_SESSION['userid']=$row['userid'];
        $_SESSION['priv']=$row['privilege'];
        unset($_SESSION['username']);
        $_SESSION['username']=$row['username'];
    
    
    }
     
    
     
    ?>
