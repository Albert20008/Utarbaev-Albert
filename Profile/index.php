<?php

function HowManyDays(string $strData): int
{
    return (int)((time() - strtotime($strData)) / 86400);
}

$a = getdate();

if ($a["hours"] >= 8 and $a["hours"] < 20) {
    $style = "style/styleTimeDay.css";
}
else {
    $style = "style/styleTimeNight.css";
}

$textAboutMe = "Немного обо мне:<br>
Я студент 2 курса МГТУ<br>
Только начал учится программированию.<br>
В прошлом немного знаком с языками C++ и Python.";

$textAboutMe = explode("<br>", $textAboutMe);
$textAboutMe[1] = [$textAboutMe[1], $textAboutMe[2], $textAboutMe[3]];
$textAboutMe[1] = implode("<br>", $textAboutMe[1]);

$textWishes = "
На занятиях мне очень понравилась лояльность преподавателей.<br> 
Практически любой вопрос, возникший на занятии,<br> 
можно задать и получить на него понятный ответ.";

$textWishes = explode(' ', $textWishes);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/styleProfile.css">
    <link rel="stylesheet" href=<?echo $style;?>>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
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
                <?
                echo "<span style='color: yellowgreen;'>$textAboutMe[0]<br></span>" . $textAboutMe[1];
                ?>
            </p>
            <p class="info-wishes">
                <?
                for ($i = 0; $i < count($textWishes); $i++) {
                    if ($i % 2 == 0)
                        echo "<span style='color: yellowgreen'>$textWishes[$i] </span>";
                    else
                        echo "<span style='color: yellow'>$textWishes[$i] </span>";
                }
                ?>
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

<div class="container-data">
    <form method="get">
        <fieldset class="data">
            <legend>Дата рождения</legend>
            <p>Год -
                <select name="year">
                    <?
                    for ($i = 1975; $i <= 2022; $i++)
                        echo "<option>$i</option>"
                    ?>
                </select>
            </p>

            <p>
                Месяц -
                <select name="month">
                    <?
                    for ($i = 1; $i <= 12; $i++)
                        echo "<option>$i</option>"
                    ?>
                </select>
            </p>

            <p>
                Дня -
                <select name="day">
                    <?
                    for ($i = 1; $i <= 31; $i++)
                        echo "<option>$i</option>"
                    ?>
                </select>
            </p>
            <input type="submit" name="submit">

            <p>
                <?
                    $submit = $_GET["submit"];
                    if(isset($submit))
                    {
                        $year = $_GET['year'];
                        $month = $_GET['month'];
                        $day = $_GET['day'];

                        $strData = "$year-$month-$day";

                        $data = HowManyDays($strData);
                        echo "$data - количество дней прошедших с вашего рождения." . "<br>";
                    }
                ?>
            </p>
        </fieldset>
    </form>
</div>

<?php require_once "php/Footer.php"?>
</body>
</html>
