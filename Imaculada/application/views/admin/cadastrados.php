<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administração - Sou da Imaculada</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<!-- As a heading -->
	<nav class="navbar navbar-light mb-5 bg-light d-flex justify-content-between">
		<span class="navbar-brand mb-0 h1">Admin</span>
		<span>Olá Logado <button class="btn btn-sm btn-danger">Logout</button></span>
	</nav>
	<div class="container">
		<h1 class="text-center">Cadastrados</h1>
		<table class="table table-bordered table-sm">
			<thead>
				<th>#</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Whatsapp</th>
				<th>Participantes</th>
				<th>Pagamento confirmado</th>
			</thead>
			<tbody>
				<?php foreach($cadastrados as $cadastrado):?>
					<tr>
						<td><?=$cadastrado->id?></td>
						<td><?=$cadastrado->nome?></td>
						<td><?=$cadastrado->email?></td>
						<td><?=$cadastrado->whatsapp?></td>
						<td><?=$cadastrado->participantes?></td>
						<td><?=$cadastrado->confirmado?></td>
					</tr>					
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>