<?php
require_once __DIR__ . "/../config/database.php";

function getMovies($search, $limit, $category, $genre, $year)
{
    global $pdo;
    if($category == 'R' || $category=="PG" || $category=="Fiction"){
       $query = "select distinct mh.movie_id, mh.release_year, mh.duration, mh.cover_path, md.title, md.description, md.sinopsis 
              from movies_head mh join movie_details md on mh.movie_id = md.head_id left join movie_categories mc on mh.movie_id = mc.movie_id
              left join categories c on mc.category_id = c.id left join movie_genres mg on mh.movie_id = mg.movie_id
              left join genres g on mg.genre_id = g.id WHERE md.title like :search and c.name = :category and g.name like :genre
              and mh.release_year like :year limit :limit";
              
    $stmt = $pdo->prepare($query);
    
    $stmt->execute([
        'search'    => "%$search%",
        'category'  => "$category",
        'genre'     => "%$genre%",
        'year'      => "%$year%",
        'limit'     => $limit,
    ]);

    $movies = $stmt->fetchAll();

    return $movies;
    }
    $query = "select distinct mh.movie_id, mh.release_year, mh.duration, mh.cover_path, md.title, md.description, md.sinopsis 
              from movies_head mh join movie_details md on mh.movie_id = md.head_id left join movie_categories mc on mh.movie_id = mc.movie_id
              left join categories c on mc.category_id = c.id left join movie_genres mg on mh.movie_id = mg.movie_id
              left join genres g on mg.genre_id = g.id WHERE md.title like :search and c.name like :category and g.name like :genre
              and mh.release_year like :year limit :limit";
              
    $stmt = $pdo->prepare($query);
    
    $stmt->execute([
        'search'    => "%$search%",
        'category'  => "%$category%",
        'genre'     => "%$genre%",
        'year'      => "%$year%",
        'limit'     => $limit,
    ]);

    $movies = $stmt->fetchAll();

    return $movies;
}

function getMoviesMinYearRange($year, $limit)
{
    global $pdo;
    
    $query = "select distinct mh.movie_id, mh.release_year, mh.duration, mh.cover_path, md.title, md.description, md.sinopsis 
              from movies_head mh join movie_details md on mh.movie_id = md.head_id left join movie_categories mc on mh.movie_id = mc.movie_id
              left join categories c on mc.category_id = c.id left join movie_genres mg on mh.movie_id = mg.movie_id
              left join genres g on mg.genre_id = g.id WHERE mh.release_year < :year limit :limit";
              
    $stmt = $pdo->prepare($query);
    
    $stmt->execute([
        'year'  => $year,
        'limit' => $limit,
    ]);

    $movies = $stmt->fetchAll();

    return $movies;
}

function getMovie($id)
{
    global $pdo;
    
    $query = "select mh.movie_id, mh.release_year, mh.duration, mh.cover_path, md.title, md.description, md.sinopsis 
              from movies_head mh join movie_details md on mh.movie_id = md.head_id 
              where mh.movie_id = :id";
              
    $stmt = $pdo->prepare($query);
    $stmt->execute(['id' => $id]);
    $movie = $stmt->fetch();
    
    $query = "select c.name from movie_categories mc left join categories c on mc.category_id = c.id 
              where mc.movie_id = :movie_id";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['movie_id' => $id]);
    $categories = $stmt->fetchAll();
    $movie['categories'] = array_column($categories, 'name');

    $query = "select g.name from movie_genres mg
              left join genres g on mg.genre_id = g.id
              where mg.movie_id = :movie_id";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['movie_id' => $id]);
    $genres = $stmt->fetchAll();
    $movie['genres'] = array_column($genres, 'name');

    return $movie;
}