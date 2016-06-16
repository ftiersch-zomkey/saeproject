
<div id="kommentar_formular">
<?php

$conncomments = mysqli_query($conn, "SELECT * FROM comments");

while($comment = mysqli_fetch_assoc($conn,comments))
        echo $comment["author"];
 ?>
<p>
  test
</p>

<form class="kommentare" action="comments.php" method="post">
  <label class=label1>Kommentar</label> </br>
  <input type="text" name="comment">
  <input type="submit" name="commentsend" value="Comment">


</form>
</div> <!-- kommentar_formular -->
