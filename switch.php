<!DOCTYPE html">
<html lang="en">
<head>
    <title>Switch</title>
</head>
<body>
    <?php
        $a = 0;

        switch($a){
            case 0:
                echo "a equal to 0<br/>";
                break;
            case 1:
                echo "a equal to 1<br/>";
                break;
            case 2:
                echo "a equal to 2<br/>";
                break;
            case 3:
                echo "a equal to 3<br/>";
                break;
        }
    ?>

    <?php
    // ChineseZodiac
    // whitespace doesn't matter
    // Colons, semicolons and breaks do;
    $year = 2013;
    switch(($year - 4) % 12){
        case  0: $zodiac = 'Rat';    break;
        case  1: $zodiac = 'Ox';     break;
        case  2: $zodiac = 'Tiger';  break;
        case  3: $zodiac = 'Rabbit'; break;
        case  4: $zodiac = 'Dragon'; break;
        case  5: $zodiac = 'Snake';  break;
        case  6: $zodiac = 'Horse';  break;
        case  7: $zodiac = 'Goat';   break;
        case  8: $zodiac = 'Monkey'; break;
        case  9: $zodiac = 'Rooster';break;
        case 10: $zodiac = 'Dog';    break;
        case 11: $zodiac = 'Pig';    break;
    }
    echo "{$year} is the year of {$zodiac}";
    ?>
    <br>
    <?php
    $user_type = 'customer';
    switch($user_type){
        case 'student':
            echo "Welcome!";
            break;
        case 'press':
            echo 'Greetings!';
            break;
        case 'customer':
            echo "Hello";
            break;
    }
    ?>
</body>
</html>