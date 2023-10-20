<?php 
if(!isset($_SESSION)) {
    session_start();
}

include __DIR__.'/../model/marketplaceModel.php';
class myprofileController
{
    private $model;
    public function __construct()
    {
        $this->model = new userModel();
    }

    public function index()
    {
        if(!isset($_GET["id"]))
        {
            header("Location: /byteWorks?ok=error");
            return;
        }

        $stateModel = new stateModel();
        $stateContent = $stateModel->select();


        $data = $this->returnDataUser($_GET["id"]);
        $dataMarketplace = $this->returnDataProductMarketplace($_GET["id"]);

        include __DIR__.'/../view/myprofile.php';
        return;
    }

    public function returnDataUser($id)
    {
        $arrayColumns = array(
            "idUser" => $id
        );

        $dataSelect = $this->model->select($arrayColumns);

        return $dataSelect;
    }

    public function returnDataProductMarketplace($id)
    {
        $arrayColumns = array(
            "FKuser" => $id
        );

        $marketplace = new MarketplaceModel();

        $dataSelect = $marketplace->select($arrayColumns);

        return $dataSelect;   
    }

    public function marketplace()
    {
        if((!isset($_FILES['imagemarketplace'])     or empty($_FILES['imagemarketplace'])) or
            (!isset($_POST["titulomarketplace"])     or empty($_POST["titulomarketplace"])) or
            (!isset($_POST["precomarketplace"])     or empty($_POST["precomarketplace"]))  or
            (!isset($_POST["descricaomarketplace"]) or empty($_POST["descricaomarketplace"])))
        {
            header("Location: /byteWorks?ok=error");
            return;
        }

        $model = new marketplaceModel();
        $file = $_FILES['imagemarketplace'];
        $destinationDirectory = realpath(__DIR__ . '/../assets/productImages/');
        chmod ($destinationDirectory, 0777);

        echo move_uploaded_file($file['tmp_name'], $destinationDirectory . '/' . $file['name']);

        $contentData = array(
            "titulomarketplace"    => $_POST["titulomarketplace"],
            "precomarketplace"     => $_POST["precomarketplace"],
            "descricaomarketplace" => $_POST["descricaomarketplace"],
            "imagePath"            => 'assets/productImages/'.$file['name'],
            "user"                 => $_SESSION["id"]
        );

        $model->insert($contentData);

        // header("Location: /byteWorks/myprofile?id=". $_SESSION["id"]);
        return;
    }

    public function update()
    {
        if((!isset($_GET["InsertName"])      or empty($_GET["InsertName"]))      or 
           (!isset($_GET["InsertNickname"])  or empty($_GET["InsertNickname"]))  or
           (!isset($_GET["InsertCpf"])       or empty($_GET["InsertCpf"]))       or
           (!isset($_GET["InsertBirthdate"]) or empty($_GET["InsertBirthdate"])) or
           (!isset($_GET["InsertPhone"])     or empty($_GET["InsertPhone"])))
           {
                header("Location: /byteWorks/myprofile?id=". $_SESSION["id"]);
                return;
           }

        $model = new userModel();

        $contentData = array(
             "name"      => $_GET["InsertName"],
             "nickname"  => $_GET["InsertNickname"],
             "cpf"       => $_GET["InsertCpf"],
             "rg"       => $_GET["InsertCpf"],
             "birthdate" => $_GET["InsertBirthdate"],
             "phone"     => $_GET["InsertPhone"],
             "FKstate" => $_GET["InsertState"],
        );

        $update = $model->update($contentData, $_SESSION["id"]);

        header("Location: /byteWorks/myprofile?id=". $_SESSION["id"]);
        return;
    }

    public function delete()
    {
        if((!isset($_GET["id"]) or empty($_GET["id"])))
        {
            header("Location: /byteWorks?ok=error");
            return;
        }

        $model = new marketplaceModel();
        
        $model->delete($_GET["id"]);

        header("Location: /byteWorks/myprofile?id=". $_SESSION["id"]);
        return;
    }
}
?>