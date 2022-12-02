<?php

//1
$name = "Yutaka";
if ($name == "Yutaka") {
    echo "私はあなたの名前です"."\n";
} else {
    echo "あなたの名前ではありません"."\n";
}

//2
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total."\n";

//3
$fruits = array("apple","banana","melon","orange","peach");
foreach($fruits as $fruit) {
    echo $fruit."\n";
}

//4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i."\n";
  }
}