<?php
// function hello(){
//     echo " Hello chankey .<br>";
// }
// function hello1(){
//     echo " Hello Shivam";
// }
// hello();
// hello1();

// ---------------function With Parameters :----------
// function functionname(parameters1, parameters2){Statment}

// function hello($name){
//     echo "Hello $name. <br>";
// }
// hello("Shivam");
// if dont give the argument it will show error
// hello();


// ----passing Two parameter------
// function hello($fname , $lname){
//     echo " heloo $fname $lname .<br>";
// }
// hello("chankey","pal");
// hello("Pankaj","pal");
// --------sum Function----------
// function sum($a , $b){
//     echo $a +$b;

// }
// $one = 22.5;
// $two = 33;
// sum($one,$two);
// -----------------------Function with Return Value ------------
// ---way to write
// <---function fnname(parameters1 , parameters2){ statment
//  return value;}  $a = functionname(srgument1,argument2)
 
// function newfn($fname,$lname){
//     $v = "$fname,$lname";
//     return $v;


// }
// $name = newfn("pankaj","pal");
// echo "hello $name";
// -----wap to calculate the percentage-----
// function sum($math,$eng,$sc){
//     $s= $math + $eng + $sc;
//     return $s;

// }
// function percentage($st){
//      $per = $st / 3;
//      echo $per;
// }
// $total = sum(55,66,99);
// percentage($total);
// echo $total;

// -------Function BY Arguments---------
// passing arguments by value
// function first($num){
//     $num += 5;
//     // echo "$num";
    
// }
// // first();

// // // ----passsing argument by refrence
// function second(&$num){
//     $num += 9;

// }
// $number = 10;
// first($number);
// echo " original Value is $number<br>";
// second($number);

// echo "original value is $number<br>";
//  -------Variable Function ---------//
// $sayhello = function($name){
//     echo "hello $name";

// };
// $sayhello("Pankaj pal");

// ---------Recursive Function----------when the function is called inside the function--
// function display($number){
//     if($number <= 10){
//         echo "$number <br>";
//         display($number + 1);

//     }
// }
// display(5);

// ---wap to calculate factorial of a number---
// function fact($n){
//     if($n == 0){
//         return 1;

//     }else{
//         return ($n * fact($n -1));
    
//     }
// }
// echo fact(5);
// -----Global and Local Variable-----
$x = 19;
$y = 20;
function test(){
    global $x , $y;
    $x = $x + $y;
    
}
test();
echo  $x ;
 ?>