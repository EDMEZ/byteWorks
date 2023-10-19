<?php 

include __DIR__.'/../model/freelancerModel.php';
class freelancerController
{
    private $model;
    public function __construct()
    {
        $this->model = new freelancerModel();
    }

    public function index()
    {
        include __DIR__.'/../view/freelancer.php';
        return;
    }

    public function create()
    {
        if(!isset($_POST["insertEmail"]) or empty($_POST["insertEmail"]) or
           !isset($_POST["insertText"]) or empty($_POST["insertText"])   or
           !isset($_POST["insertPhone"]) or empty($_POST["insertPhone"]))
            {
                header("location: /byteWorks/freelancer?message=camposvazios");
                return;
            }

        $arrayContent = array(
            "insertEmail" => $_POST["insertEmail"],
            "insertText" => $_POST["insertText"],
            "insertPhone" => $_POST["insertPhone"]
        );

        $insert = $this->model->insert($arrayContent);
    

        if($insert !== "successfully")
        {
            header("location: /byteWorks/freelancer?message=erro500");
            return;
        }

        header("location: /byteWorks/freelancer?message=ok");
        return;
    }
}
?>