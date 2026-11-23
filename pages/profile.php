<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

        body {
            margin: 0;
            font-family: 'Poppins';
            background: #101827;
            color: white;
        }

        #main-edit-pro {
            display: flex;
            flex-direction: column;
            gap: 20px;
            justify-content: center;
            align-items: center;
        }

        #main-profile-edit {
            display: flex;
            flex-direction: row;
            min-height: 500px;
            gap: 50px;
            justify-content: center;
        }

        .form-profile {
            display: flex;
            flex-direction: column;
            gap: 10px;
            justify-content: center;
            align-items: center;
        }

        .input-form {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }

        .input-form label {
            font-size: 20px;
            font-weight: bold;
        }

        .input-form input {
            width: 600px;
            height: 30px;
            background: transparent;
            border: 2px solid white;
            border-radius: 10px;
            color: white;
            margin-top: 10px;
            padding: 5px 20px 5px 20px;
            font-size: 15px;
        }

        #btn-edit-profile {
            display: flex;
            flex-direction: row;
            gap: 50px;
        }

        .btn-profile {
            color: white;
            outline: none;
            border: none;
            width: 400px;
            height: 80px;
            font-size: 30px;
            font-weight: bold;
            border-radius: 15px;
        }

    </style>
</head>
<body>
    <div id="main-edit-pro">
        <div id="main-profile-edit">
            <div class="form-profile">
                <div class="input-form">
                    <label>Username</label>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-form">
                    <label>Address</label>
                    <input type="text" placeholder="Address">
                </div>
                <div class="input-form">
                    <label>Password</label>
                    <input type="password" placeholder="Password">
                </div>
            </div>
            <div class="form-profile">
                <div class="input-form">
                    <label>Email</label>
                    <input type="email" placeholder="Email">
                </div>
                <div class="input-form">
                    <label>Contact Number</label>
                    <input type="number" placeholder="Contact Number">
                </div>
                <div class="input-form">
                    <label>Confirm Password</label>
                    <input type="password" placeholder="Confirm Password">
                </div>
            </div>
        </div>
        <div id="btn-edit-profile">
            <button class="btn-profile" style="background: linear-gradient(90deg, #02177B, #0329E1);">Change</button>
            <button class="btn-profile" style="background: #FF0000;">Log Out</button>
        </div>
    </div>
</body>
</html>