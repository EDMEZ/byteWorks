<?php 
class freelancerModel extends Database
{
    private $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = "freelancer";
    }

    public function insert($data)
    {
        try {
            $sqlInsert = "INSERT INTO " . $this->table . " (email, text, phone) VALUES (?, ?, ?)";
            $query = $this->conn->prepare($sqlInsert);

            $query->bindParam(1, $data["insertEmail"]);
            $query->bindParam(2, $data["insertText"]);
            $query->bindParam(3, $data["insertPhone"]);

            $query->execute();

            return "successfully";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>