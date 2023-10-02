<?php
/*
    Control Flow Statement
    1.2  Looping/Iterative Statements.

    There is 4 type of loops in PHP
    
    1. for
    2. While
    3. Do-While
        4. For-each
*/
    print "for loop <br>";
    for($i = 1; $i <= 10; $i++){
        echo $i . "<br>";
    }
    print "<br><br>";

    print "While loop <br>";
    $arr = array("raunak","gupta","is","here");
    $i = 0;
    while($i != 4){
        
        echo $arr[$i] . "<br>";
        $i++;
    }
    
    print "<br><br>";
    print "Do-While loop <br>";
    $j = 5;
    $f = 1;
    do{
        echo $f . " X " . $j. " = " . $j*$f ."<br>";
        $f++;
    }while($f != 11);

    print "<br><br>";
    print "foreach loop <br>";
    $j = array(1,2,3,4,5,6,7,8,9,10);

    foreach($j as $x){
        echo $x*2 . "<br>";
    }

?>