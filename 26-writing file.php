<html>
    <head>
        <title>Reading a file using PHP</title>
    </head>
    <body>
        <?php
        $filename = $_SERVER['DOCUMENT_ROOT']."/phpfosp/nischal.txt"; //This should be Capital okay
        # echo $filename;exit(); 
        $file = fopen($filename, "w");
        if($file == false)
        {
            echo("Error in opening file");
            exit();
        } 
     fwrite($file,"Nepal is my country");
     fclose($file);
     $filename = "nischal.txt";
     $file = fopen($filename, "r");
     $filesize = filesize($filename);
    
     $filetext = fread($file, $filesize);
     fclose($file);
     echo ("File Size : $filesize bytes");
     echo ("<p>$filetext</p>");
        ?>
    </body>
</html>