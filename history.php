<?php
include 'kontrol/koneksi.php';
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
    <title>History</title>
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

        #sidebar {
            grid-area: sidebar;
            height: 105%;
        }

        #content1 {
            padding: 15px;
            grid-area: content1;
        }

        .data {
            width: 100%;
            height: 90%;
            overflow: scroll;
        }

        .user {
            text-align: center;
        }

        .ava {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }

        .data {
            width: 100%;
            height: 90%;
            overflow: scroll;
        }

        #wntable {
            border-collapse: collapse;
            width: 100%;
        }

        #wntable td,
        #wntable th {
            border: 1px solid #ddd;
            padding: 4px;
        }

        #wntable th {
            padding-top: 3px;
            padding-bottom: 3px;
            text-align: left;
            background-color: #00A8A9;
            color: white;
        }

        .sistem {
            height: 515px;
            width: 100%;
            background-color: red;
        }

        @media only screen and (max-width:550px) {
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
                height: 500px;
                width: 340px;
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
                        <a href="sistemkendali.php" class="nav-link text-white" aria-current="page">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#home" />
                            </svg>
                            Sistem Kendali
                        </a>
                    </li>
                    <li>
                        <a href="history.php" class="nav-link active">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#grid" />
                            </svg>
                            History
                        </a>
                    </li>
                </ul>
                <a href="index.php" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#grid" />
                    </svg>
                    Log Out
                </a>
            </div>
        </div>

        <div id="content1">
            <p class="title d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                <span class="fs-4">HISTORY</span>
            </p>
            <hr>
            <div class="data">
                <table id="wntable">
                    <tr>
                        <th>Id</th>
                        <th>R1</th>
                        <th>R2</th>
                        <th>R3</th>
                        <th>R4</th>
                        <th>R5</th>
                        <th>R6</th>
                        <th>R7</th>
                        <th>R8</th>
                        <th>R9</th>
                        <th>R10</th>
                        <th>R11</th>
                        <th>R12</th>
                        <th>R13</th>
                        <th>R14</th>
                        <th>R15</th>
                        <th>Waktu</th>
                    </tr>

                    <?php
                    $sql = mysqli_query($dbkonek, "SELECT * FROM tbhistory order by id desc");
                    if ($sql === FALSE) {
                        die(mysqli_error($conn));
                    }

                    if (mysqli_num_rows($sql) == 0) {
                        echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada.'
                    } else { // jika terdapat entri maka tampilkan datanya
                        $no = 1; // mewakili data dari nomor 1
                        while ($row = mysqli_fetch_assoc($sql)) { // fetch query yang sesuai ke dalam array
                            echo '
            <tr>
                <td>' . $no . '</td>
                <td>' . $row['channel1'] . '</td>
                <td>' . $row['channel2'] . '</td>
                <td>' . $row['channel3'] . '</td>
                <td>' . $row['channel4'] . '</td>
                <td>' . $row['channel5'] . '</td>
                <td>' . $row['channel6'] . '</td>
                <td>' . $row['channel7'] . '</td>
                <td>' . $row['channel8'] . '</td>
                <td>' . $row['channel9'] . '</td>
                <td>' . $row['channel10'] . '</td>
                <td>' . $row['channel11'] . '</td>
                <td>' . $row['channel12'] . '</td>
                <td>' . $row['channel13'] . '</td>
                <td>' . $row['channel14'] . '</td>
                <td>' . $row['channel15'] . '</td>
                <td>' . $row['waktuSensor'] . '</td>
            </tr>
            ';
                            $no++; // mewakili data kedua dan seterusnya
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>