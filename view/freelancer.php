<?php
if(!isset($_SESSION)) {
    session_start();
}

require 'shared/shared.php';
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
        <h1>Venha fazer freelancer na byteWorks</h1>
    </div>

    <form action="/byteWorks/freelancer/create" method="post">
        <div class="row">
            <div class="col-lg">
                <div class="col-lg">
                    <label for="">Seu email <span style="color: red">*</span></label>
                    <?php 
                        echo isset($_SESSION["login"]) ? "<input type='email' class='form-control' name='insertEmail' value='".$_SESSION["login"]."' >" : "<input type='email' class='form-control' name='insertEmail'>";
                    ?>
                    
                </div>

                <div class="col-lg">
                    <label for="">Seu telefone<span style="color: red">*</span></label>
                <input type="text" name="insertPhone" class="form-control">
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