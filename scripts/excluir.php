<?php
include_once("conexao/conexao.php");
$id = $_GET['id'];

$sql = "DELETE FROM tb_usuario WHERE usu_id = $id";
$excluir = mysqli_query($con,$sql);
?>
<script type="text/javascript">
	alert("Excluído com sucesso!");
	location.href="../pages/admin.php"
</script>