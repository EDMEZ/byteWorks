<?php 

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

    public function returnDataProductMarketplace()
    {
        
    }
}
?>