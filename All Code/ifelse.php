<?php
    // Control Flow Statement
    // 1.1 Conditional Statement
    $var1 = 18;
    $var2 = 20;


    echo "var1 = 18" . "<br>". "var2 = 20" . "<br><br>";
    

    if($var1 > $var2){
        echo "var1" . " is larger";
    }
    else{
        echo "var2" . " is larger";
    }

    print "<br><br><br><br>";

    $var3 = 20;
    $var4 = 20;

    echo "var3 = 20" . "<br>". "var4 = 20" . "<br><br>";

    if($var3 > $var4){
        echo "var3" . " is larger";
    }
    else if($var3 < $var4){
        echo "var4" . " is larger";
    }
    else{
        printf( "Both are Equal");
    }
?>