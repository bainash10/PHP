<html>
    <head>
        <title>Reading a file using PHP</title>
    </head>
    <body>
        <?php
        $filename = $_SERVER['DOCUMENT_ROOT']."/phpfosp/nischal.txt";
        # echo $filename;exit(); 
        $file = fopen($filename, "w");
        if($file == false)
        {
            echo("Error in opening file");
            exit();
        } 
     fwrite($file,"Nepal is my country");
     fclose($file);
        ?>
    </body>
</html>