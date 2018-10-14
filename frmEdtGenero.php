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
$rs = mysql_query("SELECT * FROM genero where id=".$id);
$edita = mysql_fetch_array($rs);

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Editar Gênero</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container col-md-8">
    <h1>Editar Gêneros</h1>
    <form id="frmEdtGen" name="frmEdtGen" method="POST" action="edtGenero.php">
        <div class="form-group">
            <label for="lbltxtId">ID: </label>
            <label for="lblId" class="form-control col-md-1"><?php echo $edita['id']?></label>
            <input type="hidden"  name="id" value="<?php echo $edita['id']?>">
        </div>
        <div class="form-group">
            <label for="lblDescricao">Descricao: </label>
            <input type="text" id="txtDesc" name="txtDesc" class="form-control col-md-5" value="<?php echo $edita['descricao']?>">
        </div>
        <input type="submit" id="btEnviar" name="btEnviar"
               class="btn btn-success btn-lg" value="Atualizar">
        <input type="reset" id="btLimpar" name="btLimpar"
               class="btn btn-warning btn-lg" value="Limpar">
        <input type="button" id="bt_Cancel" name="bt_Cancel"
               class="btn btn-danger btn-lg" value="Cancelar"
               onclick="javascript:location.href='lstGenero.php'">
    </form>
</div>
</body>
</html>
