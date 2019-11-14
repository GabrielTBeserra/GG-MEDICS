<?php


class Connection
{
    private $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "web");
    }

    public function db()
    {
        return $this->conn;
    }
}
