<!-- Logical && (And)Operator (when both condition are true then statment will print -->
<?php
$a = 40;
if ($a >=18 && $a <= 41){
    echo "print yes .<br>";

}
?>
<!-- Logical(And)Operator when both are true-->
<?php
$a = 40;
if ($a >=18 and $a <= 38){
    echo "print yes .<br>";

}
echo "no . <br>";
?>
<!-- Logical || (or)Operator in this one condition must be true-->
<?php
$a = 40;
if ($a >=18 || $a <= 41){
    echo "print yes .<br>";

}
echo "no . <br>";
?>
<!-- Logical xor (or)when both condition are false or true it will reult fasle
 if one condition is true it willl result true -->
<?php
$a = 40;
if ($a >=18 || $a <= 41){
    echo "print yes .<br>";

}
echo "no . <br>";
?>
<!-- Logical ! (not) it will give always reverse result->
<?php
$a = 40;
if (!($a >=18)){
    echo "print yes .<br>";

}
echo "no . <br>";
?>
