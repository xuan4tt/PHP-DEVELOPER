<?php
//Bài 1
$n=3;
$arr = [11, 2, 8, 10, 5, 99, 1, 8, 9];
// 036
// 147
// 258
$arr2 = [];
for($i = 0; $i < $n; $i++){
    array_push($arr2, $arr[$i]);
    
    for($x = $i+$n ; $x < count($arr); $x = $x + $n ){
        array_push($arr2, $arr[$x]);
    }
    
}
var_dump($arr2);

//Bài 2
$array = [0 ,100 ,-4, 8, 143,5, 99,100];

$max = 0;
$max2 = 0;
$key1 = 0;
foreach($array as $key => $item){
    if ($max == null){
        $max = $item;
       
    }
    else {
        if ($item > $max){
            $max = $item;
            $key1 = $key;
        }
    }
    
}
unset($array[$key1]);
foreach($array as $key => $item){
    if ($max2 == null){
        $max2 = $item;
       
    }
    else {
        if ($item > $max2){
            $max2 = $item;
            
        }
    }
    
}
$tong = $max1 + $max2;
var_dump($tong);

//Bài 3
// $array3 = [1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15];
// $arr1 = [];
//     foreach($array3 as $value){
//         foreach($array3 as $value2){
//             $arr2 = [];
//             $hieu = $value - $value2;
//             var_dump($hieu);
//             if($hieu = 1 || $hieu = -1){
//                 array_push($arr2, $value);
//                 array_push($arr2, $value2);
//                $check = array_search($value2, $arr2);
//                var_dump($check);
//                if($check !== false){
//                    array_push($arr1, [$value, $value2]);
                   
//                }
//             };
            
//         }
//     }
// var_dump($arr1);

