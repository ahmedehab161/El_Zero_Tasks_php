<!-- Task 1 start -->
<?php
    echo (int)15.2 + (int)14.7 + (int)(10.5 + 10.5); // 50
    echo gettype((int)15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer

    // Not from the task that only for the horizontal line between every task
echo "<hr>";
?>
<!-- Task 1 end -->
<!-- ----------------------------------------------------------------------------------------------------------------- -->
<!-- Task 2 start -->
<?php

// Method One
echo "Method One :" . gettype(100) . "<br>";
// Method Two
echo "Method two :" . var_dump(100) . "<br>";
// Method Three => Optional
echo "Method three :" . is_int(100) . "<br>"; # this prints 1 which is boolean result thats mean yes it is (int) number 


    // Not from the task that only for the horizontal line between every task
echo "<hr>";
?>
<!-- Task 2 end -->
<!-- ----------------------------------------------------------------------------------------------------------------- -->
<!-- Task 3 start -->
<?php
    echo "Hello \"Elzero\"  \\\\ \"\"\" We Love \"$\$PHP\"";

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"

 // Not from the task that only for the horizontal line between every task
echo "<hr>";
?>
<!-- Task 3 end -->
<!-- ----------------------------------------------------------------------------------------------------------------- -->
<!-- Task 4 start -->
<?php
    echo nl2br("We\nLove\nElzero\nWeb\nSchool");

// Needed Output
/*
We
Love
Elzero
Web
School
*/

// Not from the task that only for the horizontal line between every task
echo "<hr>";
?>
<!-- Task 4 end -->
<!-- ----------------------------------------------------------------------------------------------------------------- -->
<!-- Task 5 Start -->
<?php
echo <<< 'Now'
    Hello "'Elzero'"
    We Love $Programming$
    Languages Specially "PHP"
Now;
// Needed Output
/*
    Hello "'Elzero'"
    We Love $Programming$
    Languages Specially "PHP"
*/

// Not from the task that only for the horizontal line between every task
echo "<hr>";
?>
<!-- Task 5 End -->
<!-- ----------------------------------------------------------------------------------------------------------------- -->
<!-- Task 6 Start -->
<?php
$something = "Programming";

echo <<<"Here"
Hello \PHP\
We Love $something
Here;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
// Hello \PHP\ We Love Programming


// Not from the task that only for the horizontal line between every task
echo "<hr>";
?>
<!-- Task 6 End -->
<!-- ----------------------------------------------------------------------------------------------------------------- -->
<!-- Task 7 Start -->
<?php
    echo is_string("Hello PHP");
    echo '<br>';
    echo gettype((int)"Hello PHP");

// Needed Output
/*
1
integer
*/

// Not from the task that only for the horizontal line between every task
echo "<hr>";
?>
<!-- Task 7 End -->
<!-- ----------------------------------------------------------------------------------------------------------------- -->
<!-- Task 8 Start -->
<?php

?>
<!-- Task 8 End -->
<!-- ----------------------------------------------------------------------------------------------------------------- -->