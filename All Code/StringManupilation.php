<?php

    //String manupilation

    //1.String Concatenation
    $str1 = "Hello, ";
    $str2 = "World!";
    echo $str1 . $str2 . "<br><br>"; 

    //2.String Length
    $str = "Hello, World!";
    echo "Hello, World!" . "<br><br>";
    echo "String Length is " . strlen($str). "<br><br>";

    //3.Substring
    $str = "Hello, World!";
    $substring = substr($str, 0, 5); // Extract the first 5 characters
    echo $substring. "<br><br>"; // Output: Hello

    
    //4.String Searching:
    $str = "Hello, World!";
    $pos = strpos($str, "World");
    if ($pos !== false) {
        echo "Found 'World' at position $pos". "<br><br>"; // Output: Found 'World' at position 7
    } else {
        echo "Not found". "<br><br>";
    }

    //5.String Replacement:
    $str = "Hello, World!";
    $newStr = str_replace("World", "Raunak", $str);
    echo $newStr. "<br><br>"; // Output: Hello, PHP!


    //6.String Case Manipulation:
    $str = "Hello, World!";
    $lower = strtolower($str); // Convert to lowercase
    $upper = strtoupper($str); // Convert to uppercase
    $ucFirst = ucfirst($str); // Capitalize the first letter
    echo $lower . "<br>" . $upper . "<br>" . $ucFirst . "<br><br>";


    //7.Trimming and Whitespace:
    $str = "   Trim me   ";
    $trimmed = trim($str);
    echo "Original: '$str'\nTrimmed: '$trimmed'" . "<br><br>";

    //8.String Splitting:
    $str = "Apple, Banana, Cherry";
    $fruits = explode(", ", $str);
    print_r($fruits). "<br><br>"; 


    //9.Joining Array Elements into a String:
    $fruits = array("Apple", "Banana", "Cherry");
    $str = implode(", ", $fruits);
    echo $str. "<br><br>"; // Output: Apple, Banana, Cherry

    
    //10.String Formatting:
    $name = "John";
    $age = 30;
    printf("Name: %s, Age: %d", $name, $age);
    echo"<br><br>";

    //11.Word Count:
    $name = "raunak gupta is good boy";
    echo str_word_count($name)."<br><br>";

    //12.String Reverse:
    $name = "raunak gupta is good boy";
    echo strrev($name)."<br><br>";

    //13.String Repeat:
    $name = "raunak gupta is good boy, ";
    echo str_repeat($name,2)."<br><br>";

    //14.String Right Trim:
    $name = "    raunak gupta is good boy,      ";
    echo rtrim($name)."<br><br>";

    //15.String Left Trim:
    $name = "         raunak gupta is good boy, ";
    echo ltrim($name,2)."<br><br>";
    
?>
