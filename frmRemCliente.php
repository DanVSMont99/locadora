<?php
$conexao = mysql_connect("localhost", "root", "");
if (!$conexao) {
    echo "Erro ao se conectar MySQL <br/>";
    exit;
}

$banco = mysql_select_db("locadora");
if (!$banco) {
    echo "Erro ao se conectar ao banco de dados locadora!";
    exit;
}
$id = trim($_REQUEST['id']);
$rs = mysql_query("SELECT * FROM cliente where id=".$id);
$edita = mysql_fetch_array($rs);

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Remover Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
<div class="container col-md-8">
    <h1>Remover Cliente</h1>
    <form id="frmRemCli" name="frmRemCli" method="GET" action="remCliente.php">
        <div class="form-group">
            <label for="lblId">
                <span class="text-xl font-weight-bold">ID: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['id']?> </span>
                <input type="hidden" id="id" name="id" value="<?php echo $edita['id']?>">
            </label>
        </div>
        <div class="form-group">
            <label for="lblNome">
                <span class="text-xl font-weight-bold">Nome: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['nome']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblSobrenome">
                <span class="text-xl font-weight-bold">Sobrenome: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['sobrenome']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblEmail">
                <span class="text-xl font-weight-bold">Email: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['email']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblEndereco">
                <span class="text-xl font-weight-bold">Endereço: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['endereco']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblCidade">
                <span class="text-xl font-weight-bold">Cidade: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['cidade']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblCelular">
                <span class="text-xl font-weight-bold">Celular: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['celular']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblTelefone">
                <span class="text-xl font-weight-bold">Telefone: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['telefone']?> </span>
            </label>
        </div>
        <button id="btRem"  type="submit" class="btn btn-lg btn-success"><i class="fas fa-minus-circle"></i> Remover</button>
        <button id="btVoltar" name="bt_volta" class="btn btn-lg btn-danger"
                onclick="javascript:location.href='lstCliente.php'"> <i class="fas fa-undo-alt"></i> Voltar</button>
    </form>
</div>
</body>
</html>





