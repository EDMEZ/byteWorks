<?php 

class ProductController
{
    private $model;
    public function __construct()
    {
        $this->model = new productModel();
    }

    public function index()
    {
        if(!isset($_POST["productId"]) or empty($_POST["productId"]))
        {
            header("Location: /byteWorks");
            return;
        }

        $arrayIdSrelect = array(
            "idProduct" => $_POST["productId"],
        );

        $productData = $this->model->select($arrayIdSrelect);

        if(count($productData) == 0)
        {
            header("Location: /byteWorks");
            return;
        }

        include __DIR__.'/../view/product.php';
        return;
    }

    public function shopping()
    {
        $productData = array(
            "idProduct" => $_POST['id'],
            "imagePath" => $_POST['imagePath'],
            "title" => $_POST['title'],
            "amount" => $_POST['amount']
        );

        if(!isset($_SESSION))
        {
            header("Location: /byteWorks");
            return;
        }
        if(isset($_SESSION['carShopping'][$_POST["id"]]))
        {
            header("Location: /byteWorks/?response=ProdutoJaExisteNoCarrinho");
            return;
        }

        $_SESSION['carShopping'][$_POST["id"]] = $productData;

        $_SESSION["carShoppingValue"] = $_SESSION["carShoppingValue"] + $_POST["amount"];

        header("Location: /byteWorks/?response=success?valor=". $_SESSION["carShoppingValue"] );
        return;
    }

    public function unsetProduct()
    {
        if(!isset($_POST["id"]))
        {
            header("Location: /byteWorks");
            return;
        }

        $_SESSION["carShoppingValue"] = $_SESSION["carShoppingValue"] - $_SESSION['carShopping'][$_POST["id"]]["amount"];
        unset($_SESSION['carShopping'][$_POST["id"]]);

        header("Location: /byteWorks");
        return;
    }
}
?>