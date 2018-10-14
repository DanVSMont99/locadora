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

    $genero = trim($_POST['txtGen']);
    $titulo = trim($_POST['txtTit']);
    $ano = trim($_POST['txtAno']);
    $valor = trim($_POST['txtValor']);

    if (!empty($genero) && !empty($titulo)) {
        $sql = "INSERT INTO filme (genero, titulo, ano, valor) VALUES ('$genero', '$titulo', '$ano', '$valor');";
        $ins = mysql_query($sql);
        if(!$ins)
            echo ("Deu erro na consulta de inserir novo filme");
    }
    else echo "Gênero está em branco ou Título está em branco!";

    header("location: lstFilme.php");
?>


