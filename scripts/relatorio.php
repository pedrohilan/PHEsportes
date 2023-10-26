<?php
define('FPDF_FONTPATH', '../fpdf/font');
require("../fpdf/fpdf.php");
require('conexao/conexao.php');

$pdf = new FPDF('P', 'cm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

$sql = "SELECT usu_nome, pro_nome, pro_preco FROM tb_venda INNER JOIN tb_usuario ON (tb_usuario.usu_id = tb_venda.usu_id) INNER JOIN tb_produto ON (tb_produto.pro_id = tb_venda.pro_id)";
$buscar = mysqli_query($con,$sql);

while ($dados = $buscar->fetch_assoc()) {
	 $pdf->Cell(6,1,$dados['usu_nome'],1,0,'C');
	 $pdf->Cell(6,1,$dados['pro_nome'],1,0,'C');
	 $pdf->Cell(6,1,$dados['pro_preco'],1,1,'C');
}

$pdf->Output();
?>
<script type="text/javascript">
	alert("Relatório gerado com sucesso!");
	header("location: ../pages/admin.php");
</script>