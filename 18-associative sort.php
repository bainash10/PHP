<html>
    <body>
    <?php
    $age =array("Peter"=>"39","Ben"=>"37","Joe"=>"43");
    echo "Before sorting associative array."."<br>";
    echo "<pre>";
    print_r($age);
    asort($age);
    echo "After Sorting Associative array."."<br>";
    foreach($age as $x=>$x_value)
    {
        echo "key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?>
    </body>
</html>
