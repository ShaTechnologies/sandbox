<!DOCTYPE html">
<html lang="en">
<head>
    <title>Loops: foreach</title>
</head>
<body>

    <br> <?php
    $ages = array(4,8,15,16,23,42);

    foreach($ages as $age){
        echo "Age: {$age}<br/>";
    }
    ?>
    <?php //foreach using associative array
    $person = array(
        "first_name" => "Shavindra",
        "last_name" => "Manathunga",
        "address" => "445 Mihinthala Road",
        "city" => "Anuradhapura",
        "state" => "North Central",
        "zip_code" => "50000"
    );

    foreach($person as $attribute => $data){
        $att_nice = ucwords(str_replace("_"," ", $attribute));
        echo "{$att_nice}: {$data}<br/>";
    }
    ?>
    <br>
    <?php
    $price = array("Brand New Computer" => 2000,
            "1 month of Lynda.com" => 25,
            "Learning PHP" => null);

    foreach($price as $item => $price){
        echo "{$item}: ";
        if(is_int($price)){
            echo "$" . $price;
        }else{
            echo "priceless";
        }
        echo "<br/>";
    }
    ?>
</body>
</html>