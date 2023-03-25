<?php
class dbConnection
{
    // private $servername = "localhost";
    // private $username = "id19895264_teea";
    // private $password = "asdadadaw1!?A";
    // private $dbname = "id19895264_tee";

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "tee3";

    public function __construct()
    {
    }

    public function getConnection()
    {
        // Create connection
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // echo "Connected successfully";

        return $conn;
    }
}
