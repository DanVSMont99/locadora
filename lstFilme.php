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

$rs = mysql_query("SELECT * FROM filme;");
?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Listagem de Filmes</title>
</head>
<body>
<div class="container col-md-9">
<h1><center>Filmes</center></h1>
    <br>
    <input type="button" id="bt_Adi" name="bt_Adi"
           class="btn btn-primary btn-lg" value="Adicionar"
           onclick="javascript:location.href='fmrInsFilme.html'">
    <br><br>
<table class="table col-md-12">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Gênero</th>
        <th>Título</th>
        <th>Ano</th>
        <th>Valor</th>
        <th colspan="2" class="text-center">OPERAÇÕES</th>
    </tr>
    <?php while ($linha = mysql_fetch_array($rs)) { ?>
        <tr>
            <td><?php echo $linha['id'] ?></td>
            <td><?php echo $linha['genero'] ?></td>
            <td><?php echo $linha['titulo'] ?></td>
            <td><?php echo $linha['ano'] ?></td>
            <td><?php echo "R$ ", number_format($linha['valor'], 2, ',', '.') ?></td>
            <td><button id="btEdt" class="btn btn-outline-warning btn-lg"  data-toggle="tooltip" data-placement="top" title="Editar"
                        onclick="javascript:location.href='frmEdtFilme.php?id=' + <?php echo $linha ['id'] ?>">
                    <i class="far fa-edit"></i></button>
            </td>
            <td><button id="btRem" class="btn btn-outline-danger btn-lg"
                        onclick="javascript:location.href='frmRemFilme.php?id=' + <?php echo $linha ['id'] ?>">
                    <i class="far fa-trash-alt"></i></button>
            </td>
        </tr>
    <?php } ?>
    </thead>
</table>
</div>
</body>
</html>