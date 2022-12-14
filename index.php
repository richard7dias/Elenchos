<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenchos - Login</title>
    <link rel="stylesheet" href="style/style-login.css">
    <link rel="shortcut icon" href="./imagens/favicon.ico" type="image/x-icon">
    <script src="script/script-login.js" defer></script>
</head>

<body>
    <main>
        <section>
            <img src="imagens/elenchos-logotipo.png" alt="Elenchos" id="logotipo">
            <p>Controle de finanças pessoais</p>
        </section>
        <form action="config/login.php" method="POST">
            <p>Login</p>
            <input type="text" name="email" placeholder=" Email" id="login">
            <input type="password" name="senha" placeholder=" Senha" id="senha">
            <input type="submit" name="submit" class="botoes" id="entrar" value="Entrar"></input>
        </form>
        <div id="res"></div>
        <hr>
        <section id="nova-conta">
            <p>Ainda não tem login?</p>
            <a href="nova-conta.php"><button class="botoes" id="novaconta">Criar nova conta</button></a>
        </section>
    </main>
    <footer>
        <p>&copy; 2022 - <a href="https://github.com/richard7dias" target="_blank">Richard Oliveira</a></p>
    </footer>
</body>

</html>