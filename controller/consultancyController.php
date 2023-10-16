<?php 
if(!isset($_SESSION)) {
    session_start();
}

include __DIR__.'/../model/categoryModel.php';
class consultancyController
{
    private $model;
    public function __construct()
    {
        $this->model = new categoryModel();
    }

    public function index()
    {
        $categoryData = $this->model->select();

        include __DIR__.'/../view/consultancy.php';
        return;
    }

    public function returnPageWithFilter()
    {
        if(!isset($_GET["id"]))
        {
            header("Location: /byteWorks/consultancy");
            return;
        }
        $productModel = new productModel();

        $arrayCategoryId = array(
            "FKcategory" => $_GET["id"]
        );

        $productData = $productModel->select($arrayCategoryId);

        include __DIR__.'/../view/index.php';
        return;
    }
}
?>