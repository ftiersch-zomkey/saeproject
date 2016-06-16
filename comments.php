
<div id="kommentar_formular">
<?php

$conncomments = mysqli_query($conn, "SELECT * FROM comments");

while($comment = mysqli_fetch_assoc($conncomments))
        echo $comment["author"];
 ?>
<p>
  test
</p>
</div> <!-- kommentar_formular -->
