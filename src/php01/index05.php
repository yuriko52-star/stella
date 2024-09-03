<?php
for($i =0; $i < 4; $i++) {
    echo $i;
}
echo "<br>";
?>

<?php
for($i=1; $i<=5; $i++) {
    echo $i*2 . "<br>";
}
echo "<br>";
?>
<?php

$i = 0;
while ($i<3) {
    echo "i =" . $i."<br>";
    $i +=1;
}
echo "<br>";
?>
<?php
$count = 0;
while ($count < 20) {
    $count +=1;
    echo $count . "<br>";
}
echo "<br>";
?>
<?php
$i = 0;
while ($i<10) {
    if ($i ==5) {
        break;
    }
    echo $i;
    $i++;
}
echo "<br>";
?>
<?php
$i = 0;
while ($i <10) {
    if ($i ==5) {
       $i++;
        continue;
    }
     $i++;
     echo $i;
}
  
   
echo "<br>" ;
?>
<?php
$count =0;
while ($count <=100) {
    if($count==20) {
        break;
    }
    if ($count % 3==0) {
     $count++;
     continue;
    }
    echo $count . "<br>";
    $count++;
}
?>

<?php
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i < 5);
?>
<?php
$num = 0;
do {
    echo "num=" .$num ."<br>";
    $num +=1;
} while ($num<3);
?>

<?php

for($num = 1; $num <=50 ; $num++) {
    if ($num %3 ==0) {
    echo "Fizz" . "<br>";
 } elseif ($num %5 ==0) {
    echo  "Buzz" . "<br>";
 } elseif ($num %3 && $num %5 ==0) {
    echo "FizzBuzz". "<br>";
 } else {
    echo $num . "<br>";
 }
}
?>
<?php
for($i = 1 ; $i <6 ; $i++) {
    for($j =1 ; $j <6 ; $j++) {
        echo "○";
    }
    echo"<br>";
}