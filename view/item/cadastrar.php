<?php
include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/Menu.php");
include("../includes/rodape.php");

?>
<main class="container">
    <form action="/reserva/action/action_item.php?action=cadastrar" method="post">
        Nome * : <input type="text" name="nome" required class="form-control"><br>
        Descrição : <input type="text" name="descricao" class="form-control"><br>
        Patrimônio * : <input type="text" name="patrimonio" required class="form-control"><br>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
</main>