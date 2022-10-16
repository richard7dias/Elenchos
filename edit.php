<?php
//Para inserir dados nos campos
if (!empty($_GET['id'])) {
    include_once('conexao.php');

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM lancamentos WHERE id=$id";
    $res = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $data = $user_data['data'];
            $descricao = $user_data['descricao'];
            $categoria = $user_data['categoria'];
            $valor = $user_data['valor'];
        }
    }
} else {
    print_r('Erro');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenchos - Lançar Gasto</title>
    <link rel="stylesheet" href="style/style-geral.css">
    <link rel="stylesheet" href="style/style-edit.css">
    <link rel="shortcut icon" href="./imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="script/script-lancar-gasto.js" defer></script>
</head>

<body>
    <div id="janela-edit">
        <aside id="barra-edit">
            <a href="lancar-gasto.php" class="icon">
                <div id="fechar">
                    <i class="fa-solid fa-x"></i>
                </div>
            </a>
            <h3>Editar gasto</h3>
        </aside>
        <div>
            <form action="config/editar.php" method="POST" id="formulario">
                <p>Data: <input type="date" name="data" class="input-caixa" id="data"></p>
                <p>Descrição: <input type="text" name="descricao" class="input-caixa" id="descricao"></p>
                <p>Categria:
                    <select name="categoria" class="input-caixa" id="categoria">
                        <option value="vazio"></option>
                        <option value="mercado">Mercado</option>
                        <option value="combustivel">Combustível</option>
                        <option value="contas">Contas fixas</option>
                    </select>
                </p>
                <p>Valor: <input type="number" name="valor" class="input-caixa" id="valor"></p>
                <button type="submit" name="submit" id="btn-editar">Editar</button>
            </form>
        </div>
    </div>
</body>

</html>