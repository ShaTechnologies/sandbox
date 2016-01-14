<!DOCTYPE html">
<html lang="en">
<head>
    <title>Pointers</title>
</head>
<body>
    <?php
    $ages = array(4,8,15,16,23,42);
    //current: current pointer value
    echo "1: " . current($ages) . "<br/>";

    // next: move the pointer forward
    // similar to using continue inside a loop
    next($ages);
    echo "2: " .current($ages) . "<br/>";

    next($ages);
    echo "3: " .current($ages) . "<br/>";

    prev($ages); //move pointer backward
    echo "2: " .current($ages) . "<br/>";

    reset($ages); //move pointer to the start of the array
    echo "1: " .current($ages) . "<br/>";

    end($ages); // move the pointer to the end of the array
    echo "6: " .current($ages) . "<br/>"
    ?>

    <br/>

    <?php
    reset($ages);
    // while loop that moves the array pointer
    // at the end of the array it assign null to the $age
    // null is considered as false
    while($age = current($ages)){
        echo $age . ", ";
        next($ages);
    }
    ?>
</body>
</html>