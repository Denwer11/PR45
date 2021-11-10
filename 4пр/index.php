<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <title>ПР4</title>
</head>

<body>
    <h1>ЗАДАНИЕ 1</h1>
    <?php
    $arr = array('привет1', 'привет2', 'привет3', 'привет4', 'привет5');
    for ($i = 0; $i <= count($arr); $i++)
        echo $arr[$i] . " ";
    ?>

    <h1>ЗАДАНИЕ 2</h1>
    <?php
    $arr2 = array(1, 2, 3, 4, 5, 6);
    for ($i = 0; $i <= count($arr2); $i++) {
        if ($arr2[$i] % 2 == 0) {
            echo $arr2[$i] . " ";
        }
    }
    ?>

    <h1>ЗАДАНИЕ 3</h1>
    <?php
    $arr3 = array(
        'Январь' => 1,
        'Февраль' => 2,
        'Март' => 3,
        'Апрель' => 4,
        'Май' => 5,
        'Июнь' => 6,
        'Июль' => 7,
        'Август' => 8,
        'Сентябрь' => 9,
        'Октябрь' => 10,
        'Ноябрь' => 11,
        'Декабрь' => 12,
    );
    foreach ($arr3 as $key => $value) {
        $key = array_search(5, $arr3);
        echo "<textarea>$key</textarea>";
        break;
    }
    ?>

    <h1>ЗАДАНИЕ 4</h1>
    <?php
    $arr4 = array(1, 2, 3, 4);
    function Factorial($number)
    {
        if ($number <= 1) {
            return 1;
        } else return ($number * Factorial($number - 1));
    }
    foreach ($arr4 as $key => $value) {
        echo Factorial($value) . " ";
    }
    ?>

    <h1>ЗАДАНИЕ 5</h1>
    <?php
    $arr5 = array(
        'Предприятие1' => (array('Сотрудник1.1', 'Сотрудник1.2', 'Сотрудник1.3')),
        'Предприятие2' => (array('Сотрудник2.1', 'Сотрудник2.2', 'Сотрудник2.3')),
        'Предприятие3' => (array('Сотрудник3.1', 'Сотрудник3.2', 'Сотрудник3.3'))
    );
    foreach ($arr5 as $key) {
        foreach ($arr5['Предприятие2'] as $value) {
            echo $value . " ";
        }
        break;
    }
    ?>

    <h1>ЗАДАНИЕ 6</h1>
    <?php

    ?>

    <h1>ЗАДАНИЕ 7</h1>
    <?php
    $arr7 = array(
        'Комедия' => array('ФильмКомедия1', 'ФильмКомедия2', 'ФильмКомедия3'),
        'Трагедия' => array('ФильмТрагедия1', 'ФильмТрагедия2', 'ФильмТрагедия3'),
        'Детектив' => array('ФильмДетектив1', 'ФильмДетектив2', 'ФильмДетектив3'),
    );
    echo "Задание в коде";
    ?>

    <h1>ЗАДАНИЕ 8</h1>
    <?php
    echo '<table>';
    foreach ($arr7 as $key => $value) {
        echo '<tr>';
        echo '<td>';
        echo "$key: ";

        foreach ($value as $key => $value) {
            echo '<td>';
            echo "$value, ";
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>

</html>