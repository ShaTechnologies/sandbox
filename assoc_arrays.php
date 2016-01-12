<!DOCTYPE html">
<html lang="en">
<head>
    <title>Associative Arrays</title>
</head>
<body>
    <?php $assoc = array("first_name" => "Shavindra", "last_name" => "Manathunga");?>
    <?php echo $assoc["first_name"]?> <br>
    <?php echo $assoc["first_name"] . " " .$assoc["last_name"]?><br>


    <?php $assoc["first_name"] = "Jinadasa"?>
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]?> <br>

</body>
</html>