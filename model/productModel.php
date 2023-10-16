<?php 
class productModel extends Database
{
    private $table;
    
    public function __construct()
    {
        parent::__construct();
        $this->table = "productManagement";
    }
    public function select($where = "null")
    {
        $stringWhere = " WHERE ";
        try {
            if($where == "null")
            {
                $stringWhere = "";
            }   
            else
            {
                foreach($where as $column => $value)
                {
                    $stringWhere .= " " . $column . " = '". $value . "' AND";
                }
            }

            $stringWhere = rtrim($stringWhere, " AND");

            $sqlSelect = "SELECT * FROM ". $this->table ." ". $stringWhere;
            $query = $this->conn->query($sqlSelect);
            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);

            return $fetch;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function search($where = "null")
    {
        $stringWhere = " WHERE ";
        try {
            if($where == "null")
            {
                $stringWhere = "";
            }   
            else
            {
                foreach($where as $column => $value)
                {
                    $stringWhere .= " " . $column . " like '". $value . "%' ";
                }
            }

            $stringWhere = rtrim($stringWhere, " AND");

            $sqlSelect = "SELECT * FROM ". $this->table ." ". $stringWhere;
            $query = $this->conn->query($sqlSelect);
            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);

            return $fetch;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>