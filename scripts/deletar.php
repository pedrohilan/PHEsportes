<?php
include_once("conexao/conexao.php");
$id = $_GET['id2'];

$sql = "DELETE FROM tb_produto WHERE pro_id = $id";
$excluir = mysqli_query($con,$sql);
?>
<script type="text/javascript">
	alert("Excluído com sucesso!");
	location.href="../pages/admin.php"
</script>