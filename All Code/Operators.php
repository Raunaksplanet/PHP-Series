<?php
    echo "Operators in PHP<br><br>";

    $var1 = 10; 
    $var2 = 20;
    $var3 = 2;
    echo "var1 = " . $var1 . "<br>";    
    echo "var2 = " . $var2 . "<br><br>";
    
    echo "There are 8 type of operators in PHP<br>";
    echo "1.Arithmetic Operators<br>";
    echo "2.Assignment Operators<br>";
    echo "3.Comparison Operators<br>";
    echo "4.Logical Operators<br>";
    echo "5.Increment & Decrement Operators<br>";
    echo "6.String Operators<br>";
    echo "7.Conditional(Ternary) Operators<br>";
    echo "8.Null Coalescing Operators<br><br>";
    
    echo "1.Arithematic Operator<br>1.1.Addition: + <br>";
    echo "10" . " + " . "20" . " = " . $var1 + $var2 . "<br>";

    echo "<br>1.2.Multiplication: + <br>";
    echo "10" . " * " . "20" . " = " . $var1 * $var2 . "<br>";

    echo "<br>1.3.Subtraction: - <br>";
    echo "10" . " - " . "20" . " = " . $var1 - $var2 . "<br>";

    echo "<br>1.4.Division: / <br>";
    echo "10" . " / " . "20" . " = " . $var1 / $var2 . "<br>";

    echo "<br>1.5.Modulus (Remainder): % <br>";
    echo "10" . " % " . "20" . " = " . $var1 % $var2 . "<br>";

    echo "<br>1.6.Exponentiation: ** <br>";
    echo "10" . " ** " . "2" . " = " . $var1 ** $var3 . "<br>";

    /*
    1. Arithmetic Operators:
    + (Addition)
    (Subtraction)
    * (Multiplication)
    / (Division)
    % (Modulus)
    ** (Exponentiation, available in PHP 5.6 and later)

2. Assignment Operators:
    = (Assignment)
    += (Addition assignment)
     (Subtraction assignment)
    *= (Multiplication assignment)
    /= (Division assignment)
    %= (Modulus assignment)

3. Comparison Operators:
    == (Equal)
    != or <> (Not equal)
    === (Identical)
    !== (Not identical)
    < (Less than)
    > (Greater than)
    <= (Less than or equal to)
    >= (Greater than or equal to)

4. Logical Operators:
    && or and (Logical AND)
    || or or (Logical OR)
    ! or not (Logical NOT)
    xor (Exclusive OR)

5. Increment/Decrement Operators:
    ++ (Increment)
    -- (Decrement)

6. String Operators:
    . (Concatenation)

7. Array Operators:
    + (Union)
    == (Equality)
    != (Inequality)

8. Ternary Operator:
    ? : (Conditional or ternary operator)

9. Null Coalescing Operator:
    ?? (Null coalescing operator, available in PHP 7.0 and later)

10. Type Operators:
        instanceof (Used to determine if an object is an instance of a particular class)

11. Bitwise Operators:
        & (Bitwise AND)
        | (Bitwise OR)
        ^ (Bitwise XOR)
        ~ (Bitwise NOT)
        << (Left shift)
        >> (Right shift)
    */
?>
