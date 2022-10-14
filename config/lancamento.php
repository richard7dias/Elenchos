<?php
if (isset($_POST['submit'])) {
    /*
    print_r($_POST['data']);
    print_r($_POST['descricao']);
    print_r($_POST['categoria']);
    print_r($_POST['valor']);
    */

    include_once('conexao.php');
    $data = $_POST['data'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $valor = $_POST['valor'];

    $result = mysqli_query($conexao, "INSERT INTO lancamentos(data,descricao,categoria,valor) VALUES ('$data','$descricao','$categoria','$valor')");
    header('Location: ../lancar-gasto.php');
}
