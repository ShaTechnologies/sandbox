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
    $denomnator = 4;
    if($denomnator > 0){
        $result = $numerator / $denomnator;
        echo "Result: {$result}";
    }
    ?>
</body>
</html>