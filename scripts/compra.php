<?php
include_once("conexao/conexao.php");
session_start();
$usuario = $_SESSION['idu'];
$produto = $_SESSION['idp'];

$sql = "INSERT INTO tb_venda (usu_id, pro_id) VALUES ('$usuario','$produto')";
$comprar = mysqli_query($con,$sql);
?>
<script type="text/javascript">
	alert("Compra realizada com sucesso!");
	location.href="../index.php";
</script>