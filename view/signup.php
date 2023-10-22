<?php
if(!isset($_SESSION)) {
    session_start();
}

require 'shared/alternativeNavbar.php';
require 'shared/load.php';
?>
<style>
    body {
        background-color: #F4F4F4;
    }
</style>

<?php 

if(isset($_GET['ok']))
{
    echo 
    "
        <div class='container'>
            <div class='alert alert-danger' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                Os campos que são obrigatórios não foram preenchidos completamente!
            </div>
        </div>
    ";
}else if(isset($_GET["query"]) and $_GET["query"] === "erro")
{
    echo 
    "
        <div class='container'>
            <div class='alert alert-danger' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                Erro 500. Por favor, contate o suporte!
            </div>
        </div>
    ";
}else if(isset($_GET["query"]) and $_GET["query"] === "success")
{
    echo 
    "
        <div class='container'>
            <div class='alert alert-success' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                Parabens! você acaba de criar uma conta na ByteWorks!
            </div>
        </div>
    ";
}
else if(isset($_GET["query"]) and $_GET["query"] === "userexist")
{
    echo 
    "
        <div class='container'>
            <div class='alert alert-danger' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                Você já tem uma conta por aqui...
            </div>
        </div>
    ";
}
?>

<form action="/byteWorks/signup/create" method="GET">
    <div class="container w-50">
        <div class="row">
            <div class="col-lg">
                <label for="">Seu nome <span style="color: red">*</span></label>
                <input type="text" class="form-control" name="InsertName" id="InsertName">
            </div>
            <div class="col-lg">
                <label for="">Seu Sobrenome <span style="color: red">*</span></label>
                <input type="text" class="form-control" name="InsertNickname" id="InsertNickname">
            </div>
        </div>

        <div class="row">
            <div class="col-lg">
                <label for="">Seu CPF <span style="color: red">*</span></label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text btn btn-info" data-toggle="modal" data-target="#politicaModal"
                            id="basic-addon1">
                            <i class="fa-solid fa-info"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control"
                        aria-describedby="basic-addon1" name="InsertCpf" id="InsertCpf">
                </div>

            </div>
            <div class="col-lg">
                <label for="">Sua data de nascimento <span style="color: red">*</span></label>
                <input type="date" class="form-control" name="InsertBirthdate" id="InsertBirthdate">
            </div>
        </div>

        <div class="row">
            <div class="col-lg">
                <label for="">Seu celular <span style="color: red">*</span></label>
                <input type="text" class="form-control" name="InsertPhone" id="InsertPhone">

            </div>
            <div class="col-lg">
                <label for="">Seu estado/cidade <span style="color: red">*</span></label>
                <select class="form-control" name="InsertState" id="InsertState">
                    <?php 
                        foreach($stateContent as $data)
                        {
                            echo "<option value='".$data['idState']."'>".$data['uf']." - ".$data['description']."</option>";
                        }
                    ?>
                </select>
                </div>
            </div>

        <div class="row">
            <div class="col-lg">
                <label for="">Seu Email <span style="color: red">*</span></label>
                <input type="email" class="form-control" name="InsertEmail" id="InsertEmail">

            </div>
            <div class="col-lg">
                <label for="">Sua senha <span style="color: red">*</span></label>
                <input type="password" maxlength="100" class="form-control" name="InsertPassword" id="InsertPassword">
            </div>
        </div>

        <br><br>
        <div class="row">
            <button class="btn btn-danger" style="width: 100%" id="btnInsert" type="submit" name="btnInsert">Criar minha conta agora!</button>
        </div>
    </div>

    <div class="modal fade" id="politicaModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Política de Privacidade da byteWorks</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Texto da Política de Privacidade -->
                    <p>A byteWorks está comprometida em proteger a privacidade e os dados pessoais de nossos clientes.
                        Esta Política de Privacidade tem como objetivo fornecer informações claras e transparentes sobre
                        como coletamos, usamos e protegemos os dados pessoais que você nos fornece ao usar nosso site e
                        nossos serviços relacionados.</p>

                    <!-- Seção 1 -->
                    <h3 class="mb-3">1. Informações que Coletamos</h3>
                    <p>1.1. <strong>Informações de Identificação:</strong> Isso inclui seu nome, endereço de e-mail,
                        endereço físico, número de telefone e outras informações de contato que você fornece
                        voluntariamente ao criar uma conta em nosso site ou ao fazer uma compra.</p>
                    <p>1.2. <strong>Informações de Pagamento:</strong> Quando você realiza uma compra em nosso site,
                        coletamos informações financeiras, como número de cartão de crédito, data de validade e código
                        de segurança.</p>
                    <p>1.3. <strong>Informações de Navegação:</strong> Coletamos informações sobre como você interage
                        com nosso site, incluindo endereço IP, tipo de navegador, páginas visualizadas e tempo gasto em
                        nosso site.</p>
                    <p>1.4. <strong>Informações de Compra:</strong> Podemos coletar informações sobre os produtos que
                        você compra, histórico de pedidos e preferências de compra.</p>

                    <!-- Seção 2 -->
                    <h3 class="mb-3">2. Como Usamos suas Informações</h3>
                    <p>2.1. <strong>Processamento de Pedidos:</strong> Usamos suas informações pessoais para processar
                        seus pedidos, fornecer informações sobre o status de seus pedidos e cumprir nossas obrigações
                        contratuais.</p>
                    <p>2.2. <strong>Comunicação com Clientes:</strong> Podemos usar seu endereço de e-mail para enviar
                        atualizações sobre produtos, promoções, ofertas especiais e informações relacionadas aos seus
                        interesses. Você pode optar por não receber essas comunicações a qualquer momento.</p>
                    <p>2.3. <strong>Melhoria de Serviços:</strong> Usamos informações de navegação e comportamento do
                        usuário para melhorar nosso site, produtos e serviços, bem como para personalizar sua
                        experiência de compra.</p>

                    <!-- Seção 3 -->
                    <h3 class="mb-3">3. Compartilhamento de Informações</h3>
                    <p>3.1. <strong>Parceiros de Negócios:</strong> Podemos compartilhar suas informações com parceiros
                        de negócios que nos auxiliam na operação do site, como processamento de pagamentos, entrega de
                        produtos e análise de dados.</p>
                    <p>3.2. <strong>Requisitos Legais:</strong> Podemos divulgar suas informações pessoais em resposta a
                        solicitações legais, intimações, ordens judiciais ou conforme exigido por lei.</p>

                    <!-- Seção 4 -->
                    <h3 class="mb-3">4. Segurança de Dados</h3>
                    <p>A byteWorks implementa medidas de segurança técnicas e organizacionais para proteger suas
                        informações pessoais contra acesso não autorizado, perda, uso indevido ou divulgação. No
                        entanto, lembre-se de que nenhum método de transmissão pela internet ou armazenamento eletrônico
                        é completamente seguro, e não podemos garantir a segurança absoluta de suas informações.</p>

                    <!-- Seção 5 -->
                    <h3 class="mb-3">5. Seus Direitos</h3>
                    <p>Você tem o direito de acessar, retificar ou excluir suas informações pessoais a qualquer momento.
                        Também pode revogar seu consentimento para o processamento de dados ou optar por não receber
                        nossas comunicações de marketing. Para exercer esses direitos ou fazer perguntas sobre nossa
                        Política de Privacidade, entre em contato conosco por meio das informações de contato fornecidas
                        abaixo.</p>

                    <!-- Seção 6 -->
                    <h3 class="mb-3">6. Alterações na Política de Privacidade</h3>
                    <p>A byteWorks pode atualizar esta Política de Privacidade periodicamente. Quaisquer alterações
                        significativas serão comunicadas através de nosso site. Recomendamos que você reveja
                        periodicamente esta política para ficar informado sobre como estamos protegendo suas informações
                        pessoais.</p>

                    <!-- Seção 7 -->
                    <h3 class="mb-3">7. Contato</h3>
                    <p>Se você tiver dúvidas ou preocupações sobre nossa Política de Privacidade ou sobre como tratamos
                        suas informações pessoais, entre em contato conosco pelo seguinte endereço de e-mail:
                        byteWorks@gmail.com.</p>

                    <!-- Agradecimento -->
                    <p>Agradecemos por confiar na byteWorks como sua escolha para produtos gamers. Estamos comprometidos
                        em manter a segurança e a privacidade de suas informações pessoais.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</form>


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

<script>

    $(document).ready(() =>
    {
        $("#InsertCpf").mask('000.000.000-00');
        $("#InsertPhone").mask('(00) 00000-0000');
    });
</script>