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

$nome = trim($_POST['txtNome']);
$sobrenome = trim($_POST['txtSob']);
$email = trim($_POST['txtEmail']);
$endereco = trim($_POST['txtEnd']);
$cidade = trim($_POST['txtCid']);
$celular = trim($_POST['txtCel']);
$telefone = trim($_POST['txtTel']);

if (!empty($nome) && !empty($endereco)) {
    $sql = "INSERT INTO cliente (nome, sobrenome, email, endereco, cidade, celular, telefone) VALUES ('$nome', '$sobrenome', '$email', '$endereco', '$cidade', '$celular', '$telefone');";
    $ins = mysql_query($sql);
    if(!$ins)
        echo ("Deu erro na consulta de inserir novo cliente");
}
else echo "Nome está em branco ou Endereço está em branco!";

header("location: lstCliente.php");
?>


