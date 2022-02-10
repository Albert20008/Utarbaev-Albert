<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?
    for ($i = 5; $i <= 13; $i++)
    {
        echo $i . "<br>";
    }

    $num = 1000;
    $iteration = 0;
    while($num >= 50)
    {
        $num /= 2;
        $iteration += 1;
    }

    echo "Количество циклов - $iteration" . "<br>";

    $iteration = 0;
    for($num = 1000; $num >= 50; $num /= 2)
    {
        $iteration += 1;
    }

    echo "Количество циклов - $iteration". "<br>";

    $i = 0;
    for ($j = 0; $j <= 10 - $i; $j++)
    {
        echo $j . ', ';
    }
?>
</body>
</html>