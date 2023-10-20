<?php 
    include __DIR__.'/controller/indexController.php';
    include __DIR__.'/controller/signupController.php';
    include __DIR__.'/controller/notfoundController.php';
    include __DIR__.'/controller/supportController.php';
    include __DIR__.'/controller/productController.php';
    include __DIR__.'/controller/consultancyController.php';
    include __DIR__.'/controller/checkoutController.php';
    include __DIR__.'/controller/freelancerController.php';
    include __DIR__.'/controller/myprofileController.php';
    include __DIR__.'/controller/marketplaceController.php';

    $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    $controller            = new indexController();
    $signupController      = new signupController() ;
    $notfoundController    = new notfoundController() ;
    $supportController     = new supportController() ;
    $productController     = new productController() ;
    $consultancyController = new consultancyController() ;
    $checkoutController = new checkoutController() ;
    $freelancerController = new freelancerController() ;
    $myprofileController = new myprofileController() ;
    $marketplaceController = new marketplaceController() ;

    switch($url)
    {
        case "/": 
            $controller->index();
        break;
        case "": 
            $controller->index();
        break;
        case "/byteWorks": 
            $controller->index();
        break;
        case "/byteWorks/": 
            $controller->index();
        break;
        case "/byteWorks/search": 
            $controller->search();
        break;
        case "/byteWorks/signup": 
            $signupController->index();
        break;
        case "/byteWorks/marketplace":  
            $marketplaceController->index();
        break;
        case "/byteWorks/logout": 
            $controller->logout();
        break;
        case "/byteWorks/myprofile/products": 
            $myprofileController->indexProducts();
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
        case "/byteWorks/myprofile/marketplace": 
            echo $myprofileController->marketplace();
        break;
        case "/byteWorks/myprofile": 
            $currentUrl  = $url;
            $url        != $currentUrl ? $controller->index() : $myprofileController->index();
        break;
        case "/byteWorks/myprofile/update": 
            $currentUrl  = $url;
            $url        != $currentUrl ? $controller->index() : $myprofileController->update();
        break;
        case "/byteWorks/myprofile/marketplace/delete": 
            $currentUrl  = $url;
            $url        != $currentUrl ? $controller->index() : $myprofileController->delete();
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
        } else if (preg_match('/^\/byteWorks\/marketplace\/(.+)/', $url, $matches)) {
            $currentUrl  = $url;
            $url        != $currentUrl ? $controller->index() : $marketplaceController->indexProduct();
        } else {
            $notfoundController->index();
        }
            break;
    }
     

?>
