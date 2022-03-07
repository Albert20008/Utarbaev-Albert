<?php
session_start();
$login = $_COOKIE["User"];
$query = $_SERVER["HTTP_REFERER"];
if ($query == 'http://profile/php/Fact.php')
    $_SESSION['link'] = 'Fact';
elseif ($query == 'http://profile/php/Bitrix.php')
    $_SESSION['link'] = 'Bitrix';

if ($_SESSION["color"])
    $color = $_SESSION["color"];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            background-color: "<?echo $color?>";
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h4><?echo "Система привествует пользователя " . $login;?></h4>
    <p>
        <?
            if ($_SESSION["link"])
                echo $_SESSION["link"];
        ?>
    </p>
    <a href="Fact.php">Fact</a>
    <a href="Bitrix.php">Bitrix</a>
    <form method="post">
        <select name="color">
            <option value="green">Зеленый</option>
            <option value="grey">Серый</option>
        </select>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if (isset($_POST["submit"]))
{
    $color = $_POST["color"];
    if ($color == "green")
        $_SESSION["color"] = "#008000";
    else
        $_SESSION["color"] = "#808080";
    $color = $_SESSION["color"];
}
?>
