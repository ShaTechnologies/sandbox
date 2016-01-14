<!DOCTYPE html">
<html lang="en">
<head>
    <title>Continue</title>
</head>
<body>
    <?php
    for($count=0; $count<= 10; $count++){
        if($count == 5){
            continue;
        }
        echo  $count . ", ";
    }
    ?>

    <br>
    <?php
    for($count=0; $count<= 10; $count++){
        if($count % 2 == 0){
            continue;
        }
        echo  $count . ", ";
    }
    ?>
    <br>
    <?php
    /*
     * if we put incrementation at the end of the while loop
     * when it execute continue part it never reach.
     * onward that point it began to loop infinitly
     */
    $count = 0;
    while($count <=10){
        if($count == 5){
            $count++;
            continue;
        }
        echo  $count . ", ";
        $count++;
    }
    ?>
    <br>
    <?php
    for($count=0; $count<= 10; $count++){

    }
    ?>
</body>
</html>