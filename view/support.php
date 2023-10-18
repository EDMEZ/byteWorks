<?php
if(!isset($_SESSION)) {
    session_start();
}

require 'shared/alternativeNavbar.php';
require 'shared/load.php';


if(isset($_GET['message']) and $_GET['message'] === "ok")
{
    echo 
    "
        <div class='container'>
            <div class='alert alert-success' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                Obrigado pela menssagem! Essas menssagens fazem nosso e-commerce mais forte!
            </div>
        </div>
    ";
}else if (isset($_GET['message']) and $_GET['message'] != "ok")
{
    echo 
    "
        <div class='container'>
            <div class='alert alert-danger' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                Algo deu erado...
            </div>
        </div>
    ";
}

?>
<div class="container">
    <div class="row justify-content-center">
        <h1>Faça contato com o nosso suporte</h1>
    </div>

    <form action="/byteWorks/support/create" method="post">
        <div class="row">
            <div class="col-lg">
                <div class="col-lg">
                    <label for="">Seu email <span style="color: red">*</span></label>
                    <?php 
                        echo isset($_SESSION["login"]) ? "<input type='email' class='form-control' name='insertEmail' value='".$_SESSION["login"]."' disabled>" : "<input type='email' class='form-control' name='insertEmail'>";
                    ?>
                    
                </div>

                <div class="col-lg">
                    <label for="">Sua menssagem <span style="color: red">*</span></label>
                    <textarea class="form-control" id="textAreaExample1" rows="4" name="insertText"></textarea>            
                </div>

                <div class="col-lg">
                    <br>
                    <button class="btn btn-secondary" name="btn">Enviar menssagem</button>
                </div>
            </div>

            <div class="col-lg">
                <img src="https://avell.com.br/static/media/search_products.d6e39652.svg" alt="">
            </div>
        </div>
    </form>
</div>

<footer class="bg-light text-center mt-5">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-4">
                <h5>Links Úteis</h5>
                <ul class="list-unstyled">
                    <li><a href="/byteWorks">Home</a></li>
                    <li><a href="/byteWorks/consultancy">Categorias</a></li>
                    <li><a href="/byteWorks/support">Suporte</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contato</h5>
                <address>
                    <strong>ByteWorks</strong><br>
                    Santa Cruz, 546<br>
                    Belo Horizonte - MG, 30431-228<br>
                    <i class="bi bi-telephone"></i> Telefone: (31) 3213-8666<br>
                    <i class="bi bi-envelope"></i> Email: <a  href="mailto:info@empresa.com">suporte@byteWorks.com.br</a>
                </address>
            </div>
            <div class="col-md-4">
                <h5>Redes Sociais</h5>
                <ul class="list-unstyled">
                    <li><a  href="#"><i class="bi bi-facebook"></i> Facebook</a></li>
                    <li><a  href="#"><i class="bi bi-twitter"></i> Twitter</a></li>
                    <li><a  href="#"><i class="bi bi-linkedin"></i> LinkedIn</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-4">
            <p>&copy; 2023 ByteWorks. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>