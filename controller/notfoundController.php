<?php 
class notfoundController
{
    private $model;
    public function __construct()
    {
        
    }

    public function index()
    {
        include __DIR__.'/../view/notfound.php';
        return;
    }
}
?>