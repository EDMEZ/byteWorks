<!DOCTYPE html>
<html lang="ept-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ByteWorks - Construindo o futuro com você</title>
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    @import url('https://fonts.cdnfonts.com/css/anurati');
    @import url('https://fonts.cdnfonts.com/css/munich');

    a {
        font-family: 'Poppins', sans-serif;
        color: #202020;
    }

    body::-webkit-scrollbar {
        width: 12px;
        /* width of the entire scrollbar */
    }

    body::-webkit-scrollbar-track {
        background: #2E2E2E;
        /* color of the tracking area */
    }

    body::-webkit-scrollbar-thumb {
        background-color: #202020;
        /* color of the scroll thumb */
        border-radius: 20px;
        /* roundness of the scroll thumb */
        border: 3px solid #2E2E2E;
        /* creates padding around scroll thumb */
    }

    #btnCarShopping {
        background-color: transparent;
        border: none;
    }
</style>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light justify-content-center fixed-top" style="height: 15px;">
        <div class="collapse navbar-collapse justify-content-center" id="navbarText">
            <ul class="navbar-nav mb-auto">
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 12px; font-weight: bold;"
                        href="/byteWorks/signup">Cadastre-se</a>
                </li>
                <li>
                    <span class="nav-link" style="font-size: 12px; font-weight: bold;" href="#">*</span>
                </li>
                <li class="nav-item btn-group">
                    <?php

                    if (isset($_SESSION['id']) and !empty($_SESSION['id'])) {
                        echo
                            "
                            <a class='nav-link dropdown-toggle' style='font-size: 12px; font-weight: bold;' href='#' id='navbarContentUser' data-toggle='dropdown'
                                aria-haspopup='true' aria-expanded='false'>
                                " . $_SESSION["login"] . "
                            </a>

                            <div class='dropdown-menu justify-content-center' aria-labelledby='navbarContentUser'
                                style='z-index: 999'>
                                <div class='container'>
                                    <ul class='navbar-nav'>
                                        <li class='nav-item'><a class='nav-link' href='/byteWorks/myprofile?id=".$_SESSION["id"]."'>Meus dados</a></li>
                                        <li class='nav-item'><a class='nav-link' href='/byteWorks/myprofile/products?id=".$_SESSION["id"]."'>Minhas compras</a></li>
                                    </ul>
                                    <form action='/byteWorks/logout' method='post'>
                                            <button class='btn btn-danger'>sair</button>
                                    </form>
                                </div>
                            </div>
                            ";
                    }
                    else {
                        echo
                            "
                            <a class='nav-link dropdown-toggle' style='font-size: 12px; font-weight: bold;' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown'
                                aria-haspopup='true' aria-expanded='false'>
                                Entrar
                            </a>
                            ";
                    }
                    ?>

                    <div class="dropdown-menu justify-content-center sticky-top"
                        aria-labelledby="navbarDropdownMenuLink" style="z-index: 99">
                        <form action="/byteWorks/signin/select" method="get">
                            <div class="container">
                                <h1 class="h1">Entre na byteWorks!</h1>
                                <div class="row">
                                    <div class="col-lg">
                                        <label for="">Login</label>
                                        <input type="text" class="form-control" name="selectEmail">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg">
                                        <label for="">Senha</label>
                                        <input type="password" class="form-control" name="selectPassword">
                                        <small><a href="">Esqueci a senha</a></small>
                                    </div>
                                </div>
                        </form>

                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <button class="btn btn-secondary">Entrar</button>
                            </div>
                        </div>
                    </div>
        </div>
        </li>
        </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg sticky-top bg-white shadow-sm">
        <a class="navbar-brand" href="/byteWorks/" style="font-family: 'Anurati', sans-serif;'">
            B<span style="font-family: 'Manrope';">yte</span>W<span style="font-family: 'Manrope';">orks</span>
        </a>

        <div class="collapse navbar-collapse justify-content-center" id="navbarText">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="/byteWorks/">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/byteWorks/marketplace">
                        marketplace
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/byteWorks/consultancy">
                        Categorias
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/byteWorks/support">
                        Suporte
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/byteWorks/freelancer">
                        freelancer
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse"
                        data-target="#content" aria-controls="content" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="dark-blue-text">
                            <i class="fas fa-bars fa-1x"></i></span>
                    </button>
                </li>

                <div class="collapse navbar-collapse">
                    <li class="nav-item">
                        <a class='nav-link dropdown-toggle' href='#' id='navbarsearch   ' data-toggle='dropdown'
                            aria-haspopup='true' aria-expanded='false'>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>

                        <div class='dropdown-menu justify-content-center' aria-labelledby='navbarsearch '
                            style='z-index: 999'>
                            <div class='container'>
                                <form action='/byteWorks/search' method='GET'>
                                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button class="" id="btnCarShopping" type="button" data-toggle="modal" data-target="#myModal"
                            aria-controls="myModal" aria-expanded="false" aria-label="Toggle navigation"><span
                                class="dark-blue-text">
                                <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </li>
                </div>
            </ul>
        </div>
    </nav>
    <div class="collapse navbar-collapse" id="content">
        <ul class="navbar-nav">
            <li class="nav-item active ">
                <a class="nav-link" href="/byteWorks/">
                    Home
                </a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/byteWorks/marketplace">
                        marketplace
                    </a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="/byteWorks/consultancy">
                    Categorias
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/byteWorks/support">
                    Suporte
                </a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/byteWorks/freelancer">
                        freelancer
                    </a>
                </li>
            <li class="nav-item">
                <button style="background-color: transparent; border: none; " type="button" data-toggle="modal"
                    data-target="#myModal">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-size: 12px; font-weight: bold;" href="/byteWorks/signup">Cadastre-se</a>
            </li>
            <li class="nav-item">
                <?php

                if (isset($_SESSION['id']) and !empty($_SESSION['id'])) {
                    echo
                        "
                        <a class='nav-link dropdown-toggle' style='font-size: 12px; font-weight: bold;' href='#' id='navbarContentUser' data-toggle='dropdown'
                            aria-haspopup='true' aria-expanded='false'>
                            " . $_SESSION["login"] . "
                        </a>

                        <div class='dropdown-menu justify-content-center' aria-labelledby='navbarContentUser'
                            style='z-index: 999'>
                            <div class='container'>
                                <form action='/byteWorks/logout' method='post'>
                                        <button class='btn btn-danger'>sair</button>
                                </form>
                            </div>
                        </div>
                        ";
                }
                else {
                    echo
                        "
                        <a class='nav-link dropdown-toggle' style='font-size: 12px; font-weight: bold;' data-toggle='dropdown' id='navbarDropdownMenuLink1'
                            aria-haspopup='true' aria-expanded='false'>
                            Entrar
                        </a>

                        <div class='dropdown-menu justify-content-center sticky-top'
                        aria-labelledby='navbarDropdownMenuLink1' style='z-index: 99'>
                        <form action='/byteWorks/signin/select' method='get'>
                            <div class='container'>
                                <h1 class='h1'>Entre na byteWorks!</h1>
                                <div class='row'>
                                    <div class='col-lg'>
                                        <label for=''>Login</label>
                                        <input type='text' class='form-control' name='selectEmail'>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='col-lg'>
                                        <label for=''>Senha</label>
                                        <input type='password' class='form-control' name='selectPassword'>
                                        <small><a href=''>Esqueci a senha</a></small>
                                    </div>
                                </div>
                            </form>
                            <br>
                        <div class='row'>
                            <div class='col-lg'>
                                <button class='btn btn-secondary'>Entrar</button>
                            </div>
                        </div>
                    </div>
                        ";
                }
                ?>
            </li>
        </ul>


    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Itens no carrinho</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <?php
                        if (isset($_SESSION['carShopping']) and $_SESSION['carShopping'] != null) {
                            foreach ($_SESSION['carShopping'] as $data => $value) {
                                echo
                                    "
                                    <div class='alert alert-secondary' role='alert'>
                                        <div class='row'>
                                            <div class='col'><img class='img-thumbnail' src='" . $value['imagePath'] . "' alt='' style='width: 100%'></div>
                                            <div class='col'>" . $value['title'] . "</div>
                                            <div class='col'>R$ " . number_format($value['amount'], 2, ',', '.') . "</div>
                                            <div class='col'>
                                                <form action='/byteWorks/product/unset' method='POST'>
                                                    <input type='hidden' name='id' value='" . $value['idProduct'] . "'>
                                                    <button class='close'>
                                                        <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                            }
                        }
                        else {
                            echo "<h4>Não existe nenhum produto por aqui...</h4>";
                        }
                        ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <h5>Total: <?php echo isset($_SESSION["carShoppingValue"]) ? number_format($_SESSION["carShoppingValue"], 2, ',', '.') : "nenhum produto no carrinho" ?></h5>
                    <?php
                    if (isset($_SESSION["carShopping"]) and $_SESSION["carShopping"] != null) {

                        echo '
                        <form method="post" action="/byteWorks/checkout">
                            <button type="submit" class="btn btn-secondary">Continuar comprando</button>
                        </form>';
                    }
                    else {
                        echo '<button type="button" disabled class="btn btn-secondary" data-dismiss="modal">Continuar comprando</button>';
                    }

                    ?>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send/?phone=5531986052685&text&type=phone_number&app_absent=0" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
        <i style="margin-top:16px" class="fa fa-whatsapp"></i>
    </a>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"
        integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>