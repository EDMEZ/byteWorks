<?php 
class userModel extends Database
{
    private $table;
    
    public function __construct()
    {
        parent::__construct();
        $this->table = "userInformation";
    }

    public function insert($data)
    {
        try {
            $sqlInsert = "INSERT INTO " . $this->table . " (name, nickname, email, password, cpf, rg, birthDate, FKstate, fkcity, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $query = $this->conn->prepare($sqlInsert);

            $query->bindParam(1, $data["InsertName"]);
            $query->bindParam(2, $data["InsertNickname"]);
            $query->bindParam(3, $data["InsertEmail"]);
            $query->bindParam(4, md5($data["InsertPassword"]));
            $query->bindParam(5, $data["InsertCpf"]);
            $query->bindParam(6, $data["InsertCpf"]); 
            $query->bindParam(7, $data["InsertBirthdate"]);
            $query->bindParam(8, $data["InsertState"]);
            $query->bindParam(9, $data["InsertState"]); 
            $query->bindParam(10, $data["InsertPhone"]);

            $query->execute();

            return "successfully";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
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
}
?>