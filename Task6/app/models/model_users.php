<?php

class Model_Users extends Model {

    function __construct()
    {

    }

    public function get_data()
    {
        $connection = @new mysqli('127.0.0.1:3306', 'root', '','loftschool', 3306);
        $sql = "SELECT `email`, `username`, `age`, `userText`, `photos` FROM `users`";
        $result = $connection->query($sql);
        $records = $result->fetch_all(MYSQLI_ASSOC);
        return $records;
    }

}