<?php

session_start();
if (!isset($_SESSION['user']))
    Header("Location: ./loginPage.html");

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
$id = trim($_REQUEST['id']);
$rs = mysql_query("SELECT * FROM cliente where id=".$id);
$edita = mysql_fetch_array($rs);

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Remover Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="Listas">LISTAS <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="lstCliente.php" class="w3-bar-item w3-button">CLIENTES</a>
                <a href="lstFilme.php" class="w3-bar-item w3-button">FILMES</a>
                <a href="lstGenero.php" class="w3-bar-item w3-button">GÊNEROS</a>
                <a href="lstDvd.php" class="w3-bar-item w3-button">DVD's</a>
            </div>
        </div>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="Cadastros">CADASTROS <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="frmInsCliente.php" class="w3-bar-item w3-button">CLIENTES</a>
                <a href="frmInsFilme.php" class="w3-bar-item w3-button">FILMES</a>
                <a href="frmInsGenero.php" class="w3-bar-item w3-button">GÊNEROS</a>
                <a href="frmInsDvd.php" class="w3-bar-item w3-button">DVD's</a>
            </div>
        </div>
        <a href="#alocacao" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ALOCAÇÃO</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">LogOut</a>
    </div>
</div>

<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>


<div class="w3-content" style="max-width:2000px;margin-top:65px">

<div class="container col-md-8">
    <h1>Remover Cliente</h1>
    <form id="frmRemCli" name="frmRemCli" method="GET" action="remCliente.php">
        <div class="form-group">
            <label for="lblId">
                <span class="text-xl font-weight-bold">ID: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['id']?> </span>
                <input type="hidden" id="id" name="id" value="<?php echo $edita['id']?>">
            </label>
        </div>
        <div class="form-group">
            <label for="lblNome">
                <span class="text-xl font-weight-bold">Nome: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['nome']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblSobrenome">
                <span class="text-xl font-weight-bold">Sobrenome: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['sobrenome']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblEmail">
                <span class="text-xl font-weight-bold">Email: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['email']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblEndereco">
                <span class="text-xl font-weight-bold">Endereço: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['endereco']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblCidade">
                <span class="text-xl font-weight-bold">Cidade: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['cidade']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblCelular">
                <span class="text-xl font-weight-bold">Celular: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['celular']?> </span>
            </label>
        </div>
        <div class="form-group">
            <label for="lblTelefone">
                <span class="text-xl font-weight-bold">Telefone: </span>
                <span class="text-xl font-weight-normal"><?php echo $edita['telefone']?> </span>
            </label>
        </div>
        <button id="btRem"  type="submit" class="btn btn-lg btn-success"><i class="fas fa-minus-circle"></i> Remover</button>
        <button id="btVoltar" name="bt_volta" class="btn btn-lg btn-danger"
                onclick="javascript:location.href='lstCliente.php'"> <i class="fas fa-undo-alt"></i> Cancelar</button>
    </form>
</div>
</body>
</html>





