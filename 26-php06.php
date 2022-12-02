<?php

// 1
function double($number1) {
    $number1 *= 2;
    return $number1;
}
echo double(100)."\n";


//2
function add($a, $b) {
    return $a + $b;
}
echo add(100, 99)."\n";


//3
function math($arr) {
    $total = 1;
    for ($i = 0; $i < count($arr); $i++) {
        $total *= $arr[$i];
    }
    return $total;
}
$number3 = array(1,3,5,7,9);
echo math($number3)."\n";


//4
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if ($a > $max_number) {
        $max_number = $a;
    }
  }

  return $max_number;
}
$number4 = array(10,300,55,70,90);
echo max_array($number4)."\n";


//5
//strip_tags
$text = '<p>test</p><a href="#">text</a>';
echo strip_tags($text)."\n";

//array_push
$fruits = array("melon", "banana");
array_push($fruits, "peach", "apple");
print_r($fruits);

//array_merge
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result5 = array_merge($array1, $array2);
print_r($result5);

//mktime
echo mktime(0, 0, 0, 11, 25, 2022)."\n";
//date,time
echo date("Y/m/d H:i:s", time())."\n";