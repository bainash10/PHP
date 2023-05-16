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
/*indexed array  : yaha 0 1 2 3 hunxa but in associative associative character use garxa*/
    $index = array();

    $index[0] = "sumina Awa";
    $index[1] = "35";
    $index[2] = "female";

    $index1 = array("ram sth","45","male");

    echo "<pre>";           /*to get the value of the $index in formatted*/
    Print_r($index);      /* Print_r functio is used to print the content of an array*/

    echo "<pre>";
    Print_r($index1);
    Echo "</pre>";
    var_dump($index);

    echo"<hr>";
/*associative array*/

    $KhEC_Circle = array(
        "KhEC" => "Khwopa engg College",
        "KhCE" => "Khwopa college of Engg",
        "KC" => "Khwopa college",
    );

    echo "<pre>";
    print_r($KhEC_Circle);
    echo $KhEC_Circle["KhEC"];



    $x = array("a","apple","b","ball");         /*indexed*/
    var_dump($x);


    $x = array("a"=>"apple","b"=>"ball");               /*associative*/
    var_dump($x);

    echo"<hr>";

/*key value pair showing*/
    $arr = array(
        0 => "joe",
        1 =>"john",
        2 => "jack"
    );
    echo $arr[1];


echo "<br>";




echo"<hr>";

    /*multdimensional arry*/

    $record = array(
        array('fname' => "joe",
        'lname' => "sth"),

        array('fname' => "john",
        'lname' => "smith"),

        array('fname' => "joack",
        'lname' => "black"),
    );

    echo $record[1]['lname'];

    echo "<br>";
    echo $record[1][1];  /*mistake coz associative vako le lname ko satta 1 lekhna milena i.e index vitra associative xa esma*/


    /*yo chahi associative array ko vitra indexwed array*/

    $student = array ("name" => array ("name1" => "aaa",
                                        "name2" => "bbb",
                                        "name3" => "ccc",),
                    "gender" => array("female" , "female", "male","male")
);

    echo "<pre>";
    Print_r($student);


?>
</body>
</html>