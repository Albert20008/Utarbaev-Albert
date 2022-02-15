<?php
include "Functions.php";

$text = [];
$text["Name"] = "Утарбаев Альберт";
$text["aboutMe"] = "Немного обо мне: 
Я студент 2 курса МГТУ 
Только начал учится программированию. 
В прошлом немного знаком с языками C++ и Python.";

$text["wishes"] = "На занятиях мне очень понравилась лояльность преподавателей. 
Практически любой вопрос, возникший на занятии, 
можно задать и получить на него понятный ответ";

$text["namePictures"] = [
    "Не ешь, подумой!", "Не дали рыбовов!", 'Месье "Кот в сапоге"', "Толстощёк",
    "Белый песик", "Моё одеяло!", "Пёс. Просто пёс.", "Пёсик сидит."
];

$text["footer"] = "©Все права защищены";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/styleProfile.css">
    <title>Document</title>
</head>
<body>
<hr>
<footer class="container-footer">
    <p class="text-footer">
        <?
        $countVowels = CountVowel($text);
        $countWords = CountWords($text);
        echo "Количество гласных на странице: $countVowels<br>";
        echo "Количество слов на странице: $countWords<br>";
        ?>
    </p>
    <p class="text-footer">©Все права защищены</p>
</footer>
</body>
</html>
