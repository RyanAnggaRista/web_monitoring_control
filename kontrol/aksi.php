<?php
if (isset($_GET['channel']) && isset($_GET['state'])) {
    require 'koneksi.php';

    $state = $_GET['state'];
    $channel = $_GET['channel'];

    if ($channel == '1') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel1='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel1) VALUES ('$state')");
    } else if ($channel == '2') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel2='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel2) VALUES ('$state')");
    } else if ($channel == '3') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel3='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel3) VALUES ('$state')");
    } else if ($channel == '4') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel4='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel4) VALUES ('$state')");
    } else if ($channel == '5') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel5='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel5) VALUES ('$state')");
    } else if ($channel == '6') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel6='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel6) VALUES ('$state')");
    } else if ($channel == '7') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel7='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel7) VALUES ('$state')");
    } else if ($channel == '8') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel8='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel8) VALUES ('$state')");
    } else if ($channel == '9') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel9='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel9) VALUES ('$state')");
    } else if ($channel == '10') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel10='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel10) VALUES ('$state')");
    } else if ($channel == '11') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel11='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel11) VALUES ('$state')");
    } else if ($channel == '12') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel12='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel12) VALUES ('$state')");
    } else if ($channel == '13') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel13='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel13) VALUES ('$state')");
    } else if ($channel == '14') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel14='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel14) VALUES ('$state')");
    } else if ($channel == '15') {
        mysqli_query($dbkonek, "UPDATE tbkontrol SET channel15='$state'");
        mysqli_query($dbkonek, "INSERT INTO tbhistory(channel15) VALUES ('$state')");
    }

    header('location: ../sistemkendali.php');
    exit;
}
