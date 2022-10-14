<?php
session_start();
//print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    //Caso o usuário não tenha feito o login, não acessará
    unset($_SESSION['email']); //Para destruir a informação e não entrar sem acesso
    unset($_SESSION['senha']);
    header('Location: index.php');
}
//Se estiver feito login, acesso permitido
$logado = $_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenchos - Lançar Gasto</title>
    <link rel="stylesheet" href="style/style-geral.css">
    <link rel="stylesheet" href="style/style-lancar-gasto.css">
    <link rel="shortcut icon" href="./imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="script/script-lancar-gasto.js" defer></script>
</head>

<body>
    <header>
        <aside id="barra-login">
            <div id="saudacao">
                <?php
                echo "<h3>Olá, $logado!</h3>";
                //print_r($_SESSION);
                ?>
            </div>
            <div id="sair">
                <a href="config/sair.php">Sair</a>
            </div>
        </aside>
        <div id="cabecalho">
            <img src="imagens/elenchos-logotipo.png" alt="Elenchos" id="logotipo">
            <p>Controle de finanças pessoais</p>
        </div>
    </header>
    <div id="conteudo">
        <nav>
            <a href="sistema.php" class="menu" id="resumo">Resumo</a>
            <a href="lancar-gasto.php" class="menu" id="lancar-gasto">Lançar Gasto</a>
            <a href="orcamento.php" class="menu" id="orcamento">Orçamento</a>
            <a href="relatorios.php" class="menu" id="relatorios">Relatórios</a>
        </nav>
        <main>
            <form id="lancamento">
                <h3>Lançar gasto</h3>
                <p>Data: <input type="date" class="input-caixa" id="data"></p>
                <p>Descrição: <input type="text" class="input-caixa" id="descricao"></p>
                <p>Categria:
                    <select id="categoria" class="input-caixa">
                        <option value="vazio"></option>
                        <option value="mercado">Mercado</option>
                        <option value="combustivel">Combustível</option>
                        <option value="contas">Contas fixas</option>
                    </select>
                </p>
                <p>Valor: <input type="number" class="input-caixa" id="valor"></p>
                <button onclick="lancar()">Lançar</button>
            </form>
            <div id="historico">
                <form id="lancados">
                    <h3>Histórico</h3>
                    <div class="lancado">
                        <p>Compra no mercado</p>
                        <button class="editar-lancado"><i class="fa-solid fa-pen"></i></button>
                        <button class="apagar-lancado"><i class="fa-solid fa-delete-left"></i></button>
                    </div>
                </form>
            </div>
        </main>
    </div>
    <footer>
        <p>&copy; 2022, <a href="https://github.com/richard7dias" target="_blank">Richard Oliveira</a>.</p>
    </footer>
</body>

</html>