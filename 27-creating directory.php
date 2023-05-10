<html>
    <head>
        <title>Reading a file using PHP</title>
    </head>
    <body>
        <?php
        // mkdir("testing");
        date_default_timezone_set('Asia/Kathmandu');
        $dir_name = $_SERVER['DOCUMENT_ROOT']."/phpfosp/Nischal".date('H-i-s');
        if(!file_exists($dir_name))
        {
            mkdir($dir_name,0777,true);
        }
        ?>
    </body>
</html>