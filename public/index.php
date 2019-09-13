<?php
//часть 1
echo "Часть 1" . "<br>";

//1.
echo "<br>" . "Пункт 1" . "<br>";
$a = 3;
echo "переменная а: " . $GLOBALS["a"] . "<br>";
unset($a);

//2.
echo "<br>" . "Пункт 2" . "<br>";
$a = 10;
$b = 2;
$sum = $a + $b;
$sub = $a - $b;
$mul = $a * $b;
$div = $a / $b;
echo "сумма: " . $sum / (($a + $b) / 2) . "<br>";
echo "разность: " . $sub / (($a + $b) / 2) . "<br>";
echo "произведение: " . $mul / (($a + $b) / 2) . "<br>";
echo "частное: " . $div / (($a + $b) / 2) . "<br>";
unset($a);
unset($b);
unset($sum);
unset($sub);
unset($mul);
unset($div);

//3.
echo "<br>" . "Пункт 3" . "<br>";
$c = 15;
$d = 2;
$result = $c + $d;
echo "просуммирование: " . $result . "<br>";
unset($c);
unset($d);
unset($result);

//4.
echo "<br>" . "Пункт 4" . "<br>";
$a = 10;
$b = 2;
$c = 5;
$sum = $a + $b + $c;
echo "сумма деленое на среднее значение: " . $sum / ($sum / 3) . "<br>";
unset($a);
unset($b);
unset($c);
unset($sum);

//5.
echo "<br>" . "Пункт 5" . "<br>";
$a = 17;
$b = 10;
$c = $a - $b;
$d = 17;
$result = $c + $d;
echo "результат: " . $result . "<br>";
unset($a);
unset($b);
unset($c);
unset($d);
unset($result);


//часть 2
echo "<br>" . "Часть 2" . "<br>";

//1.
echo "<br>" . "Пункт 1" . "<br>";
$text = 'Привет, Мир!';
echo $text . "Моя первая программа!" . "<br>";
unset($text);

//2.
echo "<br>" . "Пункт 2" . "<br>";
$text1 = 'Привет, ';
$text2 = 'Мир!';
echo $text1 . $text2;
unset($text1);
unset($text2);

//3.
echo "<br>" . "Пункт 3" . "<br>";
$name = "Никита";
echo "Привет, " . $name . "!" . "<br>";
$text =
    'Новый текст';
unset($name);
unset($text);

//4.
echo "<br>" . "Пункт 4" . "<br>";
$age = 19;
$height = 174;
echo "Мой возраст: " . $age . " | Мой рост: " . $height . "<br>";
unset($age);
unset($height);

//5.
echo "<br>" . "Пункт 5" . "<br>";
$text = 'abcde';
echo $text[0];
echo $text[2];
echo $text[4];
echo "<br>";
unset($text);


//Часть 3
echo "<br>" . "Часть 3" . "<br>";

//1.
echo "<br>" . "Пункт 1" . "<br>";
$arr = ['a', 'b', 'c'];
var_dump($arr);
echo "<br>";
foreach ($arr as $key) {
    echo $key . "<br>";
}
echo "<br>";

//2.
echo "<br>" . "Пункт 2" . "<br>";
echo $arr[0] . $arr[1] . $arr[2] . "<br>";
unset($arr);

//3.
echo "<br>" . "Пункт 3" . "<br>";
$arr = ['a', 'b', 'c', 'd'];
echo $arr[0] . "+" . $arr[1] . ", " . $arr[2] . "+" . $arr[3] . ", " . $arr[0] . "-" . $arr[3] . ", " . $arr[0] . "/" . $arr[3] . "<br>";
unset($arr);

//4.
echo "<br>" . "Пункт 4" . "<br>";
$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo "результат: " . $result . "<br>";
unset($arr);

//5.
echo "<br>" . "Пункт 5" . "<br>";
for ($i = 0; $i < 5; $i++) {
    $arr[rand()] = $i + 1;
}
var_dump($arr);
echo "<br>";
unset($arr);


//Часть 4
echo "<br>" . "Часть 4" . "<br>";

//1.
echo "<br>" . "Пункт 1" . "<br>";
$arr = ['a' => 11, 'b' => 20, 'c' => 30];
echo "элемент 'с': " . $arr["c"] . "<br>";
echo "сумма: " . ($arr["a"] + $arr["b"] + $arr["c"]) . "<br>";
unset($arr);

//2.
echo "<br>" . "Пункт 2" . "<br>";
$arr = ['q3' => 12, 'r3' => 23, 'f3' => 34];
echo "сумма: " . array_sum($arr) . "<br>";
unset($arr);

//3.
echo "<br>" . "Пункт 3" . "<br>";
$arr = ['Коля' => '1000$', 'Вася' => '500$', 'Петя' => '200$'];
echo "Зарплата Пети: " . $arr["Петя"] . ", Зарплата Коли: " . $arr["Коля"] . "<br>";
unset($arr);

//4.
echo "<br>" . "Пункт 4" . "<br>";
$months = ["1" => "Январь", "2" => "Февраль", "3" => "Март", "4" => "Апрель", "5" => "Май", "6" => "Июнь", "7" => "Июль", "8" => "Август", "9" => "Сентябрь", "10" => "Октябрь", "11" => "Ноябрь", "12" => "Декабрь"];
echo "Начало учебного года: " . $months["9"] . ", конец учебного года: " . $months["6"] . "<br>";

//5.
echo "<br>" . "Пункт 5" . "<br>";
$week = ["1" => "Понедельник", "2" => "Вторник", "3" => "Среда", "4" => "Четверг", "5" => "Пятница", "6" => "Суббота", "7" => "Воскресенье"];
$day = 3;
echo "День недели: " . $week[$day];
