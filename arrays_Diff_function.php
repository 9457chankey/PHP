<?php

// $a = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $b = array("a"=> "red","f"=>"green","d"=>"black");
// $newarray = array_diff($a , $b);
// $newarray = array_diff_key($a , $b);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// function compare($a,$b){
//     if($a === $b){
//     return 0;

// }
// return ($a>$b)? 1 : -1;
// }
// function comparevalue($a,$b){
//     if($a === $b){
//     return 0;

// }
// return ($a>$b)? 1 : -1;
// }

// $a = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $b = array("a"=> "red","f"=>"green","d"=>"black");
// $newarray = array_udiff_uassoc($a , $b,'compare','comparevalue');

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// $color = array("a"=>"red","b"=>"green","c"=>"red","d"=>"yellow");
// $newarray = array_values($color);
// $newarray = array_unique($color);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// -----------Array_column & array_chunk--------
// $array = array(
//     array(
//         'id'=> '2211',
//         'fname'=>'pankaj',
//         'lname'=>'pal',
//     ),
//     array(
//          'id'=> '3311',
//     'fname'=>'abhishek',
//     'lname'=>'pal',

//     ),
//     array(
//         'id'=> '1111',
//         'fname'=>'vikas',
//         'lname'=>'pal',
//     )
//     );
//    $newarray =  array_column($array,'lname','fname' );
//    echo '<pre>';
//    print_r($newarray);
//    echo '</pre>'
// -------Array_chunk------
// $cars = ['marutisuzuki','BMW','Toyota','honda','merceds','hyundai'];
// $newarray = array_chunk($cars,'2');

// echo '<pre>';
// print_r($newarray);
// echo '</pre>';
// --------array_flip $ Array_change_key_case
// $a = array(
//     'bill'=>'10',
//     'joe'=>'20',
//     'peter'=>'30'
// );
// $newarray = array_flip($a);
// $newarray = array_change_key_case($a,CASE_UPPER);
// echo '<pre>';

// print_r($newarray);
// echo '/pre';
// -----Array_sum$Array_product------
// $a = array(2,4,5,6,7);
// echo 'sum = '. array_sum($a);
// echo 'product= '. array_product($a);
// Array_rand(this will print random values) & shuffle
// $color = array('red','blue','green','yello');
// $newarray = array_rand($color,2);

// echo '<pre>';
// print_r($newarray);
// echo '</pre>';
// echo $color[$newarray[0]];
// echo $color[$newarray[1]];
// $color = array('red','blue','green','yello');
// shuffle($color);
// echo '<pre>';
// print_r($color);
// echo '</pre>';
// $a = array('a','b','c','d');
// $newarray = array_fill(-2, 6, 'testing');
// echo '<pre>';
// print_r($newarray);
// echo '</pre>';
// -------------------Array_walk&Array_walk_recursive--------
// $fruit = array(
//     'a'=>'orange',
//     'b'=>'lemon',
//     'c'=>'banana',
//     'd'=>'apple'
// );
// array_walk($fruit,'myfunction','is key of');

// function myfunction($value, $key ,$param){
//     echo "$key $param $value <br> ";

// }
// ----recursive----
// $veggie = array('1'=> 'carrot','2'=>'tomatoes');
// $fruit = array(
//     $veggie,
//         'a'=>'orange',
//         'b'=>'lemon',
//         'c'=>'banana',
//         'd'=>'apple'
//     );
// array_walk_recursive($fruit,'myfunction','is key of');

// function myfunction($value, $key ,$param){
//     echo "$key $param $value <br> ";

// }
// -------------------Array_map function--------------

// function square($n){
//     return $n * $n;
// }

// $a =[1,2,3,4,5,6];
// $newarray = array_map('square',$a);
// echo '<pre>';
// print_r($newarray);
// echo '</pre>';
// function   square($n, $m){
//     return [$n => $m];
// }

// $a =[1,2,3,4];
// $b =['lemon','orange','banana','pineapple'];
// // $newarray = array_map('square',$a,$b);
// $newarray = array_map(null,$a,$b);
// echo '<pre>';
// print_r($newarray);
// echo '</pre>';
// function square($n){
//     return strtoupper($n);
// }
// $a = array('one'=>'Apple','two'=>'banana','three'=>"orange");
// $newarray = array_map('square',$a);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// -------------------Array_reduce-----------
function myfunction($n , $m){
    return $n . "-" . $m;
}
$a = ['orange','banana','apple'];
$newarray = array_reduce($a,'myfunction','lemon');
echo "<pre>";
print_r($newarray);
echo "</pre>";




?>