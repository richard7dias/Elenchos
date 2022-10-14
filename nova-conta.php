<?php

if (isset($_POST['submit'])) {
    /*
    print_r($_POST['nome']);
    print_r($_POST['sobrenome']);
    print_r($_POST['email']);
    print_r($_POST['senha']);
    print_r($_POST['conf-senha']);
    */

    include_once('config/conexao.php');
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO pessoas(nome,sobrenome,email,senha) VALUES ('$nome','$sobrenome','$email','$senha')");
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenchos - Nova conta</title>
    <link rel="stylesheet" href="style/style-nova-conta.css">
    <link rel="shortcut icon" href="./imagens/favicon.ico" type="image/x-icon">
    <script src="script/script-nova-conta.js" defer></script>
</head>

<body>
    <main>
        <section>
            <img src="imagens/elenchos-logotipo.png" alt="Elenchos" id="logotipo">
            <p>Controle de finanças pessoais</p>
        </section>
        <form action="nova-conta.php" method="POST">
            <p>Nova conta</p>
            <input type="text" name="nome" placeholder=" Primeiro nome" id="nome" required>
            <input type="text" name="sobrenome" placeholder=" Sobrenome" id="sobrenome" required>
            <input type="text" name="email" placeholder=" Email" id="email" required>
            <input type="password" name="senha" placeholder=" Crie uma senha" id="senha" required>
            <button type="submit" name="submit" onclick="cadastro()">Cadastrar</button>
        </form>
        <a href="index.php" id="fazer-login">
            <p>Fazer login</p>
        </a>
        <div id="msg"></div>
    </main>
    <footer>
        <p>&copy; 2022 - <a href="https://github.com/richard7dias" target="_blank">Richard Oliveira</a></p>
    </footer>
</body>

</html>