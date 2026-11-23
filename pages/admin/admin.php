<?php

$content = "admin_content.php";
$bannerimgpath = "../../assets/images/banner/banner-temp.png"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../styles/index.css">
</head>
<body>
    <?php require_once __DIR__ . "/../../components/public/navbar.php"?>
    <?php require_once __DIR__ . "/../../components/admin/movie_banner.php"?>
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
    <?php require_once __DIR__ . "/../../components/public/footer.php"?>
</body>
</html>