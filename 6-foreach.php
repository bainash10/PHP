<html>
    <body>
        <?php
     $arr= array("one","two","three");
     echo "Using a for loop: <br/>\n";
        for($i=0; $i<sizeof($arr); $i++)
        {
            echo "Value: $arr[$i]<br/>\n";
        }
        echo "Using a foreach loop: <br />\n";
        foreach ($arr as $value)
        {
            echo "Value: $value<br />\n";
       }

        ?>
    </body>
</html>