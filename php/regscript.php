<?php
include 'dbcon.php';

if (isset($_POST['registracija']) && !empty($_POST['korisnik']) && !empty($_POST['lozinka']) && !empty($_POST['lozinkarepeat'])) {

    if ($_POST['lozinka'] === $_POST['lozinkarepeat']) {
        if (strlen($_POST['korisnik']) <= 20) {
            $imageavatar = addslashes(file_get_contents($_FILES['profilnaslika']['tmp_name']));
            $query = "insert into login (username, password, avatar) values ('" . $_POST['korisnik'] . "', '" . $_POST['lozinka'] . "', '" . $imageavatar . "')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                header('Location: ../index.php');
            } else {
                header('Location: ../reg.php');
                ?>
                <div class="sadrzaj">
                    <div class="tablahead" style="text-align: center; font-family: Play, sans-serif !important;"> <?php
                        echo "Došlo je do greške, molimo vas pokušajte ponovno";
                        ?> </div> <!-- tablahead-->
                </div> <!--sadrzaj--> <?php
            } //end else
        } //if strlen
        else {
            echo "Predugačko korisničko ime, dozvoljeno je maximalno 20 znakova";
        } // end else
    } // if lozinka jednakolozinka repeat 
    else {
        echo "Krivo ste ponovili lozinku, pokušajte ponovno";
    } // end else
} // if isset registracija i empty
else {
    echo "Niste popunili sva obavezna mjesta, pokušajte ponovno";
} // end else
?>