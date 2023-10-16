<?php 
if(!isset($_SESSION)) {
    session_start();
}

include __DIR__.'/../model/indexModel.php';
include __DIR__.'/../model/productModel.php';

class indexController
{
    private $model;
    public function __construct()
    {
        $this->model = new indexModel();
    }

    public function index()
    {
        $productModel = new productModel();

        $productData = $productModel->select();

        include __DIR__.'/../view/index.php';
        return;
    }

    public function select()
    {
        $userModel = new userModel();

        if(!isset($_GET["selectEmail"])    or empty($_GET["selectEmail"]) or
           !isset($_GET["selectPassword"]) or empty($_GET["selectPassword"]))
           {
                header("Location: /byteWorks/signup?ok=error");
                return;
           }
        $arrayColumns = array(
            "email" => $_GET["selectEmail"],
            "password" => md5($_GET["selectPassword"])
        );

        $dataSelect = $userModel->select($arrayColumns);

        $this->sessionStart($dataSelect);   
    }

    public function sessionStart($data)
    {
        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION["login"] = $data[0]["email"];
        $_SESSION["password"] = $data[0]["password"];
        $_SESSION["id"] = $data[0]["idUser"];
        $_SESSION['carShopping'] = array();
        $_SESSION["carShoppingValue"] = 0;
        
        header("Location: /byteWorks");
        return;
    }

    public function logout()
    {
        session_destroy();

        header("Location: /byteWorks");
        return;
    }

    public function search()
    {
        if(!isset($_GET["search"]))
        {
            header("Location: /byteWorks");
            return;
        }

        $productModel = new productModel();
        $whereClause = array(
            "title" => $_GET["search"]
        );

        $productData = $productModel->search($whereClause);

        include __DIR__.'/../view/index.php';
        return;
    }
}
?>