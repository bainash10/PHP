<html>
    <head>
        <title>Reading a file using PHP</title>
    </head>
    <body>
        <?php
        $filename = "Khwopa.txt";
        $file = fopen($filename, "r");
        if($file == false)
        {
            echo("Error in opening file");
            exit();
        } 
        $filesize = filesize($filename);
        $filetext = fread($file, $filesize);
        fclose($file);
        echo ("File Size : $filesize bytes");
        echo ("<p>$filetext</p>");
        ?>
    </body>
</html>