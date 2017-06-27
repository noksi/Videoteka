<div class="mojnavbarindex">

    <div class="mojnavbarformaindex">
        <div class="navbar-title" style="font-weight: bold; font-family: Play, sans-serif !important;">
            <span class="GHS"> Geek Hot Spot!</span> 

        </div> <!--navbar title-->


    </div> <!--mojnavbarformaindex-->

    <?php
    include 'php/dbcon.php';
    $query = "select count(userid) as brojusera from login";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    ?>


    <div class="mojnavbarformaindexdetails">
        <div class="navbar-title" style="font-family: Play, sans-serif !important;">
            <span class="GHSdetails"> Broj korisnika: <strong style="margin-left:3px;"><?php echo $row['brojusera']; ?></strong></span>

        </div> <!--navbar title-->
    </div> <!--mojnavbarformaindex-->

    <?php
    $query2 = "select count(forumid) as brojukupnihpostova from forum";
    $result2 = mysqli_query($conn, $query2);
    $row2 = mysqli_fetch_assoc($result2);
    ?>

    <div class="mojnavbarformaindexdetails">
        <div class="navbar-title" style="font-family: Play, sans-serif !important;">
            <span class="GHSdetails"> Broj postova: <strong style="margin-left:3px;"><?php echo $row2['brojukupnihpostova']; ?></strong></span>
        </div> <!--navbar title-->
    </div> <!--mojnavbarformaindex-->


    <div class="mojnavbarformaindexdetails">
        <div style="font-family: Play, sans-serif !important; font-size:85%;">
            Coded and designed by:<br>
            Goran Tolušić<br>
            Contact e-mail:<br>
            bimbo.klein696@gmail.com
        </div> <!--navbar title-->
    </div> <!--mojnavbarformaindex-->






</div> <!--mojnavbarindex-->

