<?php
$a = 4;
$b = 7;
if($a>$b){
    echo "yes a is greater";
}
echo "not greater";
?>
<?php
$a = 4;
$b = 7;
if($a=$b){
    echo "yes ";
    echo "<br>";
}
echo "not ";
?>
<!-- Ternary Operator -->
<?php
$x = 21;
$z = ($x > 19) ? "Greater" : "Smaller";
echo $z ;
?>