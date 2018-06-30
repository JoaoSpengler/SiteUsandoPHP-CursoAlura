<?php include("cabecalho.php");
include("conexao.php"); //arquivo com a conexao com o banco de dados;
include("banco-produto.php"); //arquivo com todas as funcoes referentes ao produto;

$id = $_GET['id'];
removeProduto($conexao,$id);
header("Location: produto-lista.php?removido=true");
die();
?>