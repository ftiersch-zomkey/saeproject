<?php

require_once("config/mysql.php");
require_once("config/functions.php");


$news_result = mysqli_query($conn, "SELECT * FROM news WHERE id=" .$_GET['id']);
$output = mysqli_fetch_assoc($news_result);

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Details</title>
    <link rel="stylesheet" href="details.css" media="screen" charset="utf-8">


  </head>
  <body>
    <nav>
      <a href="index.php">Home</a>
      <a href="#">Politics</a>
      <a href="#">Sports</a>
    </nav>
    <h1>Details - News</h1>

    <div class="main_content">
      <h2><?php echo $output['title']; ?></h2>
      <p class="text">
        <?php echo $output['content']; ?>
      </p>
      <p class="author">
        Von <?php echo $output['author']; ?>
      </p>
      <p class="timestamp">
        am <?php echo $output['published']; ?> veröffentlicht
      </p>

    </div>

    <div class="comments">
      <?php include("comments.php"); ?>
    </div>

  </body>
  <footer>
    <a href="#">Impressum</a>
    <a href="http://facebook.com" target="_blank">Facebook</a>
    <a href="http://twitter.com" target="_blank">Twitter</a>
  </footer>
</html>
