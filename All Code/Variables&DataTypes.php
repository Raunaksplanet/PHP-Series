<?php
    // Data types in PHP.
    // There are 7 types of data types available in PHP.
    /*
    1.String
    2.Integar
    3.float 
    4.Boolean
    5.object
    6.Array
    7.Null
    */
    // We can use var_dump() function to get details about variable.


    echo"1. String:<br>";
    $str = "raunak";
    $str2 = ' gupta';
    echo $str,$str2;

    echo"<br><br>2. Integar:<br>";
    $num = 55;
    $num2 = -25;
    echo $num,"<br>",$num2;
    
    echo"<br><br>3. Float:<br>";
    $float = 12.12;
    $float2 = -25.21;
    echo $float,"<br>",$float2;

    echo"<br><br>4. Boolean:<br>";
    $boolt = true;
    $boolf = false;
    echo $boolt,"<br>",var_dump($boolf);


    echo"<br><br>5. Array:<br>";
    $ArrayNum = array(1,2,3,4,5,6);
    $ArrayString = array("raunak","gupta","is","good","boy");
    
    echo $ArrayNum[0],"<br>",$ArrayString[0];

    echo"<br><br>6. Null:<br>";
    $nullVar = null;
    echo var_dump($nullVar);

    echo"<br><br>7. Object:<br>";
    class Car {
        public $make, $model;
    }
    
    $myCar = new Car();
    $myCar->make = "Toyota";
    $myCar->model = "Camry";
    
    echo $myCar->make,"<br>",$myCar->model; 
?>
