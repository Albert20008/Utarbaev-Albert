<?php
$a = getdate();

if ($a["hours"] >= 8 and $a["hours"] < 20) {
    $style = "style/styleTimeDay.css";
}
else {
    $style = "style/styleTimeNight.css";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/styleProfile.css">
    <link rel="stylesheet" href=<?echo $style;?>
    <meta charset="UTF-8">
    <title>Профиль</title>
</head>
<body>
<? require_once "php/Header.php" ?>
<main>
    <img class="PhotoProfile" src="image/PhotoProfile.png" alt="Фото профиля" align="center">
    <div class="bloc_profile">
        <h2 class="name_profile">Утарбаев Альберт</h2>
        <div class="info">
            <p class="info-aboutMe">
                Немного обо мне:<br>
                Я студент 2 курса МГТУ<br>
                Только начал учится программированию.<br>
                В прошлом немного знаком с языками C++ и Python.
            </p>
            <p class="info-wishes">
                На занятиях мне очен понравилась лояльность преподавателей.<br>
                Практически любой вопрос, возникший на занятии,<br>
                можно задать и получить на него понятный ответ.<br>
            </p>
        </div>
    </div>
</main>
<div class="Pictures">
    <div class="container-boxes-cats">
        <div class="box-cat">
            <img class="image-animals" src="image/eat_cat.jpg">
            <p class="text-animals">Не ешь, подумой!</p>
        </div>
        <div class="box-cat">
            <img class="image-animals" src="image/angry_cat.jpg">
            <p class="text-animals">Не дали рыбовов!</p>
        </div>
        <div class="box-cat">
            <img class="image-animals" src="image/cat_boots.jpg">
            <p class="text-animals">Месье "Кот в сапоге"</p>
        </div>
        <div class="box-cat">
            <img class="image-animals" src="image/cat_cheeks.jpg">
            <p class="text-animals">Толстощёк</p>
        </div>
    </div>
    <div class="container-boxes-dogs">
        <div class="box-dog">
            <img class="image-animals" src="image/dog_white.jpg">
            <p class="text-animals">Белый песик</p>
        </div>
        <div class="box-dog">
            <img class="image-animals" src="image/dog_blanket.jpg">
            <p class="text-animals">Моё одеяло!</p>
        </div>
        <div class="box-dog">
            <img class="image-animals" src="image/dog_prostoDog.jpg">
            <p class="text-animals">Пёс. Просто пёс.</p>
        </div>
        <div class="box-dog">
            <img class="image-animals" src="image/dog_sit.jpg">
            <p class="text-animals">Пёсик сидит.</p>
        </div>
    </div>
</div>
<?php require_once "php/Footer.php"?>
</body>
</html>
