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

$filme = trim($_POST['txtFil']);

if (!empty($filme)) {
    $sql = "INSERT INTO dvd (filme) VALUES ('$filme');";
    $ins = mysql_query($sql);
    if(!$ins)
        echo ("Deu erro na consulta de inserir novo dvd");
}
else echo "Filme está em branco";

header("location: lstDvd.php");
?>


