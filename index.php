<?php
require_once("config/mysql.php");
require_once("config/functions.php");

$news_entry_sk = file_get_contents('skeleton/news_entry.html');

$previewLength = 200; // Preview char length
$page = isset($_GET['p']) ? $_GET['p'] : 1;
$limit = isset($_GET['l']) ? $_GET['l'] : 5;

$pagination = calcPagination($page,$limit,countNews());
$news = getNews($page, $limit);

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>News :)</title>
  <link rel="stylesheet" href="/css/master.css" charset="utf-8">
</head>
<body>
  <div class="wrapper">
    <?php
    if($news){
      foreach($news as $entry){
        $html = $news_entry_sk;

        // REPLACE PLACEHOLDER
        foreach($entry as $key => $value){
          // CHANGE TYPE OF DATE
          if($key == "published"){
            $date = new DateTime($value);
            $value = $date->format('H:i d.m.Y');
          }
          // REPLACE PLACEHOLDER :)
          $html = str_replace("{".$key."}", $value, $html);
        }

        // PREVIEW IS SPECIAL
        $preview = $entry['content'];
        if(strlen($preview) > $previewLength){$preview = substr($preview, 0, $previewLength-3)."...";}
        $html = str_replace("{preview}", $preview, $html);

        // Echo out
        echo $html;
      }
    }else{
      echo "<h2>No News!<h2>";
    }
    ?>

    <ul class="pagination">
      <?php
      if(count($pagination) > 1){
        foreach($pagination as $ppage){
          $active = ($page == $ppage) ? "active" : "";
          echo "<li class=\"$active\"><a href=\"/$ppage\">$ppage</a></li>";
        }
      }
      ?>
    </ul>
  </body>
  </html>
