<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "estoque";

//conexao com o banco de dados

try {
    //tentativa de conexao com o banco de dados
    //classe PDO  é usada para acessar varios tipos de bancos de dados usando a mesma função
    /*DSN DATA SOURCE NAME é a string de conexão usada para especificar o tipo de banco de
    dados ... o host e o nome do banco de dados*/

    $conexao = new PDO("
    mysql:host=$servidor;
    dbname=$banco;
    charset=utf8",
    $usuario,
    $senha);
} catch (\Throwable $erro) {
    //lançavel serve para qualquer tipo de erro ou exceçao
    //captura de erro caso a conexao falhe
}