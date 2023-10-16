<?php 
include __DIR__.'/../configurations/database.php';

class indexModel extends Database
{
    private $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = "productManagement";
    }
}
?>