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