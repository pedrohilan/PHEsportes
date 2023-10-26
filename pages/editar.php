<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
</head>
<body>
<form method="POST" action="<?php echo $endereço?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" value="<?php echo $email;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha" value="<?php echo $senha;?>">
  </div>
  <button type="submit" class="btn btn-primary"><?php echo "$botao";?></button>
</form>

</body>
</html>