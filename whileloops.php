<!DOCTYPE html">
<html lang="en">
<head>
    <title>Loops: While</title>
</head>
<body>
    <?php
    $count = 0;
    while($count <= 10){
        echo $count . ", ";
        $count++; // increment by 1
    }
    echo "<br/>";
    echo "Count: {$count}";
    ?>
</body>
</html>