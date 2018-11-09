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

$dvd = trim($_POST['txtDvd']);
$cliente = trim($_POST['txtCli']);
$emprestimo = trim($_POST['txtEmprestimo']);
$pago = trim($_POST['txtPago']);
$dataa = trim($_POST['txtData']);
$devolucao = trim($_POST['txtDevolucao']);
$datadevolucao = trim($_POST['txtDataDevolucao']);
$situacao = trim($_POST['txtSit']);

if (!empty($dvd) && !empty($cliente)) {
    $sql = "INSERT INTO emprestimo (dvd, cliente, valor_emprestimo, valor_pago, dataa, prazo_devolucao, data_devolucao) VALUES ('$dvd', '$cliente', '$emprestimo', '$pago', '$dataa', '$devolucao', '$datadevolucao', '$situacao');";
    $ins = mysql_query($sql);
    if(!$ins)
        echo ("Deu erro na consulta de inserir novo empréstimo");
}
else echo "Dvd está em branco ou Cliente está em branco!";

header("location: lstEmprestimo.php");
?>


