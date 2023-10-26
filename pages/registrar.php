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
				<a href="../index.php"><img src="../img/logo2.png"></a>
			</div>
		</div>
	</div><br>
	<center>
		<div class="container">
			<div class="row">
				<div class="col-12">
					
						<div class="card-header text-center">
							<h1 class="text-center in">Registre-se</h1>		
						</div>
						<form method="POST" action="../scripts/registrar.php">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label><i class="fas fa-envelope"></i> Email</label>
									<input type="email" class="form-control" placeholder="Email" name="email" required>
								</div>
								<div class="form-group col-md-6">
									<label><i class="fas fa-key"></i> Senha</label>
									<input type="password" class="form-control" placeholder="Senha" name="senha" required>
								</div>
							</div>
							<div class="form-group">
								<label><i class="fas fa-user"></i> Nome</label>
								<input type="text" class="form-control" placeholder="Digite seu nome" name="nome" required>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label><i class="fas fa-city"></i> Cidade</label>
									<input type="text" class="form-control" placeholder="Digite sua cidade" required name="cidade">
								</div>
								<div class="form-group col-md-4">
									<label><i class="far fa-circle"></i> Estado</label>
									<select name="estado" class="form-control">
										<option value="AC">Acre</option>
										<option value="AL">Alagoas</option>
										<option value="AP">Amapá</option>
										<option value="AM">Amazonas</option>
										<option value="BA">Bahia</option>
										<option value="CE">Ceará</option>
										<option value="DF">Distrito Federal</option>
										<option value="ES">Espírito Santo</option>
										<option value="GO">Goiás</option>
										<option value="MA">Maranhão</option>
										<option value="MT">Mato Grosso</option>
										<option value="MS">Mato Grosso do Sul</option>
										<option value="MG">Minas Gerais</option>
										<option value="PA">Pará</option>
										<option value="PB">Paraíba</option>
										<option value="PR">Paraná</option>
										<option value="PE">Pernambuco</option>
										<option value="PI">Piauí</option>
										<option value="RJ">Rio de Janeiro</option>
										<option value="RN">Rio Grande do Norte</option>
										<option value="RS">Rio Grande do Sul</option>
										<option value="RO">Rondônia</option>
										<option value="RR">Roraima</option>
										<option value="SC">Santa Catarina</option>
										<option value="SP">São Paulo</option>
										<option value="SE">Sergipe</option>
										<option value="TO">Tocantins</option>
									</select>
								</div>
							</div>
							<button type="submit" class="btn btn-primary b"><i class="fas fa-plus"></i> Registrar</button>
						</form>
					</div>
				</div>
			</div>
		</div> 
	</center> <br>
	<footer class="text-md-left text-center p-4 bc text-light">
		<div class="container">
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

</body>
</html>