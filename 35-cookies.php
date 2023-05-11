<?php
$cookie_name = "Khwopa";
$cookie_value = "Engineering College";
setcookie($cookie_name, $cookie_value, time() + (60*60), "/");
?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name]))
        {
            echo "Cookie named '" . $cookie_name . "'is not set!";
        }
        else{
            echo "Cookie '" . $cookie_name . "'is set! <br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>
    </body>
</html>