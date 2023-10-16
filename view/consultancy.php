<?php
if(!isset($_SESSION)) {
    session_start();
}

require 'shared/shared.php';
require 'shared/load.php';

?>


<div class="container mt-5">
    <h1 class="text-center">Qual é o seu estilo de PC?</h1>

    <div class="container mt-5">
        <?php 
        foreach($categoryData as $category)
        {
            echo 
            "
            <a href='/byteWorks/consultancy/".$category['description']."?id=".$category['idCategory']."' class=' mt-2 col-sm-4 btn btn-light justify-content-center'>
                <h5>".$category['description']."</h5>
                <label>Será ".$category['description']." o estilo ideal para você?</label>
            </a>
            ";
        }
        ?>
    </div>
</div>

<footer class="bg-light text-center mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Links Úteis</h5>
                <ul class="list-unstyled">
                    <li><a href="/byteWorks">Home</a></li>
                    <li><a href="/byteWorks/consultancy">Consultoria</a></li>
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
