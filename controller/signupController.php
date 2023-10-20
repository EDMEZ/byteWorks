<?php 
include __DIR__.'/../model/userModel.php';
include __DIR__.'/../model/stateModel.php';
class signupController
{
    private $model;
    public function __construct()
    {
        $this->model = new userModel();
    }

    public function index()
    {
        $stateModel = new stateModel();
        $stateContent = $stateModel->select();

        include __DIR__.'/../view/signup.php';
        return;
    }

    public function create()
    {
        if((!isset($_GET["InsertName"])      or empty($_GET["InsertName"]))      or 
           (!isset($_GET["InsertNickname"])  or empty($_GET["InsertNickname"]))  or
           (!isset($_GET["InsertCpf"])       or empty($_GET["InsertCpf"]))       or
           (!isset($_GET["InsertBirthdate"]) or empty($_GET["InsertBirthdate"])) or
           (!isset($_GET["InsertPhone"])     or empty($_GET["InsertPhone"]))     or
           (!isset($_GET["InsertEmail"])     or empty($_GET["InsertEmail"]))     or
           (!isset($_GET["InsertPassword"])  or empty($_GET["InsertPassword"])))
           {
                header("Location: /byteWorks/signup?ok=camposVazios");
                return;
           }

        $arrayColumns = array(
            "email" => $_GET["InsertEmail"]
        );

        $validationIfUserExists = $this->model->select($arrayColumns);

        if(count($validationIfUserExists) > 0)
        {
            header("Location: /byteWorks/signup?query=userexist");
            return;
        }

        $insertDb = $this->model->insert($_GET);

        if($insertDb !== "successfully")
        {
            header("Location: /byteWorks/signup?query=error");
            return;
        }

        header("Location: /byteWorks/signup?query=success");
        return;
    }
}
 
?>