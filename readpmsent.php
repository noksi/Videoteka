<?php session_Start(); 

$index = 0;
$_SESSION['section'] = $index;

?>

<!DOCTYPE html>
<html>
    <?php include 'headpart.php'; ?>

    <body>
        <?php
        if (isset($_SESSION['username'])) {

            include 'flexcontainerpart.php';
            include 'header.php';
            include 'php/dbcon.php'; //spajanje na bazu
            ?>

            <div class="sadrzaj">
                <div class="tablahead">
                    <form method="POST" action="php/deletepmidsent.php">
                    <ul class="pm" style="width:100%">
                        <div class="caption tha" style="font-family: Play, sans-serif">Privatna poruka</div>

                        <label for="deletepmid" class="glyphicon glyphicon-trash pmglif" title="Obriši ovu poruku"></label>
                        <input name="deletepmidsent" id="deletepmid" type="submit" style="opacity: 0; width: 0.1px; height: 0.1px;  overflow: hidden; position: absolute;  z-index: -1;">
                        <a href="newpm.php" class="glyphicon glyphicon-pencil pmglifnew" title="Nova poruka"></a>
                        <a href="pmfolder.php" class="glyphicon glyphicon-inbox pmglifinbox" title="Dolazne poruke"></a>
                        <a href="sentfolder.php" class="glyphicon glyphicon-send pmglifsend" title="Poslane poruke"></a>
                        <br><br>

    <?php
    
    $querypm = "select * from pmsent inner join login on login.userid=pmsent.otheruserid where pmsent.userid='".$_SESSION['userid']."' and pmsent.pmid='".$_GET['pmid']."'";
    $resultpm = mysqli_query($conn, $querypm);
    while ($rowpm = mysqli_fetch_assoc($resultpm)) {
        
        ?>
                            <li class="pmfolder" style="padding-top: 3px; padding-bottom: 3px;">
                                <input type="hidden" name="hiddenpmid" value="<?php echo $rowpm['pmid']; ?>">
                                    Za: <span style="color:black; padding-right:10px; font-size: 80%; font-weight: bold;"><?php echo $rowpm['username']; ?></span> 
                                    Title: <span style="color:black; padding-right:10px; font-size: 80%; font-weight: normal;"><?php echo $rowpm['titlemsg']; ?></span>
                                    Datum: <span style="color:black; padding-right:10px; font-size: 80%; font-weight: normal;"><?php echo $rowpm['datum']; ?></span> <input type="hidden" name="inboxdelete" value="<?php echo $rowpm['pmid']; ?>">
                                </li> 
                                <li class="pmfolder" style="padding-top: 3px; padding-bottom: 3px;">
                                    <br><span style="font-family: Play, sans-serif; font-size:120% !important;">Sadržaj</span>:
                                </li>
                                <li class="pmfolder" style="padding-top: 3px; padding-bottom: 3px;">
                                    <span style="color: black;"><?php echo nl2br($rowpm['msg']); ?></span>
                                </li>
                                    <?php } ?>
                    </ul>
                         
                    </form>
                </div>
            </div>






    <?php
} else {
    header('Location: index.php');
}
?>



    </body>

</html>