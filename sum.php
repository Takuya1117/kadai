<?php
//kadai1
function sum($max) {
 return $result* 2;
}
echo sum(10);
echo "\n";
echo "\n";

//kadai2
function add($a,$b){
return $a +$b;
}
echo add(3,7);
echo "\n";
echo "\n";

//kadai3
function number($arr){
    $result = 1;

    foreach($arr as $ar){
        $result *= $ar;
        //$result = $result * $ar;
    }
    return $result; 
}

echo number(array(1,3,5,7,9,));

//kadai4
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
    //どうしたらいいかわからない・・・・
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}

echo max_array(array(1,3,5,7,9,));
