<!DOCTYPE html>
<html>

<head>
    <title>php2_1</title>
</head>

<body>
    <?php
    $array = array(
    1 => array(
                1 => 1,
                2 => 2,
                3 => 3),
    2 => array(
                1 => 2,
                2 => 4,
                3 => 6),
    3 => array(
                1 => 3,
                2 => 6,
                3 => 9),
    );
    echo $array[1][1], $array[1][2], $array[1][3], "<br>";
    echo $array[2][1], $array[2][2], $array[2][3], "<br>";
    echo $array[3][1], $array[3][2], $array[3][3], "<br>";
    ?>
</body>

</html>