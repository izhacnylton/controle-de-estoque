<?php 
//usuario_crud.php
function buscarUsuario(PDO $conexao)
{

$sql ="SELECT id, nome, email FROM usuarios ORDER BY nome";
//$stmt
//query

$consulta = $conexao->prepare($sql);
$consulta->execute();

//fetch vetor que traz um unico regiustro do banco de dados
return $consulta->fetchAll(PDO::FETCH_ASSOC);
}

?>