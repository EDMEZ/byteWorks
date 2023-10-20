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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ByteWorks - Construindo o futuro com você</title>
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
</head>
<style>
        @import url('https://fonts.cdnfonts.com/css/anurati');

    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    a {
        font-family: 'Poppins', sans-serif;
    }
</style>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light justify-content-center" style="height: 15px;">
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

                    if (isset($_SESSION['id']) and !empty($_SESSION['id']))
                    {
                        echo
                            "
                            <a class='nav-link dropdown-toggle' style='font-size: 12px; font-weight: bold;' href='#' id='navbarContentUser' data-toggle='dropdown'
                                aria-haspopup='true' aria-expanded='false'>
                                " . $_SESSION["login"] . "
                            </a>

                            <div class='dropdown-menu justify-content-center' aria-labelledby='navbarContentUser'
                                style='z-index: 99'>
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
                            <a class='nav-link dropdown-toggle' style='font-size: 12px; font-weight: bold;' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown'
                                aria-haspopup='true' aria-expanded='false'>
                                Entrar
                            </a>
                            ";
                    }
                    ?>

                    <div class="dropdown-menu justify-content-center" aria-labelledby="navbarDropdownMenuLink"
                        style="z-index: 99">
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
    <nav class="navbar navbar-expand-lg justify-content-center">
        <a class="navbar-brand" href="/byteWorks/">
            <h1 style="font-family: 'Anurati', sans-serif;'">ByteWorks</h1>
        </a>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js" integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>

</html>