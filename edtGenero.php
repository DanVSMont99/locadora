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
$descricao = trim($_POST['txtDesc']);

if (!empty($descricao)){
    $sql = "UPDATE genero SET descricao='$descricao' WHERE id='$id';";
    $ins = mysql_query($sql);
    if(!$ins)
        echo ("Deu erro na consulta de editar Gênero");
}
else echo "Descrição está em branco";

header("location: lstGenero.php");
?>