<?php
require_once __DIR__ . "/../config/database.php";
function getGenres()
{
  global $pdo;
  $query = "select * from genres";
  $stmt = $pdo->prepare($query);
  $stmt->execute();
  $genres = $stmt->fetchAll();

  return $genres;
}

function genreCheck()
{
  if(!isset($_GET["genre"])){
    $banner_title = "genre";
    $banner_paragraph = "groups films by shared themes, styles, and moods to help viewers easily discover stories they love";
    $bannerimgpath = "/assets/images/banner/banner-temp.png";
  }
  else {
    if((strtolower($_GET["genre"]) ?? '') == "action"){
        $banner_title = "action";
        $banner_paragraph = "delivers high-octane thrills, intense physical stunts, and fast-paced adventures—packed with epic battles and non-stop excitement from start to finish.";
        $bannerimgpath = "/assets/images/banner/genres/action.png";
    }
    elseif((strtolower($_GET["genre"]) ?? '') == "comedy"){
        $banner_title = "comedy";
        $banner_paragraph = "brings lighthearted humor, witty dialogue, and hilarious situations—crafted to entertain and keep you laughing from start to finish.";
        $bannerimgpath = "/assets/images/banner/genres/comedy.png";
    }
    elseif((strtolower($_GET["genre"]) ?? '') == "animation"){
        $banner_title = "animation";
        $banner_paragraph = "brings imaginative worlds and vibrant characters to life through artistry and visual storytelling—captivating audiences of all ages with boundless creativity and wonder.";
        $bannerimgpath = "/assets/images/banner/genres/animation.png";
    }
    elseif((strtolower($_GET["genre"]) ?? '') == "drama"){
        $banner_title = "drama";
        $banner_paragraph = "delves into deeply human stories, compelling character journeys, and raw emotional conflicts—capturing life's most poignant moments with authenticity and depth.";
        $bannerimgpath = "/assets/images/banner/genres/drama.png";
    }
    elseif((strtolower($_GET["genre"]) ?? '') == "romance"){
        $banner_title = "romance";
        $banner_paragraph = "genre that focuses on love, relationships, and the emotional connections between characters.";
        $bannerimgpath = "/assets/images/banner/genres/romance.png";
    }
    elseif((strtolower($_GET["genre"]) ?? '') == "horror"){
        $banner_title = "horror";
        $banner_paragraph = "plunges you into chilling suspense, eerie atmospheres, and terrifying encounters—crafted to keep you on the edge of your seat long after the credits roll.";
        $bannerimgpath = "/assets/images/banner/genres/horror.png";
    }
    elseif((strtolower($_GET["genre"]) ?? '') == "family"){
        $banner_title = "family";
        $banner_paragraph = "offers heartwarming stories, wholesome adventures, and uplifting humor—crafted to bring viewers of all generations together for shared entertainment.";
        $bannerimgpath = "/assets/images/banner/genres/family.png";
    }
    elseif((strtolower($_GET["genre"]) ?? '') == "fantasy"){
        $banner_title = "fantasy";
        $banner_paragraph = "transports you to magical realms filled with mythical creatures, epic quests, and boundless imagination—where the impossible becomes reality.";
        $bannerimgpath = "/assets/images/banner/genres/fantasy.png";
    }
    else{
        $banner_title = "Not FOUND";
        $banner_paragraph = "Genres Not Found, pick something else :(";
        $bannerimgpath = "/assets/images/banner/banner-temp.png";
    }
  }
  return [$banner_title, $banner_paragraph, $bannerimgpath];
}