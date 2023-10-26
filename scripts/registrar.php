<?php
include_once("conexao/conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$sql = "INSERT INTO tb_usuario (usu_email, usu_senha, usu_nome, usu_cidade, usu_estado) VALUES ('$email','$senha','$nome','$cidade','$estado')";
$inserir = mysqli_query($con,$sql);
?>
<script type="text/javascript">
	alert("Cadastro feito com sucesso!");
	location.href="../index.php";
</script>