<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
class Database
{
    private $host = "tsuts.tskoli.is";  // Db connection host (tsuts.tskoli.is) on tskola server
    private $db_name = "2308982439_loginreg"; // Db name
    private $username = "2308982439"; // Username for db login (KENNITALA)
    private $password = "mypassword"; // Your dp password (DEFAULT: mypassword)
    public $conn;
    public function dbConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}