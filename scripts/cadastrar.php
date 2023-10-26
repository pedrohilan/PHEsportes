<?php
	require_once("conexao/conexao.php");
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];

	$sql = "INSERT INTO tb_produto (pro_nome, pro_preco)  VALUES ('$nome', '$preco')";
	$cadastrar = mysqli_query($con,$sql);
?>
	<script type="text/javascript">
		alert("Cadastrado com sucesso!");
		location.href="../pages/admin.php";
	</script>
