<?php 
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bancodedados = 'biblioteca';

    $mysqli = new mysqli($host, $usuario, $senha, $bancodedados);

    if($mysqli->connect_errno)
    {
        print "Ocorreu um erro na conexão do banco de dados (". $mysqli->connect_errno. " )". $mysqli->connect_error;
    }

?>