<?php 
if(!isset($_SESSION)) {
    session_start();
}

include __DIR__."/../lib/pix/php_qrcode_pix/phpqrcode/qrlib.php"; 
include __DIR__."/../lib/pix/php_qrcode_pix/funcoes_pix.php";
include __DIR__.'/../model/ordersModel.php';

class checkoutController
{
    private $model;
    public function __construct()
    {
        $this->model = new ordersModel();
    }

    public function index()
    {
        if(!isset($_SESSION["id"]))
        {
            header("Location: /byteWorks/signup?response=NaoLogado");
            return;
        }

        $amount = $_SESSION["carShoppingValue"];

        $pix = $this->setPix($amount);
        $save = $this->saveOrder($pix);

        QRcode::png($pix, "QR_code.png");

        $_SESSION["carShopping"] = array();
        $_SESSION["carShoppingValue"] = 0;

        include __DIR__.'/../view/checkout.php';
        return;
    }

    public function setPix($amount)
    {
        $px[00]="01"; //Payload Format Indicator, Obrigatório, valor fixo: 01
        // Se o QR Code for para pagamento único (só puder ser utilizado uma vez), descomente a linha a seguir.
        //$px[01]="12"; //Se o valor 12 estiver presente, significa que o BR Code só pode ser utilizado uma vez. 
        $px[26][00]="BR.GOV.BCB.PIX"; //Indica arranjo específico; “00” (GUI) obrigatório e valor fixo: br.gov.bcb.pix
        $px[26][01]="01858758661"; //Chave do destinatário do pix, pode ser EVP, e-mail, CPF ou CNPJ.

        $px[52]="0000"; //Merchant Category Code “0000” ou MCC ISO18245
        $px[53]="986"; //Moeda, “986” = BRL: real brasileiro - ISO4217
        $px[54]= $amount; //Valor da transação, se comentado o cliente especifica o valor da transação no próprio app. Utilizar o . como separador decimal. Máximo: 13 caracteres.
        $px[58]="BR"; //“BR” – Código de país ISO3166-1 alpha 2
        $px[59]="LUCAS JOSE CAMPOS PACHECO"; //Nome do beneficiário/recebedor. Máximo: 25 caracteres.
        $px[60]="BELO HORIZONTE"; //Nome cidade onde é efetuada a transação. Máximo 15 caracteres.
        $px[62][05]="***"; //Identificador de transação, quando gerado automaticamente usar ***. Limite 25 caracteres. Vide nota abaixo.

        $pix=montaPix($px);

        $pix.="6304"; //Adiciona o campo do CRC no fim da linha do pix.
        $pix.=crcChecksum($pix); //Calcula o checksum CRC16 e acrescenta ao final.
        
        return $pix;
    }

    public function saveOrder($pix)
    {

        $arraySelect = array(
            "stringPix" => $pix,
            "idUser" => $_SESSION["id"],
            "idStatus" => "1"
        );

        $arrayContent = array(
            "stringPix" => $pix,
            "idUser" => $_SESSION["id"],
            "status" => "1"
        );

        $select = $this->model->select($arraySelect);

        if(count($select) > 1)
        {
            header("Location: /byteWorks?response=ProdutoJaEmProcesso");
            $_SESSION["carShoppingValue"] = 0;
            return;
        }
        $insert = $this->model->insert($arrayContent);

        if($insert !== "successfully")
        {
            echo $insert;
            return;
        }

        return;
    }
}
?>