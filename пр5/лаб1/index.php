<!DOCTYPE html>
<html>

<head>
    <title>php2_lab1</title>
</head>

<body>
    <?php
    //массив имен
    $array_names = array("Иван Иванович", "Вася Пупкин", "Ольга Орехова");
    //массив событий
    $array_events = array(
        1 => "день открытых дверей",
        2 => "Фестиваль «Маркет у моря»",
        3 => "Спектакль «Нана»",
    );
    //день
    $day = 12;
    //константа
    define("SIGN", "С уважением, Василий.", True);
    $str = "Уважаемый(ая), $array_names[0]! <br>";
    $str .= "Приглашаем Вас на $array_events[1]. <br>";
    $str .= "Дата события: $day мая. <br>";
    //вывод
    echo ($str);
    echo (sign);
    ?>
</body>

</html>