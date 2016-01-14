<!DOCTYPE html">
<html lang="en">
<head>
    <title>Fucntions: Arguments</title>
</head>
<body>
    <?php
    function say_hello_to($word){
        echo "Hello {$word}!<br/>";
    }

    $name = "Shavindra Manathunga";
    say_hello_to($name);
    ?>

    <?php
    function better_hello($greeting, $target, $punct){
    echo $greeting . " " .$target . $punct. "<br/>";
    }

    better_hello("Hello",$name, "!");
    better_hello("Greeting", $name, "!!!");
    better_hello("Greeting", $name, null);
    ?>
</body>
</html>