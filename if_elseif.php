<!-- The if...elseif...else statement executes different codes
 for more than two conditions. -->
<?php
$per = 20;
if ($per >=80 && $per <= 100){
    echo "you are in merit";
}
elseif($per >=60 && $per < 80){
    echo "your Division is 1st";
}
elseif($per >=45 && $per < 60){
    echo "your Division is 2nd";
}
elseif($per >=33 && $per < 45){
    echo "your Division is 3rd";
}
elseif($per < 33){
    echo "you failed";
}
else{
    echo "write accurate percentage";

}
?>