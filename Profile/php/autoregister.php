<!doctype html>
<html lang="rus">
<head>
    <link rel="stylesheet" href="../style/styleRegister.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход</title>
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
        <button class="form-exit-button" type="submit" name="submit">ВОЙТИ</button>
        <div class="link">
            <a href="Register.php">Регистрация</a>
        </div>
    </form>
    <p>
        <?php
        $submit = $_POST["submit"];

        if (isset($submit))
        {
            $loginUser = $_POST["login"];
            $passwordUser = hash("md2", $_POST["password"]);

            $hostname = "localhost";
            $username = "test";
            $password = "1";
            $dbname = "usersdatabase";

            $db_con = mysqli_connect($hostname, $username, $password, $dbname);

            $select = mysqli_query($db_con, "SELECT * FROM Users");
            $arrUsers = mysqli_fetch_all($select, MYSQLI_ASSOC);

            foreach ($arrUsers as $item)
            {
                if ($item["Login"] == $loginUser)
                {
                    if ($item["Password"] == $passwordUser)
                    {
                        echo "Система распознала '$loginUser'\n\rДобром пожаловать!";
                        break;
                    }
                }
            }
        }
        ?>
    </p>
</body>
</html>







