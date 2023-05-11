<html>
    <head>
        <title>Reading a file using PHP</title>
    </head>
    <body>
        <?php
            $crn = $_GET["crn"];
            $batch = substr($crn, 0, 2);
            $roll = substr($crn, 4, 2);
            $dept_id = substr($crn, 3, 1);
            if($dept_id == 3)
            {
                $dept_name = "Computer Engineering";
            }
            else{
                $dept_name = "Other";
            }
        ?>
        CRN: <?= $crn; ?>! <br>
        Batch: <?= $batch; ?> ! <br>
        Roll No: <?= $roll; ?>! <br>
        Dept ID: <?= $dept_id; ?>! <br>
        Dept Name: <?= $dept_name; ?> <br>
    </body>
</html>