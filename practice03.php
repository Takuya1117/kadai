<?php
//kadai1
$name = "takuya";
if ($name == "takuya") {
  echo "私はtakuyaです" ;
}else {
  echo "takuyaではありません" ;  
}
echo "\n";
//kadai2
$total = 0;
for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";
//kadai3
$fruits = array("apple", "lemon", "banana","orange","muscat");
foreach($fruits as $fruit){
  echo "要素は" . $fruit;
}
  echo "\n";
  
  //kadai4
  /* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
echo "\n";
  }
}
  