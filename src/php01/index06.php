<?php

{
    echo "Hello World";
    return;
}
outputHello();
?>
<?php
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2);
?>




<?php
function exam ($score1 , $score2 , $score3)
{
    $total = $score1 + $score2 + $score3;
    if($total>210) {
        echo  "合計点は" . $total ."点なので合格です。";
    } else {
        echo "合計点は" . $total ."点なので不合格です。";
    }
}
echo (exam(80,60,90));
?>
<?php
function getSquareArea($base , $height)
{
    return $base * $height;
}
function getTriangleArea($base , $height)
{
    return $base * $height /2;
}
function getTrapezoidArea ($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height /2;
}
echo getSquareArea(5,5). "\n";
echo getTriangleArea (7,8). "\n";
echo getTrapezoidArea(4 ,5,4). "\n";
echo "<br>";
?>

<?php

function text ($number1 ,$number2) 
{
    return $number1  +$number2;
}
echo (text(2,15)) . "<br>";

?>

<?php
function addNumber($a , $b)
{
    return $a + $b;
}
echo (addNumber(2, 100));
?>



<?php

function  greeting ($name)
{
    return $name . '!';
}
echo  (greeting('yuriko'));
?>