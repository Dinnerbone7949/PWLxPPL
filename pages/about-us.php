<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

        body {
            margin: 0;
            background: #101827;
            font-family: 'Poppins';
            color: white;
        }

        #main-about-us {
            display: flex;
            flex-direction: column;
        }

        #mission {
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin: 10px 50px 50px 50px;
            gap: 30px;
        }

        .mission-contain {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            font-size: 25px;
            align-items: start;
            width: 420px;
            height: 400px;
            padding: 50px 35px 10px 35px;
            border: 1px solid white;
            color: white;
            border-radius: 15px;
        }

        .mission-contain p {
            text-align: justify;
        }

        .mission-contain span {
            font-size: 35px;
            font-weight: bold;
            padding-top: 50px;
        }
        
        #developer {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: 50px;
            margin-right: 50px;
        }

        #developers {
            display: flex;
            flex-direction: row;
            gap: 30px;
        }

        .develop-profile {
            display: flex;
            flex-direction: row;
            border: 1px solid white;
            border-radius: 15px;
            padding: 20px;
            min-width: 400px;
            justify-content: end;
            width: 492px;
        }

        .develop-name {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .develop-name div h2 {
            margin: 0;
        }

    </style>
</head>
<body>
    <div id="main-about-us">
        <div id="mission">
            <div class="mission-contain">
                <div class="icon-mission">
                    <img src="" alt="">
                    <span>Our Mission</span>
                </div>
                <p>To connect movie lovers with exceptional stories by providing a seamless, simple, and reliable streaming experience for everyone.</p>
            </div>
            <div class="mission-contain">
                <div class="icon-mission">
                    <img src="" alt="">
                    <span>Our Vision</span>
                </div>
                <p>To become the world's most accessible and enjoyable destination for cinematic discovery and entertainment.</p>
            </div>
            <div class="mission-contain">
                <div class="icon-mission">
                    <img src="" alt="">
                    <span>Why WatchMe?</span>
                </div>
                <p>We offer a curated movie library, personalized recommendations, and high-quality streaming—all wrapped in an effortless interface.</p>
            </div>
        </div>
        <div id="developer">
            <h1><span style="color: blue;">Developer</span> Team WatchMe</h1>
            <div id="developers">
                <div class="develop-profile">
                    <img src="" alt="">
                    <div class="develop-name">
                        <div>
                            <h2>Destin Ryoma Aryson</h2>
                            <span>UI/UX Designer & Programmer</span>
                        </div>
                        <span>Design Team </span>
                    </div>
                </div>
                <div class="develop-profile">
                    <img src="" alt="">
                    <div class="develop-name">
                        <div>
                            <h2>Vincent Chandra</h2>
                            <span>Designer & Web Developer</span>
                        </div>
                        <span>Design Team </span>
                    </div>
                </div>
                <div class="develop-profile">
                    <img src="" alt="">
                    <div class="develop-name">
                        <div>
                            <h2>Julian Vionaldo</h2>
                            <span>UI/UX Designer</span>
                        </div>
                        <span>Design Team </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>