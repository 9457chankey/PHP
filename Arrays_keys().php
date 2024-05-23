<!-- arrays key function returns the keys from array  -->
<?php
$color = [
    "first" => 'red',
    "second" => "green",
    "third" => "blue",
    "fourth" => "yellow",
];
// $newarray = array_keys($color);
// $newarray = array_key_first($color);
// $newarray = array_key_last($color);
 $newarray = key_exists('second',$color);
// echo '<pre>';
// print_r($newarray);
// echo '</pre>';
if ($newarray) {
    echo "key exist";

}else{
    echo "key does not exist!";
}

?>