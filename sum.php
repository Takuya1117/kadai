<?php
//kadai1
function sum($max) {
 return $result* 2;
}
echo sum(10);

//kadai2
function add($a,$b){
return $a +$b;
}
echo plus(3,7);

//kadai3
function number($arr){
  $result = 0;

    for($i = 1; $i <= count($arr); $i++ );
        $result *= $arr[$i];
return $result;  
}
echo number(array(1,3,5,7,9,));

//kadai4
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }
