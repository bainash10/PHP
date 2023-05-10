<html>
    <body>
    <?php
    $x =array(1, 2, 4);
    rsort($x);
    echo "<pre>";
    print_r($x);
    echo "The second largest number is "."<br>";
    echo $x[1];
    sort($x);
    echo "<pre>";
    print_r($x);
    echo "The second smallest number is "."<br>";
    echo $x[1];

    ?>
    </body>
</html>
