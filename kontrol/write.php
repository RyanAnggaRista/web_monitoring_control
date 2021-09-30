<?php
    //Variabel database
    include 'koneksi.php';

    // Prepare the SQL statement
    $var1 = $_GET['current1'];
    $var2 = $_GET['current2'];
    $var3 = $_GET['current3'];
    $var4 = $_GET['current4'];
    $var5 = $_GET['current5'];
    $var6 = $_GET['current6'];
    $var7 = $_GET['current7'];
    $var8 = $_GET['current8'];
    $var9 = $_GET['current9'];
    $var10 = $_GET['current10'];
    
    mysqli_query($dbkonek, "UPDATE tbmonitoring SET current1='$var1'");
    mysqli_query($dbkonek, "UPDATE tbmonitoring SET current2='$var2'");
    mysqli_query($dbkonek, "UPDATE tbmonitoring SET current3='$var3'");
    mysqli_query($dbkonek, "UPDATE tbmonitoring SET current4='$var4'");
    mysqli_query($dbkonek, "UPDATE tbmonitoring SET current5='$var5'");
    mysqli_query($dbkonek, "UPDATE tbmonitoring SET current6='$var6'");
    mysqli_query($dbkonek, "UPDATE tbmonitoring SET current7='$var7'");
    mysqli_query($dbkonek, "UPDATE tbmonitoring SET current8='$var8'");
    mysqli_query($dbkonek, "UPDATE tbmonitoring SET current9='$var9'");
    mysqli_query($dbkonek, "UPDATE tbmonitoring SET current10='$var10'");
    