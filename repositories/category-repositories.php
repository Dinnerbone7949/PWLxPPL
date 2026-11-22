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