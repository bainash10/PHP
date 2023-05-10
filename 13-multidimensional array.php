
<html>
    <body>
        <?php
        $record =array(
            array("a"=>"nis","b"=>"bai"),
            array("a"=>"ni","b"=>"ba"),
            array("a"=>"n","b"=>"b")
        );
        print_r($record[1]["b"]);
        echo '<br>';
        echo $record[1]["b"];

        ?>
    </body>
</html>