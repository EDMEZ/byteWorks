<?php
if (!isset($_SESSION)) {
    session_start();
}

require 'shared/shared.php';
require 'shared/load.php';

?>
 <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-6">
                <img class="img-thumbnail" src="<?php echo $productData[0]['imagePath'] ?>">
            </div>
            <div class="col-12 col-sm-6">
                <h1><?php echo $productData[0]['title'] ?></h1>
                <h4>R$ <?php echo number_format($productData[0]['amount'], 2, ',', '.'); ?></h4>
                <div class="mt-5">
                    <h5>Descrição:</h5>
                    <p><?php echo $productData[0]['description'] ?></p>
                    <div class="mt-5">
                        <form action="/byteWorks/product/shopping" method="post">
                            <input type="hidden" name="imagePath" value="/<?php echo $productData[0]['imagePath'] ?>">
                            <input type="hidden" name="title" value="<?php echo $productData[0]['title'] ?>">
                            <input type="hidden" name="amount" value="<?php echo $productData[0]['amount'] ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
