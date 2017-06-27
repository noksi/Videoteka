<div class="sadrzaj">
    
    <?php
    include 'php/dbcon.php';
$query3 = "select username from login order by clanstvo desc limit 1";
$result3 = mysqli_query($conn, $query3);
$row3 = mysqli_fetch_assoc($result3);
?>
    
     <div class="tablahead" style="font-family: Play, sans-serif !important;">
             Najnoviji korisnik: <strong style="margin-left:3px;"><?php echo $row3['username']; ?></strong>
        </div> <!--tablahead-->
    
</div> <!--sadrzaj-->