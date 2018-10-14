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
$filme = trim($_POST['txtFil']);

if (!empty($filme)){
    $sql = "UPDATE dvd SET filme='$filme' WHERE id='$id';";
    $ins = mysql_query($sql);
    if(!$ins)
        echo ("Deu erro na consulta de editar DVD");
}
else echo "Filme está em branco";

header("location: lstDvd.php");
?>