<?php
$food = array('orange','banana','apple','grapes');

// echo "<b> current:</b>". current($food)."<br>";
// echo "<b>key :</b>".key($food). "<br>";
// echo "<b>key :</b>".pos($food). "<br>";

// next($food);
// echo "<b>key :</b>".current($food). "<br>";

// prev($food);
// echo "<b>key :</b>".current($food). "<br>";
// end($food);
 echo "<b>key :</b>".key($food). "<br>";

// each(each($food));
// echo "<b>key :</b>".current($food). "<br>";

echo "<pre>";
print_r(each($food));
echo "</pre>";


?>