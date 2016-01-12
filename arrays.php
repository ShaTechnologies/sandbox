<!DOCTYPE html">
<html lang="en">
<head>
    <title>Arrays</title>
</head>
<body>
    <?php
    //$numbers = array(); // create empty array
    $number = array(4,8,15,16,23,42);
    echo $number[1];
    ?>
    <br>
    <?php $mixed = array(6, "fox", "dog", array("x","y","z")); ?>
    <?php echo $mixed[2]; ?> <br>

    <br>

    <?php echo $mixed[3][1]?>
    <?php $mixed[2] = "Cat";?>
    <?php $mixed[4] = "mouse";?>
    <?php $mixed[] = "Horse"?>

    <pre>
        <?php echo print_r($mixed)?>
    </pre>

</body>
</html>