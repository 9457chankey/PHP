<!-- The expression is evaluated once
The value of the expression is compared with the values of each case
If there is a match, the associated block of code is executed
The break keyword breaks out of the switch block
The default code block is executed if there is no match -->
<?php
$Weekdays = 2;
switch($Weekdays){
    case 1:
        echo "monday";
        break;
     case 2:
     echo "Tuesday";
     break;
     case 3:
       echo "wednesday";
     break;
     case 4:
         echo "Thursday";
     break;
     case 5:
         echo "friday";
      break;
      case 6:
        echo "Saturday";
        break;
        case 7:
            echo "sunday";
            break;
        default:
        echo "enter valid week  number"  ;  
}
?>
<?php
$age = 19;
switch($age){
    case($age <=16 && $age >=21):
    echo " u are eligible";
    break;
    case($age <=20 && $age >=16):
        echo " u are not  eligible";
        break;
          default:
          echo "enter valid age";
    
}
?>