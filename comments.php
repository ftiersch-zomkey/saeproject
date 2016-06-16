
<div id="kommentar_formular">
<?php

$conncomments = mysqli_query($conn, "SELECT * FROM comments");

while($comment = mysqli_fetch_assoc($conncomments))
        echo $comment["id"];
?>
</div> <!-- kommentar_formular -->
