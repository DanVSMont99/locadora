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
$genero = trim($_POST['txtGen']);
$titulo = trim($_POST['txtTit']);
$ano = trim($_POST['txtAno']);
$valor = trim($_POST['txtVal']);

if (!empty($genero) && !empty($titulo)){
    $sql = "UPDATE filme SET genero='$genero', titulo='$titulo', ano='$ano', valor='$valor' WHERE id='$id';";
    $ins = mysql_query($sql);
    if(!$ins)
        echo ("Deu erro na consulta de editar Filme");
}
else echo "Gênero está em branco ou Título está em branco";

header("location: lstFilme.php");
?>