<?php
if (!isset($_SESSION)) {
    session_start();
}

require 'shared/alternativeNavbar.php';
require 'shared/load.php';
?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <td>pix</td>
                <td>Data de compra</td>
                <td>Status</td>
            </tr>
        </thead>

        <?php 
        foreach($data as $data)
        {
            echo 
            "
            <tr>
                <td>".$data['stringPix']."</td>
                <td>".$data['DateSell']."</td>
                <td>".$data['statusdescription']."</td>
            </tr>
            ";
        }

        ?>
    </table>
</div>