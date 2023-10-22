<?php
if(!isset($_SESSION)) {
    session_start();
}

require 'shared/alternativeNavbar.php';
require 'shared/load.php';
?>

<div class="container">
    <h1>Obrigado por confiar na ByteWorks!</h1>
    <h5>Esse é o código pix copia e cola da sua compra: </h5>
    <center><img src="../QR_code.png" /></center>
    <p><?php echo $pix?></p>
    <h5>Vale ressaltar que esse código irá funcionar por apenas 3 horas</h5>
</div>

<footer class="text-white mt-5" style="background-color: #222222">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-4">
                <h5 style="font-family: 'Gilroy-Bold';">Links Úteis</h5>
                <ul class="list-unstyled">
                    <li><a style="color: white;" href="/byteWorks">Home</a></li>
                    <li><a style="color: white;" href="/byteWorks/consultancy">Categorias</a></li>
                    <li><a style="color: white;" href="/byteWorks/support">Suporte</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 style="font-family: 'Gilroy-Bold';">Contato</h5>
                <address>
                    <strong>ByteWorks</strong><br>
                    Santa Cruz, 546<br>
                    Belo Horizonte - MG, 30431-228<br>
                    <i class="bi bi-telephone"></i> Telefone: (31) 3213-8666<br>
                    <i class="bi bi-envelope"></i> Email: <a style="color: white;" href="mailto:suporte@byteWorks.com.br">suporte@byteWorks.com.br</a>
                </address>
            </div>
            <div class="col-md-4">
                <h5 style="font-family: 'Gilroy-Bold';">Redes Sociais</h5>
                <ul class="list-unstyled">
                    <li><a style="color: white;" href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                    <li><a style="color: white;" href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a style="color: white;" href="#"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-4">
            <p style="font-family: 'Gilroy-Bold';">&copy; 2023 ByteWorks. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>