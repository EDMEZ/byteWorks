<?php 
class marketplaceModel extends Database
{
    private $table;
    
    public function __construct()
    {
        parent::__construct();
        $this->table = "marketplace";
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

    public function insert($data)
    {
        try {
            $sqlInsert = "INSERT INTO " . $this->table . " (title, amount, description, imagePath, FKuser) VALUES (?, ?, ?, ?, ?)";
            $query = $this->conn->prepare($sqlInsert);

            $query->bindParam(1, $data["titulomarketplace"]);
            $query->bindParam(2, $data["precomarketplace"]);
            $query->bindParam(3, $data["descricaomarketplace"]);
            $query->bindParam(4, $data["imagePath"]);
            $query->bindParam(5, $data["user"]);

            $query->execute();

            return "successfully";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            $sqlInsert = "delete from " . $this->table . " where idmarketplace = '$id'";
            $query = $this->conn->prepare($sqlInsert);

            $query->execute();

            return "successfully";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>