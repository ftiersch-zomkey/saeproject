<?php

include_once("comments.php");
require_once("config/mysql.php");
require_once("config/functions.php");


$news_result = mysqli_query("SELECT * FROM news WHERE id = ." .$_GET['id'] .);
mysqli_fetch_assoc($news_result);

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
      <?php echo $news_result; ?>
    </div>

    <div class="side_container">

    </div>

    <div class="comments">

    </div>

  </body>
  <footer>
    <a href="#">Impressum</a>
    <a href="http://facebook.com" target="_blank">Facebook</a>
    <a href="http://twitter.com" target="_blank">Twitter</a>
  </footer>
</html>
