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
}
?>