<!DOCTYPE html">
<html lang="en">
<head>
    <title>Functions: Multiple Returns</title>
</head>
<body>
    <?php
    function add_subt($val1, $val2){
        $add = $val1 + $val2;
        $sub = $val1 - $val2;

        return array($add,$sub);
    }

    $result_array =  add_subt(10,5);
    echo "Add: ". $result_array[0] . "<br/>";
    echo "Subtract: " . $result_array[1] . "<br/>";

    list($add_result, $sub_result) =  add_subt(20,7);
    echo "Add: ". $add_result . "<br/>";
    echo "Subtract: " . $sub_result . "<br/>";

    ?>
</body>
</html>