<html>
    <head>
        <title>Reading a file using PHP</title>
    </head>
    <body>
        <?php
            $myfile = fopen("nis.txt","r") or
            die("Unable to open file!");
            while(!feof($myfile))
            {
                echo fgets($myfile) . "<br>";
            }
            fclose($myfile);
        ?>
    </body>
</html>