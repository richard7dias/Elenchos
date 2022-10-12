<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbpassword = '1234';
$dbName = 'usuarios';

$conexao = new mysqli($dbHost, $$dbUsername, $dbpassword, $dbName);

if ($conexao->connect_errno) {
    echo 'Erro!';
} else {
    echo 'Ok!';
}