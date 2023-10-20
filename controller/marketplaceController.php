<?php 
class marketplaceController
{
    private $model;
    public function __construct()
    {
        $this->model = new marketplaceModel();
    }

    public function index()
    {
        $productData = $this->model->select();

        include __DIR__.'/../view/marketplace.php';
        return;
    }

    public function indexProduct()
    {
        if(!isset($_POST["productId"]) or empty($_POST["productId"]))
        {
            header("Location: /byteWorks");
            return;
        }

        $arrayIdSrelect = array(
            "idmarketplace" => $_POST["productId"],
        );

        $productData = $this->model->select($arrayIdSrelect);

        if(count($productData) == 0)
        {
            header("Location: /byteWorks");
            return;
        }

        include __DIR__.'/../view/marketplaceProduct.php';
        return;
    }
}
?>