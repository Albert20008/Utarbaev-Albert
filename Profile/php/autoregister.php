<?php
$arrUsers = [
    [
        "login" => "Albert228",
        "password" => hash("md2", "12345")
    ],
    [
        "login" => "Oleg228",
        "password" => hash("md2", "123qwe")
    ]
];

$submit = $_POST["submit"];

if (isset($submit))
{
    $login = $_POST["login"];
    $password = hash("md2", $_POST["password"]);
    foreach ($arrUsers as $value)
    {
        if ($value["login"] == $login)
            if ($value["password"] == $password)
            {
                $info = ["login" => $login,
                "password" => $password];

                setcookie("User", $login, time()+10);
                header('Location: ' . "User.php");
            }
    }
}
?>

<!doctype html>
<html lang="rus">
<head>
    <link rel="stylesheet" href="../style/styleRegister.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
    <form class="form-register" method="post">
        <h2 class="form-register-title">
            ВОЙТИ
        </h2>
        <div>
            <input class="form-register-input" placeholder="Login" type="text" name="login" required>
        </div>
        <div>
            <input class="form-register-input" placeholder="Password" type="password" name="password" required>
        </div>
        <button class="form-register-button" type="submit" name="submit">ВОЙТИ</button>
    </form>
</body>
</html>







