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