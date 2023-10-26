<?php
include_once("../scripts/conexao/conexao.php");
session_start();
$tipo = "hidden";
$tipo2 = "hidden";
$tipo3 = "hidden";
$botao = " ";
$l1 = " ";
$l2 = " ";

$nomepro = " ";
$precopro = " ";
$l01 = " ";
$l02 = " ";
$endereco = " ";
$endereco2 = "../scripts/cadastrar.php";
$tipo01 = "hidden";
$tipo02 = "hidden";
$h2 = " ";
$botao2 = "Cadastrar";
if (isset($_SESSION['nome'])) {
}
else{
	header("location: ../index.php");
}
if (isset($_GET['id'])) {
	$l1 = "Email";
	$l2 = "Senha";
	$tipo = "text";
	$tipo2 = "submit";
	$endereco = "../scripts/editar.php";
	$botao = "Editar";
	$sql = "SELECT * FROM tb_usuario where usu_id = ".$_GET['id'];
	$pesquisar = mysqli_query($con, $sql);
	$vetor = $pesquisar->fetch_assoc(); 
	$id = $vetor['usu_id'];
	$email = $vetor['usu_email'];
	$senha = $vetor['usu_senha'];
	if (isset($_POST['produto'])) {
		$tipo = "hidden";
		$tipo2 = "hidden";
		$botao = " ";
		$l1 = " ";
		$l2 = " ";
	}
	
}
if (isset($_POST['produto'])) {
	$tipo3 = "submit";
	$l01 = "Nome";
	$l02 = "Preço";
	$tipo01 = "text";
	$tipo02 = "submit";
	$h2 = "Cadastrar novo";
}
if (isset($_GET['id2'])) {
	$sql = "SELECT * FROM tb_produto where pro_id = ".$_GET['id2'];
	$pesquisar2 = mysqli_query($con, $sql);
	$vetor2 = $pesquisar2->fetch_assoc(); 
	$id2 = $vetor2['pro_id'];
	$nomepro = $vetor2['pro_nome'];
	$precopro = $vetor2['pro_preco'];
	
	$botao2 = "Editar";
	$endereco2 = "../scripts/modificar.php";	
	$tipo3 = "submit";
	$l01 = "Nome";
	$l02 = "Preço";
	$tipo01 = "text";
	$tipo02 = "submit";
	$h2 = "Editar produto";

}
if (isset($_POST['listar'])) {
	$tipo = "hidden";
	$tipo2 = "hidden";
	$tipo3 = "hidden";
	$botao = " ";
	$l1 = " ";
	$l2 = " ";
}
if (isset($_POST['venda'])) {
	$tipo = "hidden";
	$tipo2 = "hidden";
	$tipo3 = "hidden";
	$botao = " ";
	$l1 = " ";
	$l2 = " ";
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid ca">
		<div class="row">
			<div class="col-12">
				<a href="../scripts/sair.php"><img src="../img/logo2.png"></a>
			</div>
		</div>
	</div>
	<center>
		<a href="../scripts/relatorio.php"><h4 class="text-muted">Gerar relatório sobre vendas</h4></a>
	</center>
	<!-- ------------BTN - CLIENTES-------------------------------- -->
	<div class="text-md-left text-center p-4 text-light">
		<div class="container">
			<div class="row">
				<div class="my-3 col-lg-4 col-md-4">
					<center>
						<form method="POST" action="#">
							<button type="submit" class="btn btn-success btn-lg" name="cliente"><i class="fas fa-users"></i> Clientes</button>
						</form>
					</center>
				</div>
				<!-- ----------BTN - PRODUTOS---------------------------- -->
				<div class="my-3 col-lg-4 col-md-4">
					<center>
						<form method="POST" action="#">
							<button type="submit" class="btn btn-success btn-lg" name="produto"><i class="fas fa-boxes"></i> Produtos</button>
						</form>
					</center>
				</div>
				<!-- BTN - VENDAS------------------------------------------ -->
				<div class="my-3 col-lg-4 col-md-4">
					<center>
						<form method="POST" action="#">
							<button type="submit" class="btn btn-success btn-lg" name="venda"><i class="fas fa-shopping-cart"></i> Vendas</button>
						</form>
					</center>
				</div>
			</div>
		</div> <br> <br> <br>
		<!-- ---------------------------------------------------- -->
		<?php
		if(isset($_POST['venda'])){
			$contador = 1;
			$sql = "SELECT usu_nome, pro_nome, pro_preco FROM tb_venda INNER JOIN tb_usuario ON (tb_usuario.usu_id = tb_venda.usu_id) INNER JOIN tb_produto ON (tb_produto.pro_id = tb_venda.pro_id)";
			$pesquisar = mysqli_query($con,$sql);

			echo "<div class='col-12'> 
			<div class='container-fluid'>
			<table class='table table-striped table-dark'>
			<thead> <tr>
			<th scope='col'> <b> # </b> </th>
			<th scope='col'> <b> Cliente </b> </th>
			<th scope='col'> <b> Produto </b> </th>
			<th scope='col'> <b> Preço </b> </th>
			</tr> </thead>";
			while ($dados = $pesquisar->fetch_assoc()) {
				echo "<tbody> 
				<tr>
				<th scope='row'>".$contador."</th>
				<td>".$dados['usu_nome']."</td>
				<td>".$dados['pro_nome']."</td>
				<td>".$dados['pro_preco'];	
				$contador++;
			}
			echo "</div> </div></table>";
		}
		?>
		<!-- ---------------------------------------------------- -->
		<?php
		if(isset($_POST['cliente'])){
			$contador = 1;
			$sql = "SELECT * FROM tb_usuario";
			$pesquisar = mysqli_query($con,$sql);

			echo "<div class='col-12'> 
			<div class='container-fluid'>
			<table class='table table-striped table-dark'>"
			. "<thead> <tr>
			<th scope='col'> <b> # </b> </th>
			<th scope='col'> <b> Email </b> </th>"
			. "<th scope='col'> <b> Senha </b> </th>"
			. "<th scope='col'> <b> Nome </b> </th>"
			. "<th scope='col'> <b> Editar </b> </th>"
			. "<th scope='col'> <b> Excluir </b> </th>
			</tr> </thead>";
			while ($dados = $pesquisar->fetch_assoc()) {
				echo "<tbody> 
				<tr>
				<th scope='row'>".$contador."</th>
				<td>".$dados['usu_email']."</td>"
				. "<td>".$dados['usu_senha']."</td>"
				. "<td>".$dados['usu_nome']."</td>"
				."<td><a href='admin.php?id=".$dados['usu_id']."'><i class='fas fa-pencil-alt'></i></a></td>"
				."<td><a href='../scripts/excluir.php?id=".$dados['usu_id']."'><i class='fas fa-trash-alt'></i></a></td>  </tbody>";	
				$contador++;
			}
			echo "</div> </div></table>";
		}
		?>
		<!-- -----------EDITAR CLIENTE--------------------- -->
		<form method="POST" action="<?php echo $endereco;?>">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<div class="form-group">
				<label><?php echo "$l1";?></label>
				<input type="<?php echo $tipo;?>" class="form-control" aria-describedby="emailHelp" placeholder="Email" name="email" value="<?php echo $email;?>">
			</div>
			<div class="form-group">
				<label><?php echo "$l2";?></label>
				<input type="<?php echo $tipo;?>" class="form-control" placeholder="Senha" name="senha" value="<?php echo $senha;?>">
			</div>
			<input type="<?php echo $tipo2;?>" class="btn btn-primary" name="editar" value="<?php echo $botao;?>">
		</form>
		<!-- ---------------------------------------------------- -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="col-6">
						<h2 class="text-muted"><?php echo $h2;?></h2>
					</div>
					<!-- ------------CADASTRAR PRODUTO------------------------- -->
					<form method="POST" action="<?php echo $endereco2;?>">
						<input type="hidden" name="id2" value="<?php echo $id2;?>">
						<div class="form-group">
							<label class="text-muted"><?php echo "$l01";?></label>
							<input type="<?php echo $tipo01;?>" class="form-control" aria-describedby="emailHelp" placeholder="Nome do produto" name="nome" required value="<?php echo $nomepro?>">
						</div>
						<div class="form-group">
							<label class="text-muted"><?php echo "$l02";?></label>
							<input type="<?php echo $tipo01;?>" class="form-control" required placeholder="R$ 100,00" name="preco" value="<?php echo $precopro?>">
						</div>
						<input type="<?php echo $tipo02;?>" class="btn btn-primary" name="cadastrar" value="<?php echo $botao2;?>">
					</form> <br> <br>
					<!-- ---------------LISTAR PRODUTOS----------------------- -->
					<div class="col-6">
						<form method="POST" action="#">
							<input type="<?php echo $tipo3;?>" class="btn btn-success btn-lg" name="listar" value="Listar">
						</form>
					</div>
				</div>
			</div>
		</div> <br>

		<?php
		if(isset($_POST['listar'])){
			$contador = 1;
			$sql = "SELECT * FROM tb_produto";
			$pesquisar = mysqli_query($con,$sql);

			echo "<div class='col-12'> 
			<div class='container-fluid'>
			<table class='table table-striped table-dark'>"
			. "<thead> <tr>
			<th scope='col'> <b> # </b> </th>
			<th scope='col'> <b> Nome </b> </th>"
			. "<th scope='col'> <b> Preço </b> </th>"
			. "<th scope='col'> <b> Editar </b> </th>"
			. "<th scope='col'> <b> Excluir </b> </th>
			</tr> </thead>";
			while ($dados = $pesquisar->fetch_assoc()) {
				echo "<tbody> 
				<tr>
				<th scope='row'>".$contador."</th>
				<td>".$dados['pro_nome']."</td>"
				. "<td>".$dados['pro_preco']."</td>"
				."<td><a href='admin.php?id2=".$dados['pro_id']."'><i class='fas fa-pencil-alt'></i></a></td>"
				."<td><a href='../scripts/deletar.php?id2=".$dados['pro_id']."'><i class='fas fa-trash-alt'></i></a></td>  </tbody>";	
				$contador++;
			}
			echo "</div> </div></table>";
		}
		?>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
	</html>