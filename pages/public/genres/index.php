<?php
require_once __DIR__ . "/../../../repositories/genre-repositories.php";
require __DIR__ . "/../../../repositories/movie-repositories.php";
$banner_title = genreCheck()[0];
$banner_paragraph = genreCheck()[1];
$bannerimgpath = genreCheck()[2];
$content = "genre.php";
$search = $_GET["search"] ?? '';
$category = $_GET["category"] ?? '';
$genre = $_GET["genre"] ?? '';
$year = $_GET["year"] ?? '';
$limit = 20;
$movies = getMovies($search, $limit, $category, $genre, $year);
$genres = getGenres();
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $_GET["genre"] ?? 'Genre' ?></title>
    <link rel="stylesheet" href="../../../styles/index.css">
    <link rel="icon" href="/assets/images/logo/watchme.png" type="image/x-icon">
</head>
<body>
    <?php include_once __DIR__ . "/../../../components/public/navbar.php"; ?>
    <?php include_once __DIR__ . "/../../../components/public/movie_banner.php"; ?>
    <main>
        <?php include __DIR__ . "/../../../components/public/genre_buttons.php"; ?>
        <?php if(!isset($_GET["genre"])): ?> 
            <moviebar>
                <h1>Action</h1>
                <section id="movierow">
                    <?php
                        $limit = 20;
                        $genre = "Action";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            </moviebar>
            <moviebar>
                <h1>Comedy</h1>
                <section id="movierow">
                    <?php
                        $genre = "Comedy";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            </moviebar>
            <moviebar>
                <h1>Family</h1>
                <section id="movierow">
                    <?php
                        $genre = "Family";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            </moviebar>
        <?php else: 
            $limit = 200;?>
            <?php if((strtolower($_GET["genre"]) ?? '') == "action"): ?>
                <section class="movies_group">
                    <?php
                        $genre = "Action";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            <?php elseif((strtolower($_GET["genre"]) ?? '') == "animation"): ?>
                <section class="movies_group">
                    <?php
                        $genre = "Animation";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            <?php elseif((strtolower($_GET["genre"]) ?? '') == "comedy"): ?>
                <section class="movies_group">
                    <?php
                        $genre = "Comedy";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            <?php elseif((strtolower($_GET["genre"]) ?? '') == "drama"): ?>
                <section class="movies_group">
                    <?php
                        $genre = "Drama";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            <?php elseif((strtolower($_GET["genre"]) ?? '') == "romance"): ?>
                <section class="movies_group">
                    <?php
                        $genre = "Romance";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            <?php elseif((strtolower($_GET["genre"]) ?? '') == "horror"): ?>
                <section class="movies_group">
                    <?php
                        $genre = "Horror";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            <?php elseif((strtolower($_GET["genre"]) ?? '') == "family"): ?>
                <section class="movies_group">
                    <?php
                        $genre = "Family";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            <?php elseif((strtolower($_GET["genre"]) ?? '') == "fantasy"): ?>
                <section class="movies_group">
                    <?php
                        $genre = "Fantasy";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            <?php else: ?>
                <h1 style="color:white">Not Found</h1>
            <?php endif ?> 
        <?php endif ?>
    </main>
    <?php include_once __DIR__ . "/../../../components/public/footer.php" ?>
</body>
</html>