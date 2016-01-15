<!DOCTYPE html">
<html lang="en">
<head>
    <title>Function: Default Arguments Values</title>
</head>
<body>
    <?php
    function paint($room = "office", $color = "red"){
        return "The color of the {$room} is {$color}. <br/>";
    }
    echo paint();
    echo paint("bedroom","blue");
    echo paint("bedroom",null);
    echo paint("bedroom");
    ?>
</body>
</html>