
<div id="kommentar_formular">
<?php

$conncomments = mysqli_query($conn, "SELECT * FROM comments WHERE news_id = ". $_GET["id"]);

 ?>


<form class="kommentare" action="details.php" method="post">
  <div class=label1>Kommentar Ersetllen</div> </br>
  <input class="inputtext" type="text" name="comment">
  <input class="commentbutton" type="submit" name="commentsend" value="Comment">
</form>
<style media="screen">

  .label1 {
    padding-top: 10px;
    padding-left: 30px;
  }

  form {
    background-color: lightgrey;
    margin-top: 30px;
    height: 200px;
    width: 500px;
  }

  .inputtext {
    padding: 10px;
    margin-left: 30px;
    background-color: white;
    width: 400px;
    height: 100px;
  }

  .commentbutton {
    margin-left: 360px;
    margin-top: 10px;
  }

</style>





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
    margin-top: 30px;
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
    height: 100px;

  }


</style>

</div> <!-- kommentar_formular -->
