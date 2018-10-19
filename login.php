<?php
$user = trim($_POST['user']);
$pwd = trim($_POST['password']);
$md5 = md5($pwd);

$conexao =  mysql_connect("localhost","root","");
if (!$conexao){
    echo "Erro ao se conectar MySql <br/>" ;
    exit;
}

$banco  = mysql_select_db("locadora");
if (!$banco){
    echo "Erro ao se conectar ao banco locadora!";
    exit;
}

$rs = mysql_query("SELECT * FROM  usuario WHERE user LIKE '$user'");
$linha = mysql_fetch_array($rs);

$pwd = md5($pwd);
if ($pwd==$linha['pwd']){
    session_start();
    $_SESSION['user'] = $user;
    header('location: index.php');
}

else {
    header('location: loginPage.html');
}

?>