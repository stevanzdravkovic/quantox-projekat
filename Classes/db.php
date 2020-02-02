<?php


class db
{
    protected function connect()
    {
        $db_name = "quantox";
        $host = "localhost";
        $username = "root";
        $password = "";
        //connection
        try {
            $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}