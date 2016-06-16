<?php

function niceTitle($title){
  $title = strtolower($title);
  $title = (iconv("UTF-8", "ASCII//TRANSLIT", $title));
  $title = preg_replace('/[^A-Za-z0-9\_\-]/',"_", $title);
  return $title;
}

function getNews($page, $limit){
  // get the Connection & table
  global $conn;
  global $tables;
  $table = $tables['news'];

  // TODO: Security :P

  // Select
  $skip = --$page * $limit;
  $res = $conn->query("SELECT * FROM `$table` ORDER BY `published` DESC LIMIT $skip,$limit");

  // error or no news anymore
  if(!$res || $res->num_rows == 0){return false;}

  // Loop
  while($newsEntry = $res->fetch_assoc()){
    $news[] = $newsEntry;
  }

  // return
  return $news;
}

function countNews(){
  // get the Connection & table
  global $conn;
  global $tables;
  $table = $tables['news'];

  // Select
  $res = $conn->query("SELECT count(`id`) FROM `$table`");

  // error
  if(!$res || $res->num_rows == 0){return false;}

  // get Row
  $row = $res->fetch_row();

  // return
  return $row[0];
}

function calcPagination($page, $limit, $newsCount, $pages_before = 4, $pages_after = 4){

  for($i=($page-$pages_before);$i < ($page + $pages_after);$i++){
    if($i < 0){$pages_after++;}
    if($i > 0 && $i <= ceil($newsCount / $limit)){
      $pages[] = $i;
    }
  }

  return $pages;
}

 ?>
