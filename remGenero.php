<?php
$conexao = mysql_connect("localhost", "root", "");
if (!$conexao) {
    echo "Erro ao se conectar MySql <br/>";
    exit;
}

$banco = mysql_select_db("locadora");
if (!$banco) {
    echo "Erro ao se conectar ao banco locadora...";
    exit;
}

$id = trim($_REQUEST['id']);


if (!empty($id)) {
    $sql = "DELETE from genero where id='$id';";
    $rem = mysql_query($sql);
    if (!$rem)
        echo("Deu erro na consulta de remover genero");
} else echo "Campo id igual a zero";

header("location: lstGenero.php");
?>