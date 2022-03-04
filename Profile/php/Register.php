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
        РЕГИСТРАЦИЯ
    </h2>
    <div>
        <input class="form-register-input" placeholder="Login" type="text" name="login" required>
    </div>
    <div>
        <input class="form-register-input" placeholder="Password" type="password" name="password" required>
    </div>
    <button class="form-register-button" type="submit" name="submit">Регистрация</button>
    <p>
        <?
        if (isset($_POST["submit"]))
        {
            $loginUsers = $_POST["login"];
            $passwordUsers = hash("md2", $_POST["password"]);

            $hostname = "localhost";
            $username = "test";
            $password = "1";
            $dbname = "usersdatabase";

            $db_con = mysqli_connect($hostname, $username, $password, $dbname);

            $query = mysqli_query($db_con, "SELECT Login FROM `users`;");
            $arraySelect = mysqli_fetch_all($query, MYSQLI_ASSOC);

            $result = true;
            foreach ($arraySelect as $value)
            {
                foreach ($value as $key => $item)
                {
                    if ($key == "Login")
                    {
                        if ($item == $loginUsers)
                        {
                            $result = false;
                            break;
                        }
                    }
                }
            }

            if (!$result)
                echo "Пользователь с таким логином уже существует";
            else
            {
                $query = mysqli_query($db_con, "INSERT INTO `users`(`ID`, `Login`, `Password`) VALUES (NULL,'$loginUsers','$passwordUsers')");

                if ($query)
                    echo "Пользователь создан (^-^)";
                else
                    echo "Извините, произошёл сбой, попробуйте позже (._.)";
            }
        ?>
    </p>
</form>
</body>
</html>

<?php

}





