
<div id="kommentar_formular">
<?php

$conncomments = mysqli_query($conn, "SELECT * FROM comments WHERE news_id = ". $_GET["id"]);


 ?>
<p>
  test
</p>

<form class="kommentare" action="details.php" method="post">
  <label class=label1>Kommentar</label> </br>
  <input type="text" name="comment">
  <input type="submit" name="commentsend" value="Comment">

<?php while($comment = mysqli_fetch_assoc($conncomments)){ ?>

<div id="Kommentar">
  <p class="name"><?php echo $comment["author"]; ?></p>
  <p class="date"><?php echo $comment["added"]; ?></p>
  <div id=clear></div>
  <p class="Kommentarclass"><?php echo $comment['content']; ?></p>
</div>
<?php } ?>
<style media="screen">
  #Kommentar {
    background-color: lightgrey;
    margin-top: 10px;
    height: 200px;
    width: 500px;
  }

  .name {
    float: left;
    margin-left: 30px;
  }

  .date {
    float: left;
    margin-left: 150px;
  }

#clear {
  clear: both;
}

  .Kommentarclass{
    padding: 10px;
    margin-left: 30px;
    background-color: white;
    width: 400px;
    height: 100px

  }


</style>

</form>
</div> <!-- kommentar_formular -->
