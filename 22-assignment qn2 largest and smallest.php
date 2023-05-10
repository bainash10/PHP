<html>
    <body>
    <?php
    $x =array(1, 2, 4);
    rsort($x);
    echo "<pre>";
    print_r($x);
    echo "The largest number is "."<br>";
    echo $x[0];
    sort($x);
    echo "<pre>";
    print_r($x);
    echo "The smallest number is "."<br>";
    echo $x[0];

    ?>
    </body>
</html>
