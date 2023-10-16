<?php 
class categoryModel extends Database
{
    private $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = "category";
    }

    public function select()
    {
        try {
            $sqlSelect = "SELECT * FROM ". $this->table;
            $query = $this->conn->query($sqlSelect);
            
            if(!$query)
            {
                return "erro";
            }
        
            $fetch = $query->fetchAll();
            return $fetch;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>