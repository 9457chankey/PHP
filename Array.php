<?php
// $colors = array("red","blue","white","Yellow");
// // echo $colors[2]."<br>";
// // echo $colors[1]."<br>";
// // echo $colors[0]."<br>";
// // ----Using for loop in arrays--
// for ($i=0; $i < 4; $i++) { 
//     echo $colors[$i] . "<br>";
// }
//-------- Associative Array----- the array which is in key value form
// $age = [
//     "bill" => 25,
//     "steve" => 28,
//     "elon"  => 22,
// ];
// echo "<pre>";
// print_r($age);
// // var_dump($age);
// echo "</pre>";
// echo $age["bill"] . "<br>";
// echo $age["steve"] . "<br>";
// echo $age["elon"]. "<br>";
// -----ForEach Loop(basicly used for arrays)
// $age = [
//     "bill" => 22,
//     "steve" => 45,
//     "elon" => 99,
// ];
// echo "<ul>";
// foreach ($age as $key => $value) {
//     echo "<li>$key = $value</li>";
//     echo "</ul>";
// }
// $emp = [
//     [1,"krishan","manager",5000],
//     [2,"krish","salesman",5000],
//     [3,"shan","computer operator",5000],
//     [4,"ishan","Driver",5000],

// ];
// echo "<table border= '2px' cellpadding='5px' cellspacing='0px'>" ;
// echo "<tr>
// <th>Emp.id</th>
// <th>Emp name</th>
// <th>Designation</th>
// <th>Salary</th>
// </tr>";
// foreach($emp as $v1){
//     echo "<tr>";
//     foreach($v1 as $v2){
//         echo "<td> $v2 </td> " ;
    
    
//     }
// }

// echo "</tr>";
// echo "</table>";
// $marks = [
//     "krishana" => [
//             "physic" => 85,
//             "math"=>89,
//             "chemistry"=>45,
//     ],
//     "pankaj" => [
//         "physic" => 88,
//         "math"=>89,
//         "chemistry"=>78,
// ],
// "Shivam" => [
//     "physic" => 85,
//     "math"=>90,
//     "chemistry"=>34,
// ],
// ];
// echo "<table border = '2px' cellpadding = '3px'>";
// foreach ($marks as $key => $v1) {
//     echo "<tr>

//          <td> $key</td>";
//          foreach ($v1 as $v2) {
//             echo "<td> $v2 </td> ";
//          } 
//          echo  "<br>"; 
//          echo "</tr>";
// }

// echo "</table>";
// echo "<pre>";
// print_r($marks);
// echo "</pre>";
// -----------------Array Count adn sizeof function-------------
// $food = array('orange','appler','banana');
// echo count($food);
// -----multidmnsl array--
// $food1 = array(
//     'fruits' => array('orange','green','red'),
//     'veggie' => array('carrot','collard','pea')
// );
// echo sizeof($food1);
// // --to know all values of array u can use--
// echo count($food1,1);
// echo count($food1['veggie'],1);
// $food = array('orange','banana','orange','banana','grapes');
// $len = count($food);
// for ($i=0; $i < $len; $i++) { 
//     echo $food[$i] . "<br>";
// echo "<pre>";
// print_r(array_count_values($food));
// echo "</pre>";
// }
// ------In_array & array_search function
// $food = array('orange',"apple","grapes");
// if (in_array('banana',$food)) {
//     echo " find successfully";
// }else{
//     echo " cant find";
// }
// $a = array(array('p','h'),array('p','r'),'o');
// if (in_array(array('p','h'),$a,True)){
//     echo " find successfully";
// }else{
//     echo "not find";
// }
// -----using array search------
// $food = array('a' =>'orange','b'=>'banana','c'=>'grapes');
// echo array_search('orange',$food);
// ------array_replace()&array_replace_recursive()-----
// $fruit = ['orange','banana','apple','grapes'];
// $veggie = ['a'=>'carrot',1 =>'pea'];
// $color = ['red','green','blue'];
// $newArray =array_replace($fruit , $veggie);
// echo '<pre>';
// print_r($newArray);
// echo '</pre>';
// ---Array_replace_recursive-----
// $array1 = array('a'=>array("red"),'b'=>array("green"));
// $array2 = array('a'=>array("white"),'b'=>array("black"));
// $newArray = array_replace_recursive($array1,$array2);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";
// ----array_pop& array_push---
// $c = ['orange','banana','grapes'];
// // array_pop remove the last value of array
// array_pop($c);   
// echo '<pre>' ;
// print_r($c);
// echo '</pre>';
// $c = ['orange','banana','grapes'];
// // array_push() this will add value at the end of the array
// array_push($c ,'apple');
// echo "<pre>";
// print_r($c);
// echo "</pre>"
// ---array_shift $ array_unshift----
// $c = ['orange','banana','grapes'];
// // array_shift() this will remove value at starting of the array
// array_shift($c );
// echo "<pre>";
// print_r($c);
// echo "</pre>"
// ----------------------
// $c = ['orange','banana','grapes'];
// // array_unshift() this will add value at starting of the array
// array_unshift($c,"pineapple" );
// echo "<pre>";
// print_r($c);
// echo "</pre>"
// -----------array merge $ array combine--------
// $fruit = ['orange','banana','grapes'];
// $veggie = ['carrot','pea'];
// $newArray = array_merge($fruit,$veggie);
// echo '<pre>';
// print_r($newArray);
// echo '</pre>';
// ---- merging associative array---
// $fruit = ['a'=>'orange','b'=>'banana','c'=>'grapes'];
// $veggie = ['b'=>'carrot','e'=>'pea'];
// $newArray = array_merge($fruit,$veggie);
// echo '<pre>';
// print_r($newArray);
// echo '</pre>';
// ------------------array_merge_recursive---
// $fruit = ['a'=>'orange','b'=>'banana','c'=>'grapes'];
// $veggie = ['b'=>'carrot','e'=>'pea'];
// $newArray = array_merge_recursive($fruit,$veggie);
// echo '<pre>';
// print_r($newArray);
// echo '</pre>';
// -------------------
// $fruit = ['a'=>'orange','b'=>'banana','c'=>'grapes'];
// $veggie = ['b'=>['color'=> ['red','blue','green']],'e'=>'pea'];
// $newArray = array_merge_recursive($fruit,$veggie);
// echo '<pre>';
// print_r($newArray);
// echo '</pre>';
// -----------Array_combine-----------
// $name =array('raman','shyam','chankey');
// $age = array("30","26","20");
// $newArray =array_combine($name,$age);
// echo '<pre>';
// print_r($newArray);
// echo '</pre>';
// ---------Array slice--------
// $color = ['red','green','yellow','brown'];
// $newarray = array_slice($color,2,3);
// echo '<pre>';
// print_r($newarray);
// echo '</pre>';

// --------------------------
// $color = ['a'=>'red','b'=>'green','42'=>'yellow','d'=>'brown'];
// $newarray = array_slice($color,1,3,true);
// echo '<pre>';
// print_r($newarray);
// echo '</pre>';
// -----------------array_splice---------
// $color = ['red','yellow','blue','green'];
// array_splice($color,1,2);
// array_splice($color,1,-2);
// echo '<pre>';
// print_r($color);
// echo '</pre>';
// ---------------------------------------------------

// $color = ['red','green','yellow','brown','blue'];
// $fruits = ['orange','apple'];
// array_splice($color,2,2,$fruits);
// echo '<pre>';
// print_r($color);
// echo '</pre>';


?>