<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $dataN = mysqli_escape_string($connect, $_POST['dataN']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    
    $id = mysqli_escape_string($connect, $_POST['id']); 
    
    $sql = "UPDATE usuarios SET nome= '$nome', dataN= '$dataN', endereco= '$endereco', email= '$email', telefone= '$telefone' WHERE id= '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php?');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: ../index.php?');
    endif;
endif;
?>