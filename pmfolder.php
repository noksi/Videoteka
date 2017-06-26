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
                
                <a href="#" class="glyphicon glyphicon-trash pmglif" title="Obriši označene poruke"></a>
                <a href="#" class="glyphicon glyphicon-pencil pmglifnew" title="Nova poruka"></a>
                <a href="pmfolder.php" class="glyphicon glyphicon-inbox pmglifinbox" title="Dolazne poruke"></a>
                <a href="#" class="glyphicon glyphicon-send pmglifsend" title="Poslane poruke"></a>
                <br><br>
                
                <?php $querypm="select * from pm inner join login on login.userid=pm.otheruserid where pm.userid='".$_SESSION['userid']."'";
        $resultpm=mysqli_query($conn, $querypm);
        while ($rowpm=mysqli_fetch_assoc($resultpm)) {?>
                <a href="#" class="pmfolder"><li class="tr" style="padding-top: 3px; padding-bottom: 3px;">
                        Od: <span style="color:black; padding-left:10px; font-size: 80%; font-weight: bold;"><?php echo $rowpm['username']; ?></span> <br>
                        Title: <span style="color:black; padding-left:10px; font-size: 80%; font-weight: normal;"><?php echo $rowpm['titlemsg']; ?></span><br>
                        Datum: <span style="color:black; padding-left:10px; font-size: 80%; font-weight: normal;"><?php echo $rowpm['datum']; ?></span>
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