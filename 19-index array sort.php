<html>
    <body>
    <?php
    $cars =array("Volvo", "BMW", "Toyota");
    sort($cars);
    echo "<pre>";
    print_r($cars);
    echo sizeof($cars)."<br>";
    $clength = count($cars);
    echo $clength."<br>";
    for($x = 0; $x < $clength; $x++)
    {
        echo $cars[$x];
        echo "<br>";
    }
    ?>
    </body>
</html>
