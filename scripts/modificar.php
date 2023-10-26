<?php
require_once("conexao/conexao.php");

$id = $_POST['id2'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];

$sql = "UPDATE tb_produto SET pro_nome = '$nome', pro_preco = '$preco' where pro_id = $id";
$inserir = mysqli_query($con, $sql);

echo "<script type='text/javascript'>
 alert('Atualizado com sucesso!'); 
 location.href='../pages/admin.php';
 </script>";
 ?>