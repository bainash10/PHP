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

    function goGreet(){
        echo "Good morning";
    }

    goGreet();


    echo "<hr>";

/*call by value*/
    function findSum($a,$b){
        $sum = $a + $b;
        echo "Sum : $sum";
    }

    findSum(5,7);


/*call by reference*/

    function fxn1($num){
        $num +=5;
        echo "Fxn#1: Result after adding 5:" . $num. "<br>";
    }

    function fxn2(&$num){
        $num +=7;
        echo "Fxn#2: Result after adding 7:" . $num. "<br>";
        
    }

    $a=10;
    fxn1($a);
    echo"Original value is $a. <br><br>";

    fxn2($a);
    echo "Original value is <span style='color : #F00;'> $a </span>.";

echo "<hr>";




function findMax($a,$b,$c){
    $m=$a;
    if ($b > $m){$m = $b;}
    if ($c > $m){$m = $c;}
    return $m;
}


    $large = findMax (5,-9,22);
    echo "largest value : " .$large;

    echo "<br>largest value : " . findMax(99,1,0);

echo"<hr>";






function fxnTest($a = NULL, $b = "Nepal"){
    echo $a.$b. "<br>";
}

fxnTest("Namamste");
fxnTest("Hello","World!");

echo "<hr>";
    ?>
</body>
</html>