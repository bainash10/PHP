<html>
    <head>
        <title>Reading a file using PHP</title>
    </head>
    <body>
        <?php
            // error_reporting(0);
            $file = "test.txt";
            if(!unlink($file))
            {
                echo("Error deleting $file.");
            }
            else{
                echo("$file Deleted!");
            }
        ?>
    </body>
</html>