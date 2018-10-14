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

$descricao = trim($_POST['txtDes']);

if (!empty($descricao)) {
    $sql = "INSERT INTO genero (descricao) VALUES ('$descricao');";
    $ins = mysql_query($sql);
    if(!$ins)
        echo ("Deu erro na consulta de inserir novo gênero");
}
else echo "Descrição está em branco";

header("location: lstGenero.php");
?>


