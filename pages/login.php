<!DOCTYPE html>
<html lang="en">
<head>
    <title>WatchMe: HD live streaming web</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="icon" href="images/logo/watchme.png" type="image/x-icon">

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

        body {
            margin: 0;
            background: black;
            font-family: 'Poppins';
            overflow: hidden;
        }

        #login-page {
            display: flex;
            flex-direction: row;
            min-height: 100vh;
        }

        #login-image {
            background: red;
            width: 50%;
            min-height: 100vh;
        }

        #login-content {
            display: flex;
            flex-direction: column;
            background: white;
            width: 50%;
            height: 100%;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        #login-content h1 {
            width: 100%;
            box-sizing: border-box;
        }

        #input-email {
            display: flex;
            flex-direction: column;
        }

        #input-password {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }

        #input-email input {
            box-sizing: border-box;
            width: 550px;
            margin-top: 10px;
            height: 55px;
            border-radius: 10px;
            border: 1px solid #BABABA;
            padding-left: 25px;
            font-size: 20px;
        }

        #input-password input {
            box-sizing: border-box;
            width: 550px;
            margin-top: 10px;
            height: 55px;
            border-radius: 10px;
            border: 1px solid #BABABA;
            padding-left: 25px;
            font-size: 20px;
            padding-right: 25px;
        }

        #login-button {
            width: 350px;
            height: 75px;
            font-size: 30px;
            font-weight: bold;
            color: white;
            background: #02177B;
            border-radius: 15px;
            align-items: center;
            margin-top: 40px;
        }

        #login-button:hover {
            width: 350px;
            height: 75px;
            font-size: 30px;
            font-weight: bold;
            color: #02177B;
            background: white;
            border-radius: 15px;
            align-items: center;
            border: 1px solid #BABABA;
        }

        #login-bottom {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        #platform-icon {
            display: flex;
            flex-direction: row;
            margin-top: 40px;
        }

        #platform-icon img {
            width: 50px;
            height: 50px;
        }


    </style>

</head>
<body>
    <div id="login-page">
        <img id="login-image" src="../images/banner img/banner-movie.png" alt="">
        <div id="login-content">
            <div>
                <h1>SIGN IN</h1>
                <div id="input-email">
                    <label style="font-size: 20px;">Email</label>
                    <input type="email" placeholder="Email">
                </div>
                <div id="input-password">
                    <label style="font-size: 20px;">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <div id="login-bottom">
                    <p style="text-align: center;">Don’t have any account? <a href="login-confirm.php" style="color: #0329E1; text-decoration: none;">Sign up</a> here or continue with</p>
                    <div id="platform-icon">
                        <img src="../images/icon/facebook (1).png" alt="">
                        <img src="../images/icon/twitter (2).png" alt="" style="margin-left: 40px;">
                        <img src="../images/icon/instagram (3).png" alt="" style="margin-left: 40px;">
                        <img src="../images/icon/tik-tok (2).png" alt="" style="margin-left: 40px;">
                    </div>
                    <button id="login-button">Login</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>