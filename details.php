<?php
require_once("header.php");
require_once("config/mysql.php");
require_once("config/functions.php");
require_once("index.php");


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
      <?php
      $conncomments = mysqli_query($conn, "SELECT * FROM comments WHERE news_id = ". $_GET["id"]);
      ?>
      <form class="kommentare" action="details.php" method="post">
        <div class=label1>Kommentar Ersetllen</div></br>
        <input class="inputtext" type="text" name="comment">
        <input class="commentbutton" type="submit" name="commentsend" value="Comment">
      </form>

      <?php while($comment = mysqli_fetch_assoc($conncomments)){ ?>

      <div id="Kommentar">
        <p class="name"><?php echo $comment["author"]; ?></p>
        <p class="date"><?php echo $comment["added"]; ?></p>
        <div id=clear></div>
        <p class="Kommentarclass"><?php echo $comment['content']; ?></p>
      </div>
      <?php } ?>

    </div>
  </body>
</html>

<?php
require_once("footer.php");
?>
