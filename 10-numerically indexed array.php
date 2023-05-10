<html>
    <body>
        <?php
        $index = array();
        $index[0]="Nischal Baidar";
        $index[1]="20";
        $index[2]="Male";
        //or
        $index1=array("Nischal Baidar", "20", "Male");
        //print_r is used to print the content of an array
        echo "<pre>";
        print_r($index);
        //or
        echo "<pre>";
        print_r($index1);
        echo "</pre>";
        var_dump($index);
 ?>
    </body>
</html>