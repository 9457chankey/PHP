<!-- intersect means finding common in two things -->
<?php
function compare($a,$b){
    if ($a === $b){
        return 0;

    }
    return($a > $b)? 1 : -1;
}
function comparevalue($a,$b){
    if ($a === $b){
        return 0;

    }
    return($a > $b)? 1 : -1;
}
$a = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"black");
$b = array("a"=>"red","d"=>"black");
// $newarray = array_intersect($a,$b);
// $newarray = array_intersect_key($a,$b);
// $newarray = array_intersect_assoc($a,$b);
$newarray = array_uintersect_uassoc($a,$b,"compare",'comparevalue');

echo "<pre>";
print_r($newarray);
echo '</pre>';
?>
