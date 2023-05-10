<html>
    <head>
        <title>Reading a file using PHP</title>
    </head>
    <body>
        <?php
            $myfile = fopen("newfile.txt","w") or
            die("Unable to open file!");
            $txt = "Computer Department\n";
            fwrite($myfile, $txt);
            $txt= "Electronics & Commn Department\n";
            fwrite($myfile, $txt);
            fclose($myfile);
            echo "File successfully created with overwriting.";
        ?>
    </body>
</html>