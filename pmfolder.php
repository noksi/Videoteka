<?php session_Start(); ?>

<!DOCTYPE html>
<html>
<?php include 'headpart.php'; ?>

<body>
    <?php
    if (isset($_SESSION['username']))
    {
        
        include 'flexcontainerpart.php';
        include 'header.php';
        include 'php/dbcon.php';
        
        
        
        ?>
    
    <div class="sadrzaj">
        <div class="tablahead">
            <ul class="pm" style="width:100%">
                <div class="caption tha" style="font-family: Play, sans-serif">Privatne poruke od <?php echo $_SESSION['username']; ?></div>
                
                <?php $querypm="select * from pm inner join login on login.userid=pm.otheruserid where pm.userid='".$_SESSION['userid']."'";
        $resultpm=mysqli_query($conn, $querypm);
        while ($rowpm=mysqli_fetch_assoc($resultpm)) {?>
                <a href="#" class="pmfolder"><li class="tr" style="padding-top: 3px; padding-bottom: 3px;">
                        Od: <span style="color:black; padding-left:10px;"><?php echo $rowpm['username']; ?></span> <br>
                        Title: <span style="color:black; padding-left:10px;"><?php echo $rowpm['titlemsg']; ?></span><br>
                        Datum: <span style="color:black; padding-left:10px;"><?php echo $rowpm['datum']; ?></span>
        </li></a> <?php } ?>
            </ul>
            
                
            
            </table>
        </div>
    </div>
   
    
    
    
    
    
    <?php
    }
   else {header('Location: index.php');}
    ?>
    
    
    
</body>

</html>