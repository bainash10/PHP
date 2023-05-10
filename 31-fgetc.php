<html>
    <head>
        <title>Reading a file using PHP</title>
    </head>
    <body>
        <?php
            $myfile = fopen("nis.txt","r") or
            die("Unable to open file!");
            $txt = "Computer Department\n";
            echo fgetc($myfile) . "<br>";
            fclose($myfile);
        ?>
    </body>
</html>