<!DOCTYPE html">
<html lang="en">
<head>
    <title>Logical</title>
</head>
<body>
    <?php
        $a = 4;
        $b = 3;
        if($a > $b){
            echo "a is lager than b";
        }elseif($a < $b){
            echo "a is smaller than b";
        }else{
            echo "a is equal to b";
        }
    ?>

    <br/>

    <?php //Only welcome new users
    $new_user = true;
    if($new_user){
        echo "<h1>Welcome</h1>";
        echo "<p>We are glad you decide to join us</p>";
    }
    ?>
    <br>
    <?php
    $numerator = 20;
    $denominator = 4;
    if($denominator > 0){
        $result = $numerator / $denominator;
        echo "Result: {$result}";
    }
    ?>
</body>
</html>