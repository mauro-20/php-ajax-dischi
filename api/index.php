<?php

require __DIR__ . "/../database.php";

header('Content-Type: application/json');
$genre = $_GET['genre'];
$databaseFiltered = [];
if(!empty($genre)){
  foreach($database as $album) {
    if ($album['genre'] == $genre){
      $databaseFiltered[] = $album;
    }
  }
  echo json_encode($databaseFiltered);
} else {
  echo json_encode($database);
};
