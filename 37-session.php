<?php session_start();
$_SESSION['views']=1;
?>
<html>
    <body>
        <?php
        echo "Pageviews=". $_SESSION['views'];
        ?>
    </body>
</html>