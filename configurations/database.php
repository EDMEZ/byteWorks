<?php 
define('HOST', 'mysql:host=byteworks.mysql.database.azure.com');
define('DBNAME', ';dbname=byteWorks');
define('USER', 'eduardo');
define('PASSWORD', 'P!tCotemig2023');

class Database
{
    protected $conn;

    public function __construct()
    {
        $this->connectDB();
    }

    private function connectDB()
    {
        try {
            $this->conn = new PDO(HOST.DBNAME, USER, PASSWORD);
        } catch (\Throwable $e) {
            die("Internal error: " . $e->getMessage());
        }
    }
}
?>