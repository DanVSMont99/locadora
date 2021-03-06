<?php

session_start();
if (!isset($_SESSION['user']))
    Header("Location: ./loginPage.html");

?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Inserção de Filmes</title>
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
        <a href="lstEmprestimo.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ALOCAÇÃO</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">LogOut</a>
    </div>
</div>



<div class="w3-content" style="max-width:2000px;margin-top:60px;margin-left:-100px">

    <div class="container col-md-8">
        <h1>Cadastrar Novo Filme</h1>
        <form id="frmNovoFilme" name="frmNovoFilme" method="POST" action="insFilme.php">
            <div class="form-group">
                <label for="lblGen">Gênero: </label>
                <input class="form-control col-md-6" type="text" id="txtGen"
                       name="txtGen" placeholder="Informe a Categoria do Filme">
            </div>
            <div class="form-group">
                <label for="lblTit">Título: </label>
                <input class="form-control col-md-6" type="text" id="txtTit"
                       name="txtTit" placeholder="Informe o Título do Filme">
            </div>
            <div class="form-group">
                <label for="lblAno">Ano: </label>
                <input class="form-control col-md-6" type="text" id="txtAno"
                       name="txtAno" placeholder="Informe o Ano do Filme">
            </div>
            <div class="form-group">
                <label for="lblValor">Valor: </label>
                <input class="form-control col-md-6" type="text" id="txtValor"
                       name="txtValor" placeholder="Informe o Valor do Filme">
            </div>
            <input type="submit" id="btEnviar" name="btEnviar"
                                        class="btn btn-success btn-lg" value="Salvar">
            <input type="reset" id="btLimpar" name="btLimpar"
                                        class="btn btn-warning btn-lg" value="Limpar">
            <input type="button" id="bt_Cancel" name="bt_Cancel"
                                        class="btn btn-danger btn-lg" value="Cancelar"
                                            onclick="javascript:location.href='lstFilme.php'">
        </form>
    </div>
</body>
</head>
</html>