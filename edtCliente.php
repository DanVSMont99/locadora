<?php
$conexao =  mysql_connect("localhost","root","");
if (!$conexao){
    echo "Erro ao se conectar MySql <br/>" ;
    exit;
}

$banco  = mysql_select_db("locadora");
if (!$banco){
    echo "Erro ao se conectar ao banco locadora...";
    exit;
}

$id = trim($_POST['id']);
$nome = trim($_POST['txtNome']);
$sobrenome = trim($_POST['txtSNome']);
$email = trim($_POST['txtEmail']);
$endereco = trim($_POST['txtEnd']);
$cidade = trim($_POST['txtCid']);
$celular = trim($_POST['txtCel']);
$telefone = trim($_POST['txtTel']);

if (!empty($nome) && !empty($endereco)){
    $sql = "UPDATE cliente SET nome='$nome', sobrenome='$sobrenome', email='$email', endereco='$endereco', cidade='$cidade', celular='$celular', telefone='$telefone' WHERE id='$id';";
    $ins = mysql_query($sql);
    if(!$ins)
        echo ("Deu erro na consulta de editar Cliente");
}
else echo "Nome está em branco ou Endereço está em branco";

header("location: lstCliente.php");
?>