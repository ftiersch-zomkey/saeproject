
<div id="kommentar_formular">
<?php

$conncomments = mysqli_query($conn, "SELECT * FROM comments");

while($row = mysql_fetch_assoc($conncomments))
        echo $row;

?>
</div> <!-- kommentar_formular -->
