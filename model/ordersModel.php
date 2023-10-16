<?php 
class ordersModel extends Database
{
    private $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = "orders";
    }

    public function select($where)
    {
        $stringWhere = " WHERE ";
        try {
            if(count($where) === 0)
            {
                $stringWhere = "";
            }   

            foreach($where as $column => $value)
            {
                $stringWhere .= " " . $column . " = '". $value . "' AND";
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

    public function insert($data)
    {
        try {
            $sqlInsert = "INSERT INTO " . $this->table . " (stringPix, idUser, idStatus, DateSell) VALUES (?, ?, ?, ?)";
            $query = $this->conn->prepare($sqlInsert);

            $currentDate = date('d/m/Y');
            $query->bindParam(1, $data["stringPix"]);
            $query->bindParam(2, $data["idUser"]);
            $query->bindParam(3, $data["status"]);
            $query->bindParam(4, $currentDate);

            $query->execute();

            return "successfully";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>