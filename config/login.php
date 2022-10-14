<?php
session_start();
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    //Acessa
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM pessoas WHERE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../sistema.php');
    } else {
        unset($_SESSION['email']); //Para destruir a informação e não entrar sem acesso
        unset($_SESSION['senha']);
        header('Location: ../index.php');
    }
}
