<?php
/*
    3 types of array:

    1.Index Array.
    2.Associative Array.
    3.Multidimensional Array.
*/

    //1.Index Array.
    print("1.Index Array<br>");

    $arr1 = array(1,2,3,4,5);
    $arr2 = [6,7,8,9,10];

    for($i = 0 ; $i < 5; $i++){
        echo $arr1[$i] . "  ";
        
    }

    for($i = 0 ; $i < 5; $i++){
        echo $arr2[$i] . "  ";
        
    }

    echo "<br><br>";
    //2.Associative Array.
    print("2.Associative Array<br>");
    $arr3 = array("one" => "rau", 
                 "two" => "nak",
                 "three" => "gup",
                 "four" => "ta");


    $arr4 = ["name" => " Raunak ",
            "Surname" => " Gupta ", 
            "age" => 18];

    foreach($arr3 as $count){
        echo $count . "<br>";
    }

    foreach($arr4 as $key => $value){
        echo $key . " = " . $value ."<br>";
    }

    echo "<br><br>";
    //3.Multidimensional Array.
    print("3.Multidimensional Array.<br>");
    $arr = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];

        for($i = 0 ; $i < 3; $i++){
            for($j = 0 ; $j < 3; $j++){
                echo $arr[$i][$j] . "  ";
            }
            echo "<br>";
        }
?>
