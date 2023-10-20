<?php
if (!isset($_SESSION)) {
    session_start();
}

require 'shared/shared.php';
require 'shared/load.php';

?>

<?php foreach ($productData as $data): ?>
            <div class="col-12 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top img-thumbnail" src="<?= $data['imagePath'] ?>" style="max-height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['title'] ?></h5>
                        <p class="card-text">R$ <?= number_format($data['amount'], 2, ',', '.');  ?></p>
                            <form method="post" action="/byteWorks/product/<?= str_replace(" ", "-", $data['title']) ?>">
                                <input type="hidden" name="productId" value="<?= $data['idmarketplace'] ?>">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa-solid fa-glasses"></i> Ver detalhes
                                </button>
                            </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

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
            <p>&copy; 2023 ByteWorks. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>