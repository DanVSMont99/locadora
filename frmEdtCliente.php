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
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container col-md-8">
    <h1>Editar Clientes</h1>
    <form id="frmEdtCli" name="frmEdtCli" method="POST" action="edtCliente.php">
        <div class="form-group">
            <label for="lbltxtId">ID: </label>
            <label for="lblId" class="form-control col-md-1"><?php echo $edita['id']?></label>
            <input type="hidden"  name="id" value="<?php echo $edita['id']?>">
        </div>
        <div class="form-group">
            <label for="lblNome">Nome: </label>
                <input type="text" id="txtNome" name="txtNome" class="form-control col-md-5" value="<?php echo $edita['nome']?>">
        </div>
        <div class="form-group">
            <label for="lblSobrenome">Sobrenome: </label>
            <input type="text" id="txtSNome" name="txtSNome" class="form-control col-md-3" value="<?php echo $edita['sobrenome']?>">
        </div>
        <div class="form-group">
            <label for="lblEmail">Email: </label>
            <input type="text" id="txtEmail" name="txtEmail" class="form-control col-md-3" value="<?php echo $edita['email']?>">
        </div>
        <div class="form-group">
            <label for="lblEndereco">Endereço: </label>
            <input type="text" id="txtEnd" name="txtEnd" class="form-control col-md-3" value="<?php echo $edita['endereco']?>">
        </div>
        <div class="form-group">
            <label for="lblCidade">Cidade: </label>
            <input type="text" id="txtCid" name="txtCid" class="form-control col-md-3" value="<?php echo $edita['cidade']?>">
        </div>
        <div class="form-group">
            <label for="lblCelular">Celular: </label>
            <input type="text" id="txtCel" name="txtCel" class="form-control col-md-3" value="<?php echo $edita['celular']?>">
        </div>
        <div class="form-group">
            <label for="lblTelefone">Telefone: </label>
            <input type="text" id="txtTel" name="txtTel" class="form-control col-md-3" value="<?php echo $edita['telefone']?>">
        </div>
        <input type="submit" id="btEnviar" name="btEnviar"
               class="btn btn-success btn-lg" value="Atualizar">
        <input type="reset" id="btLimpar" name="btLimpar"
               class="btn btn-warning btn-lg" value="Limpar">
        <input type="button" id="bt_Cancel" name="bt_Cancel"
               class="btn btn-danger btn-lg" value="Cancelar"
               onclick="javascript:location.href='lstCliente.php'">

    </form>
</div>
</body>
</html>
