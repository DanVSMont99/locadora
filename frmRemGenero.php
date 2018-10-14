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
    <title>Remover Genero</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
<div class="container col-md-8">
    <h1>Remover Genero</h1>
    <form id="frmRemGen" name="frmRemGen" method="GET" action="remGenero.php">
        <div class="form-group">
            <label for="lblId">
                <span class="text-xl font-weight-bold">ID: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['id']?> </span>
                <input type="hidden" id="id" name="id" value="<?php echo $edita['id']?>">
            </label>
        </div>
        <div class="form-group">
            <label for="lblDesc">
                <span class="text-xl font-weight-bold">Descricão: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['descricao']?> </span>
            </label>
        </div>
        <button id="btRem"  type="submit" class="btn btn-lg btn-success"><i class="fas fa-minus-circle"></i> Remover</button>
        <button id="btVoltar" name="bt_volta" class="btn btn-lg btn-danger"
                onclick="javascript:location.href='lstGenero.php'"> <i class="fas fa-undo-alt"></i> Voltar</button>
    </form>
</div>
</body>
</html>





