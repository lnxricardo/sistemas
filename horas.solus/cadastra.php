<?php
    
    require 'Cadastro.class.php';
    $query = new Cadastro();

    if(isset($_POST['os'])){
        $os = addslashes($_POST['os']);
        $chamado = addslashes($_POST['chamado']);
        $empresa = addslashes($_POST['empresa']);
        $data = addslashes($_POST['data']);
        $entrada = addslashes($_POST['entrada']);
        $saida = addslashes($_POST['saida']);

        $query->sumTime($os, $chamado, $empresa, $data, $entrada, $saida);
        header("Location: index.php");
    }



?>  

<?php require 'header.php';?>
<div class="container">
    <h1>Cadastro de Horas</h1>
    <h2>Preencha os campos com atenção</h2>
    <hr>
</div>
<div class="container">
    <form method="POST">
        <div class="form-group">
            <label>Ordem de Serviço:</label>
            <input type="text" name="os" class="form-control" placeholder="Digite o número da OS">
        </div>
        <div class="form-group">
            <label>Número do chamado:</label>
            <input type="text" name="chamado" class="form-control" placeholder="Digite o número do chamado">
        </div>

        <div class="form-group">
            <label>Empresa:</label>
            <input type="text" name="empresa" class="form-control" placeholder="Digite a nome do cliente">
        </div>

        <div class="form-group">
            <label>Data do Atendimento:</label>
            <input type="date" name="data" class="form-control">
        </div>

        <div class="form-group">
            <label>Inicio do Atendimento:</label>
            <input type="time" name="entrada" class="form-control">
        </div>
        <div class="form-group">
            <label>Fim do Atendimento:</label><br>
            <input type="time" name="saida" class="form-control">
        </div>
        <button class="btn btn-primary">Cadastrar</button>

    </form>
</div>


</body>
</html>