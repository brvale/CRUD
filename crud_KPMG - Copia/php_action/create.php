<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $dataN = mysqli_escape_string($connect, $_POST['dataN']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']); 
    
    $sql = "INSERT INTO usuarios (nome, dataN, endereco, email, telefone) VALUES ('$nome', '$dataN', '$endereco', '$email', '$telefone')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php?');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../index.php?');
    endif;
endif;
?>