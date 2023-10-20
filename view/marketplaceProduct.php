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
                        <i class="bi bi-envelope"></i> Email: <a href="mailto:info@empresa.com">suporte@byteWorks.com.br</a>
                    </address>
                </div>
                <div class="col-md-4">
                    <h5>Redes Sociais</h5>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="bi bi-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="bi bi-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="bi bi-linkedin"></i> LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-4">
                <p>&copy; <?php echo date("Y"); ?> ByteWorks. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
