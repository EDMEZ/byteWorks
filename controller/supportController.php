<?php 

include __DIR__.'/../model/supportModel.php';
class supportController
{
    private $model;
    public function __construct()
    {
        $this->model = new supportModel();
    }

    public function index()
    {
        include __DIR__.'/../view/support.php';
        return;
    }

    public function create()
    {
        if(!isset($_POST["insertEmail"]) or empty($_POST["insertEmail"]) or
            !isset($_POST["insertText"]) or empty($_POST["insertText"]))
            {
                header("location: /byteWorks/support?message=camposvazios");
                return;
            }

        $arrayContent = array(
            "insertEmail" => $_POST["insertEmail"],
            "insertText" => $_POST["insertText"]
        );

        $insert = $this->model->insert($arrayContent);
    

        if($insert !== "successfully")
        {
            header("location: /byteWorks/support?message=erro500");
            return;
        }

        header("location: /byteWorks/support?message=ok");
        return;
    }
}
?>