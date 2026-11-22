<?php
require_once __DIR__ . "/../config/database.php";
function getCategories()
{
  global $pdo;
  $query = "select * from categories";
  $stmt = $pdo->prepare($query);
  $stmt->execute();
  $categories = $stmt->fetchAll();

  return $categories;
}

function categoryCheck()
{
  if(!isset($_GET["category"])){
    $banner_title = "category";
    $banner_paragraph = "organize content by type and format—such as Movies, TV Shows, and Documentaries—to help viewers easily find what they want to watch.";
    $bannerimgpath = "/assets/images/banner/banner-temp.png";
  }
  else {
    if((strtolower($_GET["category"]) ?? '') == "general"){
        $banner_title = "General";
        $banner_paragraph = "General Audiences — Family-friendly content suitable for all ages, containing no material that would offend parents when viewed by children.";
        $bannerimgpath = "/assets/images/banner/categories/general.png";
    }
    elseif((strtolower($_GET["category"]) ?? '') == "pg"){
        $banner_title = "PG";
        $banner_paragraph = "Parental Guidance Suggested — Content that is generally suitable for most audiences, though some material may not be suitable for young children and parental guidance is advised.";
        $bannerimgpath = "/assets/images/banner/categories/pg.png";
    }
    elseif((strtolower($_GET["category"]) ?? '') == "pg-13"){
        $banner_title = "PG-13";
        $banner_paragraph = "Parents Strongly Cautioned — Content designed for audiences aged 13 and older, as some material—such as intense action, mild violence, or mature themes—may be inappropriate for younger children.";
        $bannerimgpath = "/assets/images/banner/categories/pg_13.png";
    }
    elseif((strtolower($_GET["category"]) ?? '') == "fiction"){
        $banner_title = "Fiction";
        $banner_paragraph = "Imaginative storytelling derived from creative invention rather than real-life events, spanning genres such as drama, fantasy, action, and science fiction.";
        $bannerimgpath = "/assets/images/banner/categories/fiction.png";
    }
    elseif((strtolower($_GET["category"]) ?? '') == "non-fiction"){
        $banner_title = "Non-Fiction";
        $banner_paragraph = "Fact-based storytelling grounded in real events, real people, and accurate information, typically presented through documentaries, biographies, or historical accounts.";
        $bannerimgpath = "/assets/images/banner/categories/non_fiction.png";
    }
    else{
        $banner_title = "Not FOUND";
        $banner_paragraph = "Category Not Found, pick something else :(";
        $bannerimgpath = "/assets/images/banner/banner-temp.png";
    }
  }
  return [$banner_title, $banner_paragraph, $bannerimgpath];
}