<html>
    <head>
        <title>Reading a file using PHP</title>
    </head>
    <body>
        <?php
            $myfile = fopen("nis.txt","r") or
            die("Unable to open file!");
            $txt = "Computer Department\n";
            echo fgets($myfile);
            fclose($myfile);
        ?>
    </body>
</html>