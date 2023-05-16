<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if(isset($_POST['btnAdd'])){
        $fno = $_POST ['fno'];
        $sno = $_POST ['sno'];
        $sum = $fno + $sno;

        echo "The sum of two number =". $sum;

    }

    ?>
</body>
</html>