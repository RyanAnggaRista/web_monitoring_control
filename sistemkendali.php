<?php
include 'kontrol/koneksi.php';
$sql = mysqli_query($dbkonek, "SELECT * FROM tbkontrol");
while ($row = mysqli_fetch_assoc($sql)) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Sistem Kendali">
        <meta name="author" content="Ryan Angga Rista">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

        <title>Sistem Kontrol dan Monitoring</title>

        <script>
            var auto_refresh = setInterval(
                function() {
                    $('#sensor1').load("kontrol/otomatis.php #sensor1");
                    $('#sensor2').load("kontrol/otomatis.php #sensor2");
                    $('#sensor3').load("kontrol/otomatis.php #sensor3");
                    $('#sensor4').load("kontrol/otomatis.php #sensor4");
                    $('#sensor5').load("kontrol/otomatis.php #sensor5");
                    $('#sensor6').load("kontrol/otomatis.php #sensor6");
                }, 1000
            );
        </script>
        <style type="text/css">
            .kendali {
                display: grid;
                height: 100vh;
                width: 100%;
                grid-template-columns: 1fr 4fr;
                grid-template-rows: 4.8fr 0.2fr;
                grid-template-areas:
                    "sidebar content1"
                    "sidebar content1";
                grid-gap: 0.3rem;
                color: #004d40;
            }

            .data {
                width: 100%;
                height: 90%;
                overflow: scroll;
            }

            #sidebar {
                grid-area: sidebar;
                height: 105%;
            }

            #content1 {
                padding: 15px;
                grid-area: content1;
            }

            .user {
                text-align: center;
            }

            .ava {
                border-radius: 50%;
                width: 100px;
                height: 100px;
            }

            .sistem {
                height: 515px;
                width: 100%;
                background-color: red;
            }

            @media only screen and (max-width: 550px) {
                .kendali {
                    grid-template-columns: 1fr;
                    grid-template-rows: 0.2fr 4.8fr;
                    grid-template-areas:
                        "sidebar"
                        "content1";
                }

                .user {
                    display: none;
                }

                .data {
                    overflow: scroll;
                    height: 525px;
                }
            }
        </style>

    </head>

    <body>

        <div class="kendali">
            <div class="fixed">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" id="sidebar">
                    <div class="user">
                        <a href="#">
                            <img class="ava bi me-2" src="img/user.png" alt="">
                        </a>
                        <br>
                        <span class="fs-4">User</span>
                    </div>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="sistemkendali.php" class="link nav-link active" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#home" />
                                </svg>
                                Sistem Kendali
                            </a>
                        </li>
                        <li>
                            <a href="history.php" class="link nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#grid" />
                                </svg>
                                History
                            </a>
                        </li>
                    </ul>
                    <a href="index.php" class="link nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid" />
                        </svg>
                        Log Out
                    </a>
                </div>
            </div>

            <div id="content1">
                <p class="title d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                    <span class="fs-4">SISTEM KENDALI</span>
                </p>
                <hr>
                <div class="data">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Relay</th>
                            <th>Status</th>
                            <th>Arus</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=1&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=1&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel1'] == '0') {
                                    $state1 = "OFF";
                                } else {
                                    $state1 = "ON";
                                }
                                echo $state1;
                                ?>
                            </td>
                            <td>
                                <p><span class="font-bold text-title">-----</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=2&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=2&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel2'] == '0') {
                                    $state2 = "OFF";
                                } else {
                                    $state2 = "ON";
                                }
                                echo $state2;
                                ?>
                            </td>
                            <td>
                                <p><span class="font-bold text-title">-----</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=3&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=3&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel3'] == '0') {
                                    $state3 = "OFF";
                                } else {
                                    $state3 = "ON";
                                }
                                echo $state3;
                                ?>
                            </td>
                            <td>
                                <p><span id="sensor1" class="font-bold text-title"><?php echo $current1; ?>, <?php echo $current8; ?>, <?php echo $current8; ?></span> mA</p>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=4&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=4&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel4'] == '0') {
                                    $state4 = "OFF";
                                } else {
                                    $state4 = "ON";
                                }
                                echo $state4;
                                ?>
                            </td>
                            <td>
                                <p><span id="sensor2" class="font-bold text-title"><?php echo $current4; ?>, <?php echo $current5; ?>, <?php echo $current6; ?></span> mA</p>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=5&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=5&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel5'] == '0') {
                                    $state5 = "OFF";
                                } else {
                                    $state5 = "ON";
                                }
                                echo $state5;
                                ?>
                            </td>
                            <td>
                                <p><span class="font-bold text-title">-----</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=6&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=6&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel6'] == '0') {
                                    $state6 = "OFF";
                                } else {
                                    $state6 = "ON";
                                }
                                echo $state6;
                                ?>
                            </td>
                            <td>
                                <p><span id="sensor3" class="font-bold text-title"><?php echo $current2; ?></span> mA</p>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=7&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=7&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel7'] == '0') {
                                    $state7 = "OFF";
                                } else {
                                    $state7 = "ON";
                                }
                                echo $state7;
                                ?>
                            </td>
                            <td>
                                <p><span id="sensor4" class="font-bold text-title"><?php echo $current4; ?></span> mA</p>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=8&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=8&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel8'] == '0') {
                                    $state8 = "OFF";
                                } else {
                                    $state8 = "ON";
                                }
                                echo $state8;
                                ?>
                            </td>
                            <td>
                                <p><span id="sensor5" class="font-bold text-title"><?php echo $current9; ?></span> mA</p>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=9&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=9&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel9'] == '0') {
                                    $state9 = "OFF";
                                } else {
                                    $state9 = "ON";
                                }
                                echo $state9;
                                ?>
                            </td>
                            <td>
                                <p><span id="sensor6" class="font-bold text-title"><?php echo $current10; ?></span> mA</p>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=10&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=10&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel10'] == '0') {
                                    $state10 = "OFF";
                                } else {
                                    $state10 = "ON";
                                }
                                echo $state10;
                                ?>
                            </td>
                            <td>
                                <p><span class="font-bold text-title">-----</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=11&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=11&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel11'] == '0') {
                                    $state11 = "OFF";
                                } else {
                                    $state11 = "ON";
                                }
                                echo $state11;
                                ?>
                            </td>
                            <td>
                                <p><span class="font-bold text-title">-----</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=12&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=12&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel12'] == '0') {
                                    $state12 = "OFF";
                                } else {
                                    $state12 = "ON";
                                }
                                echo $state12;
                                ?>
                            </td>
                            <td>
                                <p><span class="font-bold text-title">-----</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=13&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=13&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel13'] == '0') {
                                    $state13 = "OFF";
                                } else {
                                    $state13 = "ON";
                                }
                                echo $state13;
                                ?>
                            </td>
                            <td>
                                <p><span class="font-bold text-title">-----</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=14&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=14&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel14'] == '0') {
                                    $state14 = "OFF";
                                } else {
                                    $state14 = "ON";
                                }
                                echo $state14;
                                ?>
                            </td>
                            <td>
                                <p><span class="font-bold text-title">-----</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>
                                <a href="kontrol/aksi.php?channel=15&state=1" class="btn btn-success btn-block" id="btn-nyala">ON</a>
                                <a href="kontrol/aksi.php?channel=15&state=0" class="btn btn-danger btn-block" id="btn-mati">OFF</a>
                            </td>
                            <td>
                                <?php
                                if ($row['channel15'] == '0') {
                                    $state15 = "OFF";
                                } else {
                                    $state15 = "ON";
                                }
                                echo $state15;
                                ?>
                            </td>
                            <td>
                                <p><span class="font-bold text-title">-----</span></p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>

<?php
}
?>


    </html>