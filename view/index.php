<?php
if (!isset($_SESSION)) {
    session_start();
}

require 'shared/shared.php';
require 'shared/load.php';

?>
<div class="container-fluid">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"
                    src="https://eshop-api.avell.com.br/storage/5/content/6529221b1c06d8402/6529221b54d76.png"
                    alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="https://eshop-api.avell.com.br/storage/5/content/6529221b1c06d8402/6529221b54d76.png"
                    alt="Segundo Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="https://eshop-api.avell.com.br/storage/5/content/6529221b1c06d8402/6529221b54d76.png"
                    alt="Terceiro Slide">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <button class="col-sm-4 btn btn-light justify-content-center">
            <h5>Para profissionais</h5>
            <label>Notebooks por área de atuação</label>
        </button>

        <button class="col-sm-4 btn btn-light justify-content-center">
            <form action="/byteWorks/" method="post">
                <h5>Todos os modelos</h5>
                <label>Notebooks por área de atuação</label>
            </form>
        </button>

        <button class="col-sm-4 btn btn-light justify-content-center">
            <h5>Para sua diversão</h5>
            <label>Notebooks por área de atuação</label>
        </button>
    </div>
</div>

<br>
<div class="container bg-light">
    <div class="row justify-content-center">
        <div class="col">
            <!-- <img src="https://eshop-api.avell.com.br/storage/5/content/6277f7f3690f65331/64401e074579d.png" width="500"> -->
        </div>

        <div class="col">
            <h5>Outlet Avell: Alto desempenho com preços imperdíveis. </h5>
        </div>
    </div>
</div>


<div class="container">
    <div class="row mt-3 justify-content-center">
        <h4>Veja mais de nossos produtos:</h4>
    </div>

    <div class="row mt-5">
        <?php foreach ($productData as $data): ?>
            <div class="col-12 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="<?= $data['imagePath'] ?>" style="max-height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['title'] ?></h5>
                        <p class="card-text"><?= $data['description'] ?></p>
                        <?php if ($data['stock'] == 1): ?>
                            <form method="post" action="/byteWorks/product/<?= str_replace(" ", "-", $data['title']) ?>">
                                <input type="hidden" name="productId" value="<?= $data['idProduct'] ?>">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa-solid fa-glasses"></i> Ver detalhes
                                </button>
                            </form>
                        <?php else: ?>
                            <div class="alert alert-warning" role="alert">
                                Sem estoque
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
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