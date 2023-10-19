<?php 
    include __DIR__.'/controller/indexController.php';
    include __DIR__.'/controller/signupController.php';
    include __DIR__.'/controller/notfoundController.php';
    include __DIR__.'/controller/supportController.php';
    include __DIR__.'/controller/productController.php';
    include __DIR__.'/controller/consultancyController.php';
    include __DIR__.'/controller/checkoutController.php';
    include __DIR__.'/controller/freelancerController.php';

    $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    $controller            = new indexController();
    $signupController      = new signupController() ;
    $notfoundController    = new notfoundController() ;
    $supportController     = new supportController() ;
    $productController     = new productController() ;
    $consultancyController = new consultancyController() ;
    $checkoutController = new checkoutController() ;
    $freelancerController = new freelancerController() ;

    switch($url)
    {
        case "/byteWorks/": 
            $controller->index();
        break;
        case "/byteWorks/search": 
            $controller->search();
        break;
        case "/byteWorks/signup": 
            $signupController->index();
        break;
        case "/byteWorks/logout": 
            $controller->logout();
        break;
        case "/byteWorks/signin/select": 
            $controller->select();
        break;
        case "/byteWorks/signup/create": 
            echo $signupController->create();
        break;
        case "/byteWorks/support": 
            echo $supportController->index();
        break;
        case "/byteWorks/consultancy": 
            echo $consultancyController->index();
        break;
        case "/byteWorks/support/create": 
            echo $supportController->create();
        break;
        case "/byteWorks/product/shopping": 
            echo $productController->shopping();
        break;
        case "/byteWorks/product/unset": 
            echo $productController->unsetProduct();
        break;
        case "/byteWorks/freelancer": 
            echo $freelancerController->index();
        break;
        case "/byteWorks/freelancer/create": 
            echo $freelancerController->create();
        break;
        case "/byteWorks/checkout": 
            $currentUrl  = $url;
            $url        != $currentUrl ? $controller->index() : $checkoutController->index();
        break;
        default: 
        if (preg_match('/^\/byteWorks\/product\/(.+)/', $url, $matches)) {
            $currentUrl  = $url;
            $url        != $currentUrl ? $controller->index() : $productController->index();
        }else if (preg_match('/^\/byteWorks\/consultancy\/(.+)/', $url, $matches)) {
            $currentUrl  = $url;
            $url        != $currentUrl ? $controller->index() : $consultancyController->returnPageWithFilter();
        } else {
            $notfoundController->index();
        }
            break;
    }
     

?>
