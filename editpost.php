<?php session_Start();
?>


<!DOCTYPE html>
<html>
    <?php include 'headpart.php'; ?>

    <body>
        <?php
        if (isset($_SESSION['username']) && isset($_GET['ideditpost'])) {

            include 'flexcontainerpart.php';
            include 'mojnavbarpart.php';
            include 'php/dbcon.php';
            $query = "Select * from forum inner join login on login.userid=forum.userid inner join filmovi on filmovi.filmid=forum.filmid where forum.forumid='" . $_GET['ideditpost'] . "'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            ?>

            <br>




            <div class="sadrzaj">
                <?php if ($_SESSION['userid'] == $row['userid'] or $_SESSION['priv'] == 'admin') {
                    $_SESSION['forumidedit']=$row['forumid'];
                    ?>
                    <div class="tablahead">
                        <span class="editpost">Naziv Filma: <span style="color: black !important"><?php echo $row['naziv_filma'] ?></span> </span><br>
                        <span class="editpost">Korisnik: <span style="color: black !important"><?php echo $row['username']; ?></span></span> <br>
                        <span class="editpost">Post ID#: <span style="color: black !important"><?php echo $row['forumid']; ?> </span></span> <br><br>

                        <form method="POST" action="php/editmessage.php">

                            <textarea class="textareaforum" name="edittext" rows="8"><?php echo $row['post']; ?></textarea>
                            <input type="submit" name="editkomentar" value="Podnesi" class="btn btn-default" style="background: teal !important; color: white !important;">

                        </form>


                    </div> <!--tablahead textarea-->

                <?php
                } 
                
                 ?>



            </div><!--sadrzaj-->

            <?php
        }  //end if session
        else {
            header('Location: index.php');
        }
        ?>


    </body>

</html>

