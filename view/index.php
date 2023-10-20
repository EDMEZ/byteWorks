<?php
if (!isset($_SESSION)) {
    session_start();
}

require 'shared/shared.php';
require 'shared/load.php';

?>
<div class="container">
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
            <h5>Produtos selecionados</h5>
            <label>Na byteWorks você tem uma variedade de categorias para a sua escolha</label>
        </button>

        <button class="col-sm-4 btn btn-light justify-content-center">
            <form action="/byteWorks/" method="post">
                <h5>Qualidade e cuidados</h5>
                <label>Os laptops são cuidadosamente armazenados para o maior zelo com o produto</label>
            </form>
        </button>

        <button class="col-sm-4 btn btn-light justify-content-center">
            <h5>Variedade</h5>
            <label>De laptops de lazer para o profissional e até mesmo para gravar conteudos de streamer</label>
        </button>
    </div>
</div>

<br>
<div class="container bg-light">
    <div class="row justify-content-center">
        <div class="col">
            <img src="https://images.vexels.com/media/users/3/261453/isolated/lists/7fac200b731438c7a078ddedd69c7181-halloween-jack-o-39-lantern-e-desenho-de-gato-preto.png" width="200">
        </div>

        <div class="col">
            <br>
            <h5>Promoção de halloween da ByteWorks!!! </h5>
            <p>Produtos que contêm as cores preto e laranja em conjunto irão ganhar desconto de 15% em comemoração ao halloween!!!!</p>
            
            <form action="/byteWorks/consultancy/halloween/id=5" method="post">
                <button class="btn btn-primary">Ver categoria de halloween</button>
            </form>
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
                    <img class="card-img-top img-thumbnail" src="<?= $data['imagePath'] ?>" style="max-height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['title'] ?></h5>
                        <p class="card-text">R$ <?= number_format($data['amount'], 2, ',', '.');  ?></p>
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