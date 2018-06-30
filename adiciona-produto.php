<?php include("cabecalho.php");
include("conexao.php"); //arquivo com a conexao com o banco de dados;
include("banco-produto.php"); //arquivo com todas as funcoes referentes ao produto;

$nome = $_GET["nome"];
$preco = $_GET["preco"];

if(insereProduto($conexao,$nome,$preco)) {
?>
    <p class="text-success" >Produto <?php echo $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php
}else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger" >Produto <?php echo $nome; ?>, não foi adicionado: <?= $msg ?></p>
<?php
}
?>

<?php include("rodape.php");?>