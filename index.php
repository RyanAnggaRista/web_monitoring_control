<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Ryan Angga Rista">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        #container-login {
            background-color: #1D1F20;
            position: relative;
            top: 22.5%;
            margin: auto;
            width: 340px;
            height: 300px;
            border-radius: 0.35em;
            box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        #title {
            position: relative;
            background-color: #1A1C1D;
            width: 100%;
            padding: 20px 0px;
            border-radius: 0.35em;
            font-size: 22px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            color: white;
        }

        .lock {
            position: relative;
            top: 2px;
            color: white;
        }

        .input {
            margin: auto;
            width: 240px;
            border-radius: 4px;
            background-color: #373b3d;
            padding: 8px 0px;
            margin-top: 10px;
        }

        .margin{
            margin: auto;
            margin-top: 25px;
        }

        .input-addon {
            float: left;
            background-color: #373b3d;
            border: 1px solid #373b3d;
            padding: 4px 8px;
            border-right: 1px solid rgba(255, 255, 255, 0.05);
        }

        input[type=text] {
            color: #949494;
            margin: 0;
            background-color: #373b3d;
            border: 1px solid #373b3d;
            padding: 6px 0px;
            border-radius: 3px;
        }

        input[type=text]:focus {
            border: 1px solid #373b3d;
        }

        input[type=password] {
            color: #949494;
            margin: 0;
            background-color: #373b3d;
            border: 1px solid #373b3d;
            padding: 6px 0px;
            border-radius: 3px;
        }

        input[type=password]:focus {
            border: 1px solid #373b3d;
        }

        .submit {
            margin: auto;
            width: 240px;
            border-radius: 4px;
            background-color: #373E4A;
            padding: 8px 0px;
            margin-top: 40px;
            color: #C1C3C6;
            font-weight: bold;
            cursor: pointer;
            border-radius: 3px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> Sistem Kendali
        </div>

        <form class="margin">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons lock">face</i>
                </div>
                <input id="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons lock">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
            </div>

            <div class="submit">
                <a class="submit" href="sistemkendali.php" type="submit">Submit</a>
            </div>
        </form>
    </div>
</body>

</html>