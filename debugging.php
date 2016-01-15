<!DOCTYPE html">
<html lang="en">
<head>
    <title>Debugging</title>
</head>
<body>
    <?php
    $number = 99;
    $string = "Bug?";
    $array = array(1 => "Homepage", 2 => "About Us", 3 => "Service");

    var_dump($number);
    var_dump($string);
    var_dump($array);
    ?>
    <br/>

    <pre>
    <?php
    //print_r(get_defined_vars());
    ?>
    </pre>

    <br/>

    <?php
        var_dump(debug_backtrace());
    ?>

</body>
</html>