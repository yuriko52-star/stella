<?php
$people = array("Taro" ,"Jiro", "Saburo");

var_dump($people);
echo "<br>";
echo $people[2];
echo "<br>";
?>
<?php
$people =array(
    "person1" =>"Taro" ,
    "person2" => "Jiro",
    "person3" =>"Saburo"
);

foreach ($people as $personna =>$name) {
    print $personna . "は" .$name . "でーす！" ."<br>";
}
var_dump($people);
echo "<br>";
?>
<?php
$people = [
    'person1' =>'taro',
    'person2' => 'jirou',
];
echo $people['person2'];
echo "<br>";
?>
<?php
$people = [
    [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" =>29,
    "gender" =>"男性"
    ],
    ["last_name" => "鈴木",
    "first_name" => "パパイヤ",
    "age" =>52,
    "gender" =>"男性"
    ],
    ["last_name" => "佐藤",
    "first_name" => "ようこ",
    "age" =>30,
    "gender" =>"女性"
    ]
];
echo $people [1]["first_name"];
echo "<br>";
?>

<?php
// foreach文
$people = array('tarou', 'zirou', 'saburou');

foreach ($people as $person) {
    echo $person;
    echo "<br>";
}
?>

<?php
$people = [
    ['Taro', 25 , 'men'],
    ['Jiro', 20, 'men'],
    ['hanako', 16, 'women']
];

foreach ($people as $person) {
    echo $person[0] .'('. $person[1] . '歳' . $person[2] . ')' . '<br>'; 
}
