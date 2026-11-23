<?php 
require __DIR__ . "/../../../repositories/movie-repositories.php";
require_once __DIR__ . "/../../../repositories/category-repositories.php";
$banner_title = categoryCheck()[0];
$banner_paragraph = categoryCheck()[1];
$bannerimgpath = categoryCheck()[2];
$content = "category.php";
$categories = getCategories();
$search = $_GET["search"] ?? '';
$category = $_GET["category"] ?? '';
$genre = $_GET["genre"] ?? '';
$year = $_GET["year"] ?? '';
$limit = 20;
$movies = getMovies($search, $limit, $category, $genre, $year);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $_GET["category"] ?? 'Category' ?></title>
    <link rel="stylesheet" href="/styles/index.css">
    <link rel="icon" href="/assets/images/logo/watchme.png" type="image/x-icon">
</head>
<body>
    <?php include_once __DIR__ . "/../../../components/public/navbar.php"; ?>
    <?php include_once __DIR__ . "/../../../components/public/movie_banner.php"; ?>
    <main>
        <?php include __DIR__ . "/../../../components/public/category_buttons.php"; ?>
        <?php if(!isset($_GET["category"])): ?> 
            <moviebar>
                <h1>General</h1>
                <section id="movierow">
                    <?php
                        $limit = 20;
                        $category = "General";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            </moviebar>
            <moviebar>
                <h1>PG</h1>
                <section id="movierow">
                    <?php
                        $category = "PG";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            </moviebar>
            <moviebar>
                <h1>PG-13</h1>
                <section id="movierow">
                    <?php
                        $category = "PG-13";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            </moviebar>
        <?php else: 
            $limit = 200;?>
            <?php if((strtolower($_GET["category"]) ?? '') == "general"): ?>
                <section class="movies_group">
                    <?php
                        $category = "General";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            <?php elseif((strtolower($_GET["category"]) ?? '') == "pg"): ?>
                <section class="movies_group">
                    <?php
                        $category = "PG";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            <?php elseif((strtolower($_GET["category"]) ?? '') == "pg-13"): ?>
                <section class="movies_group">
                    <?php
                        $category = "PG-13";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            <?php elseif((strtolower($_GET["category"]) ?? '') == "fiction"): ?>
                <section class="movies_group">
                    <?php
                        $category = "Fiction";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            <?php elseif((strtolower($_GET["category"]) ?? '') == "non-fiction"): ?>
                <section class="movies_group">
                    <?php
                        $category = "Non-fiction";
                        $movies = getMovies($search, $limit, $category, $genre, $year);
                        foreach ($movies as $movie) { 
                            include __DIR__ . "/../../../components/public/movie_cover.php";
                        }
                    ?>
                </section>
            <?php elseif((strtolower($_GET["category"]) ?? '') == "r"): ?>
                <section class="movies_group">
                    <?php
                        $category = "R";
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