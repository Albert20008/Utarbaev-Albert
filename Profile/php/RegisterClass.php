<?php

class RegisterClass
{
    private $db_con;

    public function __construct($hostname, $username, $password, $dbname)
    {
        $this->db_con = mysqli_connect($hostname, $username, $password, $dbname);
    }

    public function checkLoginUser($loginUsers): bool
    {
        $query = mysqli_query($this->db_con, "SELECT Login FROM `users`;");
        $arraySelect = mysqli_fetch_all($query, MYSQLI_ASSOC);

        foreach ($arraySelect as $value)
        {
            if ($value["Login"] == $loginUsers)
                return false;
        }
        return true;
    }

    public function checkUser($loginUsers, $passwordUsers): bool
    {
        $passwordUsers = hash("md2", $passwordUsers);
        $query = mysqli_query($this->db_con, "SELECT Login FROM `users`;");
        $arraySelect = mysqli_fetch_all($query, MYSQLI_ASSOC);

        foreach ($arraySelect as $value)
        {
            if ($value["Login"] == $loginUsers and $value["Password"] == $passwordUsers)
                return false;
        }
        return true;
}

    public function addUsers($loginUsers, $passwordUsers)
    {
        $passwordUsers = hash("md2", $passwordUsers);

        mysqli_query($this->db_con, "INSERT INTO `users`(`ID`, `Login`, `Password`) VALUES (NULL,'$loginUsers','$passwordUsers')");
    }
}