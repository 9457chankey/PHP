<?php
  
    //   $food = array('orange','banana','grapes','apple');
    //   sort($food);
    //   rsort($food);
    //   echo "<pre>";
    //   print_r($food);
    //   echo "</pre>";
    //   -------using associative array-----
    // $food = array(
    //     'd' => 'lemon',
    //     'a' => 'orange',
    //     'b'=> 'banana',
    //     'c'=> 'apple'
    // );
    // asort($food);
    // arsort($food);
    // ksort($food); /* sorting by keys*/
    // krsort($food); /* sorting by keys reverse*/
    // echo "<pre>";
    //   print_r($food);
    //   echo "</pre>";
    // $array1 = array('img12.png','img10.png','img2.png','img1.png');
    // natsort($array1);
    // $array1 = array('Img12.png','Img10.png','img2.png','img1.png');
    // natcasesort($array1); /* for case sensitive*/
    

    // echo '<pre>';
    // print_r($array1);
    // echo '</pre>';
    // ---------Array multisort------
    $food = array('orange','banana');
    $veggie = array('lemon','carrot');
    array_multisort($food , $veggie);
    echo '<pre>';
    print_r($food);
    echo '</pre>';

    echo '<pre>';
    print_r($veggie);
    echo '</pre>';


 ?>