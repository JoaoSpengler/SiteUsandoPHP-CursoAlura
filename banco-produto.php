<?php
function listaProdutos($conexao)//funcao para buscar os itens no banco de dados;
{
    $produtos = array();
    $resultado = mysqli_query($conexao, "select * from produtos");
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}
function insereProduto($conexao, $nome, $preco)//funcao para inserir o produto no banco de dados;
{
    $query = "insert into produtos (nome,preco) values('{$nome}', {$preco})"; //sentença sql pra inclusao no banco;
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}
function removeProduto($conexao, $id)
{
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao,$query);
}