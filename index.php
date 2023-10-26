<?php
include_once("scripts/conexao/conexao.php");
session_start();

$ola = " ";
$botao = "Entrar";
$nome = " ";
$endereço = "#";
$l = " data-toggle='modal' data-target='#exampleModal' data-whatever='@mdo'";
$class = "btn-success";
$compra = "";
$br = "";
if (isset($_POST['logar'])) {
	$sql = "SELECT * FROM tb_usuario WHERE usu_email = '$_POST[email]' AND usu_senha = '$_POST[senha]'";
	$resultado = mysqli_query($con,$sql);

	if($dados = $resultado-> fetch_assoc()){
		if ($_POST['email'] == "admin" && $_POST['senha'] == "admin" || $_POST['email'] == "ADMIN" && $_POST['senha'] == "ADMIN" || $_POST['email'] == "ADMIN" && $_POST['senha'] == "admin" || $_POST['email'] == "admin" && $_POST['senha'] == "ADMIN") {
			
			$_SESSION['nome'] = $dados['usu_nome'];
			header("location: pages/admin.php");

		}else{

			$_SESSION['nome'] = $dados['usu_nome'];
			$_SESSION['idu'] = $dados['usu_id'];
			$ola = "Bem Vindo,"; 
			$nome = $_SESSION['nome'];
			$botao = "Sair";
			$endereço = "scripts/sair.php";
			$l = "";
			$class = "btn-danger";
			$compra = "COMPRAR";
		}
	}
	else{
		?>
		<script type="text/javascript">
			alert("Cadastro não encontrado!");
		</script>
		<?php
	}
}else{
	$ola = " ";
}
	if (isset($_GET['id'])) {
		$sql = "SELECT * FROM tb_produto where pro_id = ".$_GET['id'];
		$pesquisar = mysqli_query($con, $sql);
		$vetor = $pesquisar->fetch_assoc();
		$_SESSION['idp'] = $vetor['pro_id']; 
		header("location:scripts/compra.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHEsportes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav>
		<div class="container-fluid ca">
			<div class="row">
				<div class="col-12">
					<a href="index.php"><img src="img/logo2.png"></a>
					<label class="l"><?php echo "$ola"."$nome";?></label>
					<!--Botao do modal-->
					<a href="<?php echo $endereço;?>" class="btn <?php echo $class;?> a" <?php echo "$l";?> > <?php echo "$botao";?></a>

					<!--Modal-->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Insira os dados</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form method="POST" action="#">
										<div class="form-group">
											<label class="col-form-label"><i class="fas fa-user"></i> Email: </label>
											<input type="text" class="form-control" name="email">
										</div>
										<div class="form-group">
											<label class="col-form-label"><i class="fas fa-key"></i> Senha: </label>
											<input type="password" class="form-control" name="senha">
										</div>
										<div class="modal-footer">
											<a href="pages/registrar.php">Registrar-se</a>
											<button type="submit" class="btn btn-primary" name="logar"><i class="fas fa-sign-in-alt"></i> Logar</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav> 
	<div class="bus">
	<!--CARDS DE PRODUTOS-->
	</div><br>
	<?php
	$comando = "SELECT * FROM tb_produto";
	$listar = mysqli_query($con,$comando);
	$total = mysqli_num_rows($listar);
	
	if ($total > 0) {
	echo "<div class='container-fluid'>
			<div class='row'>
				<div class='col-12'>
					<div class='card-deck'>";
	while ($linha = $listar->fetch_assoc()) {
		echo "<div class='card' style='width: 18rem;'>
  				<img class='card-img-top' src='img/p1.jpg' alt='Card image cap'>
  				<center>
  				<figcaption><a href='index.php?id=".$linha['pro_id']."'>".$compra."</a></figcaption>
  				</center>
  					<div class='card-body'>
    					<h5 class='card-title'>".$linha['pro_nome']."</h5>
    					<p class='card-text'>".$linha['pro_preco']."</p>
  					</div>
			  </div>";		
	}
	echo "</div>
			</div>
				</div>
					</div>";
				}
				else{
					echo "<div class='text-center text-muted'>
					<h1>Nenhum produto cadastrado</h1> 
					</div> <br> <br> <br> ";
				}
	?> <br> <br>
	<!-- RODAPÉ -->
	<footer class="text-md-left text-center p-4 bc text-light">
		<div class="container-fluid">
			<div class="row">
				<div class="my-3 col-lg-4 col-md-6">
					<h3>EYE Sports</h3>
					<p class="text-muted">Dezembro de 1999</p>
					<p class="my-3">Endereço</p>
					<p class="my-3">Avenida Rua, <br> Capricórnio - Tangamandapio-AA</p>

				</div>
				<div class="my-3 col-lg-4 col-md-6">

				</div>
				<div class="my-3 col-lg-4 col-md-6">
					<h3>Contate-nos</h3>
					<p class="text-muted">(85) 9 9999-9999</p>
					<p class="my-3">E-mail</p>
					<p class="my-3">emai@gmail.com <br></p>

				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<p class="text-muted text-center">© Copyright 2018 EYE - All rights reserved. </p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>