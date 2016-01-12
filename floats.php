<!DOCTYPE html">
<html lang="en">
<head>
    <title>Floats</title>
</head>
<body>
    <?php echo $float = 3.15; ?> <br>
    <?php echo $float + 7; ?> <br>
    <?php echo 4/3?><br>
    <br>

    Round: <?php echo round($float, 1);?> <br>
    Ceiling: <?php echo ceil($float);?> <br>
    Floor: <?php echo floor($float);?> <br>

    <br>

    <?php $integer = 3;?>
    <?php echo "is {$integer} integer?" . is_int($integer);?> <br>
    <?php echo "is {$float} integer? " . is_int($float); ?><br>

    <br>
    <?php echo "is {$integer} float?" . is_float($integer);?> <br>
    <?php echo "is {$float} float? " . is_float($float); ?><br>

    <br>
    <?php echo "is {$integer} numeric?" . is_numeric($integer);?> <br>
    <?php echo "is {$float} numeric? " . is_numeric($float); ?><br>
</body>
</html>