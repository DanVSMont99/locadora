<?php
    $nome = $_POST['nome'];
    $twitter = $_POST['twitter'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $password = $_POST['password'];
    $fruta = $_POST['fruta'];
    $check = $_POST['checkbox'];

    echo "Nome: " . $nome . "<br/>";
    echo "Twitter: " . $twitter . "<br/>";
    echo "E-Mail: " . $email . "<br/>";
    echo "Número: " . $numero . "<br/>";
    echo "Password: " . $password . "<br/>";
    echo "Fruta: " . $fruta . "<br/>";
    echo "Check: " . $check . "<br/>";

    if ($fruta=='on')
        echo "Fruta LARANJA <br/>";
    else echo "Fruta ABACAXIS <br/>";
?>