<?php

function getNews($page, $limit){
  // get the Connection & table
  global $conn;
  global $tables;
  $table = $tables['news'];

  // TODO: Security :P

  // Select
  $skip = --$page * $limit;
  $res = $conn->query("SELECT * FROM `$table` ORDER BY `published` DESC LIMIT $skip,$limit");

  echo("SELECT * FROM `$table` ORDER BY `published` DESC LIMIT $skip,$limit");
  echo($conn->error);

  // error or no news anymore
  if(!$res || $res->num_rows == 0){return false;}

  // Loop
  while($newsEntry = $res->fetch_assoc()){
    $news[] = $newsEntry;
  }

  // return
  return $news;
}

 ?>
