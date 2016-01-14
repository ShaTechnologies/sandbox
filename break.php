<!DOCTYPE html">
<html lang="en">
<head>
    <title>Break</title>
</head>
<body>
    <?php
    for($count = 0; $count <= 10; $count++){
        if($count ==5){
            continue;
        }
        echo $count , ", ";
    }
    ?>
    <br/>

    <?php
    for($count = 0; $count <= 10; $count++) {
        if ($count == 5) {
            break;
        }
        echo $count, ", ";
    }
    ?>

    <br/>
    <?php
    for($i = 0; $i <= 5; $i++) {
        if($i % 2 == 0){
            continue;
        }
       for($k=0; $k<=5; $k++){
           if($k == 3){
               break;
           }
           echo $i ."-".$k ."<br/>";
       }
    }
    ?>
    <br/>
    <?php // break with arguments
    for($i = 0; $i <= 5; $i++) {
        if($i % 2 == 0){
            continue;
        }
        for($k=0; $k<=5; $k++){
            if($k == 3){
                break(2);
            }
            echo $i ."-".$k ."<br/>";
        }
    }
    ?>
</body>
</html>