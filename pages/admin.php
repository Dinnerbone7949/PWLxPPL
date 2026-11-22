<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

        body {
            margin: 60px;
            font-family: 'Poppins';
            color: white;
            background: #101827;
        }

        #admin-title {
            display: flex;
            flex-direction: column;
        }

        #admin-title h1 {
            margin: 0;
            font-size: 40px;
        }

        #admin-title span {
            font-size: 20px;
        }

        #admin-add-title {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        #add-button {
            padding: 20px 40px 20px 40px;
            border: none;
            border-radius: 15px;
            background: linear-gradient(90deg, #02177B, #0329E1);
            color: white;
        }

        #add-button:hover {
            padding: 20px 40px 20px 40px;
            border: none;
            border-radius: 15px;
            background: white;
            color: #0329E1;
        }

        #add-button span {
            font-size: 20px;
            font-weight: bold;
        }

        #filter {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-top: 30px;
            align-items: center;
        }

        #search-bar-admin {
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 800px;
        }

        #search-bar-admin input {
            width: 100%;
            padding: 12px 45px 12px 20px;
            background-color: transparent;
            border: 2px solid white;
            border-radius: 12px;
            color: white;
            outline: none;
            box-sizing: border-box;
        }

        #search-bar-admin input::placeholder {
            color: #888;
        }

        .option-filter {
            height: 41px;
            width: 200px;
            border-radius: 15px;
            background-color: transparent;
            border: 2px solid white;
            color: white;
            font-weight: bold;
            font-size: 15px;
            text-align: center;
        }

        #filter-option {
            display: flex;
            flex-direction: row;
            gap: 30px;
        }

        #movie-list-admin {
            margin-top: 50px;
        }

        #admin-navbar {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            background: #02177B;
            padding: 20px 45px 20px 45px;
            border-radius: 15px 15px 0px 0px;
        }

        #admin-navbar section {
            display: flex;
            flex-direction: row;
            width: 560px;
            justify-content: space-between;
            padding: 0px 35px 0px 35px;
        }

        .movie-title-ctg h1 {
            margin-bottom: 0;
            margin-top: 0;
        }

        .movie-card-admin {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            background: transparent;
            align-items: center;
            padding: 20px 45px 20px 45px;
            border: 2px solid white;
            border-radius: 15px;
            margin-top: 30px;
        }

        #movie-list {
            margin: 0;
        }

        .movie-card-admin section {
            display: flex;
            flex-direction: row;
            width: 560px;
            align-items: center;
            justify-content: space-between;
            padding: 0px 35px 0px 35px;
        }

        .movie-card-admin img {
            height: 230px;
        }

    </style>
</head>
<body>
    <div id="main-admin">
        <div id="admin-desc">
            <div id="admin-add-title">
                <div id="admin-title">
                    <h1>Daftar Film</h1>
                    <span>Kelola data dari daftar film</span>
                </div>
                <button id="add-button">
                    <!-- icon -->
                    <span>Tambah Film</span>
                </button>
            </div>
            <div id="filter">
                <div id="search-bar-admin">
                    <input type="text" placeholder="Cari film...">
                    <img src="" alt="">
                </div>
                <div id="filter-option">
                    <select name="" class="option-filter">
                        <option value="" disabled selected>Filter</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    <select name="" class="option-filter">
                        <option value="" disabled selected>Terbaru</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div id="movie-list-admin">
                <nav id="admin-navbar">
                    <section>
                        <span>Id</span>
                        <span>Film</span>
                        <span>Title</span>
                    </section>
                    <section>
                        <span>Year</span>
                        <span>Ratings</span>
                        <span>Option</span>
                    </section>
                </nav>
                <div id="movie-list">
                    <div class="movie-card-admin">
                        <section>
                            <span>1</span>
                            <img src="../images/banner img/oddysey.png" alt="poster">
                            <h1>The Oddysey</h1>
                        </section>
                        <section>
                            <span>2026</span>
                            <div class="ratings-admin">
                                <img src="" alt="">
                                <span>8,9</span>
                            </div>
                            <div id="options-admin">
                                <button id="edit-btn"><img src="" alt=""></button>
                                <button id="rmv-btn"><img src="" alt=""></button>
                            </div>
                        </section>
                    </div>
                    <div class="movie-card-admin">
                        <section>
                            <span>1</span>
                            <img src="../images/banner img/oddysey.png" alt="poster">
                            <h1>The Oddysey</h1>
                        </section>
                        <section>
                            <span>2026</span>
                            <div class="ratings-admin">
                                <img src="" alt="">
                                <span>8,9</span>
                            </div>
                            <div id="options-admin">
                                <button id="edit-btn"><img src="" alt=""></button>
                                <button id="rmv-btn"><img src="" alt=""></button>
                            </div>
                        </section>
                    </div>
                    <div class="movie-card-admin">
                        <section>
                            <span>1</span>
                            <img src="../images/banner img/oddysey.png" alt="poster">
                            <h1>The Oddysey</h1>
                        </section>
                        <section>
                            <span>2026</span>
                            <div class="ratings-admin">
                                <img src="" alt="">
                                <span>8,9</span>
                            </div>
                            <div id="options-admin">
                                <button id="edit-btn"><img src="" alt=""></button>
                                <button id="rmv-btn"><img src="" alt=""></button>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>