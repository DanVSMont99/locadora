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
$rs = mysql_query("SELECT * FROM filme where id=".$id);
$edita = mysql_fetch_array($rs);

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Remover Filme</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
<div class="container col-md-8">
    <h1>Remover Filme</h1>
    <form id="frmRemFil" name="frmRemFil" method="GET" action="remFilme.php">
        <div class="form-group">
            <label for="lblId">
            <span class="text-xl font-weight-bold">ID: </span>
            <span class="text-xl font-weight-normal"><?php echo $edita['id']?> </span>
            <input type="hidden" id="id" name="id" value="<?php echo $edita['id']?>">
            </label>
        </div>
        <div class="form-group">
            <label for="lblGen">
            <span class="text-xl font-weight-bold">Genero: </span>
            <span class="text-xl font-weight-normal"><?php echo $edita['genero']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblTit">
            <span class="text-xl font-weight-bold">Titulo: </span>
            <span class="text-xl font-weight-normal"><?php echo $edita['titulo']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblAno">
            <span class="text-xl font-weight-bold">Ano: </span>
            <span class="text-xl font-weight-normal"><?php echo $edita['ano']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblVal">
            <span class="text-xl font-weight-bold">Valor: </span>
            <span class="text-xl font-weight-normal"><?php echo $edita['valor']?> </span>
            </label>
        </div>
        <button id="btRem"  type="submit" class="btn btn-lg btn-success"><i class="fas fa-minus-circle"></i> Remover</button>
        <button id="btVoltar" name="bt_volta" class="btn btn-lg btn-danger"
                onclick="javascript:location.href='lstFilme.php'"> <i class="fas fa-undo-alt"></i> Voltar</button>
    </form>
</div>
</body>
</html>




