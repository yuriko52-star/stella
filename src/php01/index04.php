<?php

$a =5;
if ($a=5) {
    echo "\$aは5です";
}
?>
<?php
$a = 7;
if($a===5) {
    echo "\$aは5です";
} else {
    echo "\$aは5以外です";
}
echo"<br>";
?>

<?php
$a =7;
if ($a===5) {
    echo "\$aは5です";
} else if ($a===7) {
    echo "\$aは7です";
} else {
    echo "\$aは5と7以外です";
}
echo "<br>";
?>
<?php
$people ="Saburo";

switch ($people) {
    case "Taro":
    echo "太郎です";
    break;
    case "Jiro";
    echo "次郎です";
    break;
    case "Saburo";
    echo "三郎です";
    break;
    
}
echo "<br>";
?>
<?php
$a=7;
$result =($a >6) ? "TRUE" : "FALSE";
echo $result;
echo "<br>";
?>