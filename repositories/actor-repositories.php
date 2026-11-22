<?php
require_once __DIR__ . "/../config/database.php";
function getActors()
{
  global $pdo;
  $query = "select * from actors";
  $stmt = $pdo->prepare($query);
  $stmt->execute();
  $actors = $stmt->fetchAll();

  return $actors;
}