<?php session_Start();

$index = 0;
$_SESSION['section'] = $index;

?>

<!DOCTYPE html>
<html>
    <?php include 'headpart.php'; ?>

    <body>
        <?php
        if (isset($_SESSION['username']) && $_SESSION['receiver'] && $_SESSION['title'] ) {

            include 'flexcontainerpart.php';
            include 'header.php';
            include 'php/dbcon.php'; //spajanje na bazu
            ?>

            <div class="sadrzaj">
                <div class="tablahead">
                    <form method="POST" action="php/sendpm.php">
                    <ul class="pm" style="width:100%">
                        <div class="caption tha" style="font-family: Play, sans-serif">Odgovori na poruku od <?php echo $_SESSION['receiver']; ?></div>

                        
                        <a href="newpm.php" class="glyphicon glyphicon-pencil pmglifnew" title="Nova poruka"></a>
                        <a href="pmfolder.php" class="glyphicon glyphicon-inbox pmglifinbox" title="Dolazne poruke"></a>
                        <a href="sentfolder.php" class="glyphicon glyphicon-send pmglifsend" title="Poslane poruke"></a><br><br>
                        Primatelj:



            <input type="text" class="textareaforum" name="primateljpm" list="useri" autocomplete="off" value="<?php echo $_SESSION['receiver']; ?>"><br>
            <datalist id="useri">
<?php
$query = "select * from login order by username ASC";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    
    ?>

                    <option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option> <?php } ?>
            </datalist><br>
            
                       

     
 
       <form method="POST" action="php/addtext.php">
           
           Title:
           <input type="text" name="naslovpm" class="textareaforum" value="<?php echo "RE: ".$_SESSION['title']; ?>"><br><br>
           
         Poruka:
           <textarea class="textareaforum" name="textpm" rows="8"></textarea>
           
           <input type="submit" name="posaljipm" value="Pošalji" class="btn btn-default" style="background: teal !important; color: white !important;">
           
       </form>



                           
                    </ul>
                         
                    </form>
                </div>
            </div>






    <?php
} else {
    header('Location: pmfolder.php');
}
?>



    </body>

</html>

<?php 

unset($_SESSION['title']);
unset($_SESSION['receiver']);

?>