<?php
session_Start();
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
        } else {

            include 'flexlogin.php';
            if (isset($_SESSION['numrows'])) {
                if ($_SESSION['numrows'] == 0) {
                    ?>
                    <div class="sadrzaj">
                        <div class="tablahead"> <?php
                    echo "Upisali ste pogrešno korisničko ime ili lozinku, molimo Vas da pokušate ponovno";
                    ?> </div> <!-- tablahead-->
                    </div> <!--sadrzaj-->
                            <?php
                            unset($_SESSION['numrows']);
                        } // end if session
                    } // end if isset
                }// end else
                ?>


    </body>

</html>