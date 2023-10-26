<?php
require_once("conexao/conexao.php");

$id = $_POST['id'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "UPDATE tb_usuario SET usu_email = '$email', usu_senha = '$senha' where usu_id = $id";
$inserir = mysqli_query($con, $sql);

echo "<script type='text/javascript'>
 alert('Atualizado com sucesso!'); 
 location.href='../pages/admin.php';
 </script>";
 ?>